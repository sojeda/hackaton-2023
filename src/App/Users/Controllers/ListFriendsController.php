<?php

namespace App\Users\Controllers;

use App\Users\Transformers\UserTransformer;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;

class ListFriendsController
{
    public function __invoke(User $user): JsonResponse
    {
        $friends = $user->getAcceptedFriendships();

        return responder()
            ->success($friends, UserTransformer::class)
            ->respond(JsonResponse::HTTP_OK);
    }
}
