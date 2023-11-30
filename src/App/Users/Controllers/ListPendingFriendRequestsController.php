<?php

namespace App\Users\Controllers;

use App\Users\Transformers\FriendshipTransformer;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;

class ListPendingFriendRequestsController
{
    public function __invoke(User $user): JsonResponse
    {
        $friends = $user->getPendingFriendships();

        return responder()
            ->success($friends, FriendshipTransformer::class)
            ->respond(JsonResponse::HTTP_OK);
    }
}
