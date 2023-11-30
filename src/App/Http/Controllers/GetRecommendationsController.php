<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use OpenAI\Laravel\Facades\OpenAI;

class GetColorsController
{
    public function __invoke(): JsonResponse
    {
        $context = 'Give me 4 color variations, one for each of blue, green, red, and yellow in hexadecimal, separated by commas. Just generate an array of key-value pairs, no more text than that.';

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $context],
            ],
        ]);

        $colors = json_decode($result->choices[0]->message->content, true);

        return responder()
            ->success([
                'colors' => [
                    'red' => $colors['red'] ?? '#EA4335',
                    'blue' => $colors['blue'] ?? '#5A76D7',
                    'yellow' => $colors['yellow'] ?? '#FBBC04',
                    'green' => $colors['green'] ?? '#34A853',
                ],
            ])
            ->respond();
    }
}
