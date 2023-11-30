<?php

namespace App\Http\Controllers;

use Domain\Colors\Models\Color;
use Illuminate\Http\JsonResponse;
use OpenAI\Laravel\Facades\OpenAI;

class GetColorsController
{
    public function __invoke(): JsonResponse
    {
        $colors = Color::all();

        $implode = $colors->map->name->implode(', ');

        $context = "Give me {$colors->count()} color variations, one for each of $implode in hexadecimal, separated by commas. Just generate an array of key-value pairs, no more text than that. Please do not converge them into grey/brown colors - keep them well differentiated , and the 4 colors should combine and look nice in a Mobile App.";

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $context],
            ],
        ]);

        $colorsIa = json_decode($result->choices[0]->message->content, true);

        // TODO: Hacer que los colores vengan en un orden random
        return responder()
            ->success([
                'colors' => [
                    [
                        'id' => $colors[0]['id'],
                        'name' => $colors[0]['name'],
                        'value' => $colorsIa[$colors[0]['name']] ?? $colors[0]['default_hex'],
                    ],
                    [
                        'id' => $colors[1]['id'],
                        'name' => $colors[1]['name'],
                        'value' => $colorsIa[$colors[1]['name']] ?? $colors[1]['default_hex'],
                    ],
                    [
                        'id' => $colors[2]['id'],
                        'name' => $colors[2]['name'],
                        'value' => $colorsIa[$colors[2]['name']] ?? $colors[2]['default_hex'],
                    ],
                    [
                        'id' => $colors[3]['id'],
                        'name' => $colors[3]['name'],
                        'value' => $colorsIa[$colors[3]['name']] ?? $colors[3]['default_hex'],
                    ],
                ],
            ])
            ->respond();
    }
}
