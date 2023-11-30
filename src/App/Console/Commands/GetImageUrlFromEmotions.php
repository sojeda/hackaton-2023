<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Domain\Colors\Models\Color;
use Domain\Colors\Models\Emotion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use OpenAI\Laravel\Facades\OpenAI;

class GetImageUrlFromEmotions extends Command
{
    /**
     * @var string
     */
    protected $signature = 'openai:get-images-from-emotions';

    /**
     * @var string
     */
    protected $description = 'Get images from emotions from Dall-e';

    public function handle(): void
    {
        $this->info('starting');

        Color::with('emotions')
            ->get()->map(function (Color $color) {
                $color->emotions->map(function (Emotion $emotion) use ($color) {
                    $this->info("Generating image for color: $color->name, Emotion: $emotion->adjectives");

                    $imageUrl = $this->getImageFromEmotions($emotion->adjectives);
                    $response = Http::get($imageUrl);

                    if ($response->successful()) {
                        $imageContent = $response->body();

                        $fileName = "imagen_{$color->name}" . time() . '.png';
                        Storage::disk('public')->put('images/' . $fileName, $imageContent);
                        $urlEnStorage = Storage::url('images/' . $fileName);

                        $emotion->images()->create([
                            'path' => $urlEnStorage,
                            'used' => false,
                        ]);

                        $this->info("Save $urlEnStorage");
                    } else {
                        $this->info("Not Save");
                    }
                });
            });
        $this->info('finished');
    }

    private function getImageFromEmotions(string $emotions)
    {
        $prompt = "Please generate an image depicting a psychedelic effect using the 'Liquid Light' technique, infused with vibrant hues of red. The images should evoke an abstract, flowing, and ethereal feel that characterizes the 'Liquid Light' concept, which involves organic interactions of color and light patterns, primarily associated with visual displays from the psychedelic era of the 1960s. That reflects this emotion: {$emotions}";
        $image = OpenAI::images()->create([
            'model' => 'dall-e-2',
            'prompt' => $prompt,
            'size' => '256x256'
        ]);

        return $image->data[0]->url;
    }
}
