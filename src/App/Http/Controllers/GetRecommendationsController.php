<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Colors\Enums\RecomendationCategories;
use Domain\Colors\Models\Image;
use Domain\Users\Models\UserDailyChoice;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;

class GetRecommendationsController
{
    public function __invoke(Request $request): JsonResponse
    {
        $categories = array_column(RecomendationCategories::cases(), 'value');
        $category = $categories[array_rand($categories)];

        $choices = UserDailyChoice::where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)->get();

        /** @var UserDailyChoice $firstChoice */
        $firstChoice = $choices->first();

        $lastEmotion = $firstChoice->image->emotion->adjectives;

        $lastImagesWithoutFirst = $choices->splice(1);
        $emotionsWithoutfirst = $lastImagesWithoutFirst->map(fn(Image $image) => $firstChoice->image->emotion->adjectives);

        $pastEmotionsString = implode('|||', $emotionsWithoutfirst->toArray());

        $context = <<<EOT
The user's last emotion is:
1. $lastEmotion

Past emotions include:
$pastEmotionsString

Suggest a single activity to neutralize or balance these emotions.
Guide recommendations by the following ***category***: {$category}.
Choose one specific, achievable activity for the user. Provide examples (e.g., music bands, exercises, books).
Limit to 20 words for a direct UI answer with a short explanation.

Return as a JSON string. Example:

{
    "title": "PUT THE TITLE HERE",
    "message": "PUT THE MESSAGE HERE",
    "category": "THE_CATEGORY"
}
EOT;

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => $context],
            ],
        ]);

        $decodedResponse = json_decode($result->choices[0]->message->content);

        return responder()
            ->success([
                'title' => $decodedResponse->title,
                'message' => $decodedResponse->message,
                'recomendation_category' => RecomendationCategories::from($category),
                'image' => asset('assets/' . $category . '.png' ),
            ])
            ->respond();
    }
}
