<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\GoogleRequest;
use Domain\Actions\GoogleLoginAction;
use Illuminate\Http\JsonResponse;

class GoogleUserController
{
    public function __invoke(GoogleRequest $request, GoogleLoginAction $action): JsonResponse
    {
        $response = $action
            ->execute($request->all());

        return responder()
            ->success($response)
            ->respond();
    }
}
