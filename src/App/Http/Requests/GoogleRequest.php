<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoogleRequest extends FormRequest
{
    public const GOOGLE_TOKEN = 'googleToken';

    public function rules(): array
    {
        return [
            self::GOOGLE_TOKEN => ['required'],
        ];
    }
}
