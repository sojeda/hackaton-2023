<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use OpenAI\Laravel\Facades\OpenAI;

class GetRecommendationsController
{
    public function __invoke(): JsonResponse
    {
        $context = 'the user has been feeling sad for 3 days. Please suggest a single activity to help neutralize or balance this emotion, it could be a hobby (sports, lectures, cooking recipes, listen to music, watch a video, watch a tv show). Should be a direct answer to show in a UI, specific, achievable and with a short explanation.  It should not have the context of the question. Limit by 20 words';

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => $context],
            ],
        ]);

        return responder()
            ->success([$result->choices[0]->message->content])
            ->respond();
    }
}
