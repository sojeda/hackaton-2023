<?php

namespace App\Users\Controllers;

use App\Users\Transformers\UserTransformer;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;

class DeleteFriendController
{
    public function __invoke(User $user, User $friend): JsonResponse
    {
        $user->unfriend($friend);

        return responder()
            ->success($user, UserTransformer::class)
            ->respond(JsonResponse::HTTP_OK);
    }
}
