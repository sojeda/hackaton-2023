<?php

namespace App\Users\Controllers;

use App\Users\Transformers\UserTransformer;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;

class ListPendingFriendRequestsController
{
    public function __invoke(User $user): JsonResponse
    {
        $friends = $user->getFriendRequests();

        return responder()
            ->success($friends, UserTransformer::class)
            ->respond(JsonResponse::HTTP_OK);
    }
}
