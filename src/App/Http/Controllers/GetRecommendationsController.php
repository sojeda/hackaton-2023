<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use OpenAI\Laravel\Facades\OpenAI;

class GetRecommendationsController
{
    public function __invoke(): JsonResponse
    {
        $context = '';

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'psychologist', 'content' => $context],
            ],
        ]);

        $colors = json_decode($result->choices[0]->message->content, true);

        return responder()
            ->success([])
            ->respond();
    }
}
