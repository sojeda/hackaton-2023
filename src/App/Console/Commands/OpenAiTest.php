<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAiTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:open-ai-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Dime una frase motivacional!'],
            ],
        ]);

        $image = OpenAI::images()->create([
            'model' => 'dall-e-3',
            'prompt' => 'Quiero cuatro imagenes Liquid Light psicodelogico del color rojo',
        ]);

        $this->info(json_encode($image));
    }
}
