<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Colors\Enums\RecomendationCategories;
use Domain\Colors\Models\Image;
use Domain\Users\Models\UserDailyChoice;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class GetRecommendationsController
{
    public function __invoke(Request $request): JsonResponse
    {
        $categoriesString = implode(', ' ,array_column(RecomendationCategories::cases(), 'value'));

        $images = UserDailyChoice::where('user_id', $request->user()->id)->limit(3)->get();

        $lastEmotion = $images->first()->emotion->adjectives;

        $lastImagesWithoutFirst = $images->splice(1);
        $emotionsWithoutfirst = $lastImagesWithoutFirst->map(fn(Image $image) => $image->emotion->adjectives);

        $pastEmotionsString = implode('|||', $emotionsWithoutfirst->toArray());

        $context = <<<EOT

The last emotion for the user is:
1. $lastEmotion

The past emotions are:
$pastEmotionsString

Please suggest a single activity to help neutralize or balance this emotions.
You should guide your recommendations by the following ***categories***: {$categoriesString}.
You should only pick one category that best suit the best recomendation for the user.
Should be a direct answer to show in a UI, specific, achievable and with a short explanation.
Provide examples in the message of music bands, exercises, books to read or anything that is related with the category.
It should not have the context of the question.
Limit by 20 words

Return it as JSON string. The category should be one present in ***categories***. Example:

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
                'recomendation_category' => RecomendationCategories::from($decodedResponse->category),
                'image' => asset('assets/' . $decodedResponse->category . '.png' ),
            ])
            ->respond();
    }
}
