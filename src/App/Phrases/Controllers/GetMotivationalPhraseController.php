<?php
declare(strict_types=1);

namespace App\Phrases\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Support\Controllers\Controller;

class GetMotivationalPhraseController extends Controller
{
    public function __invoke(): string
    {
        $context = 'Give me a motivational phrase. Dont wrap it on quotes or double quotes';

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $context],
            ],
        ]);

        return $result->choices['0']->message->content;
    }
}
