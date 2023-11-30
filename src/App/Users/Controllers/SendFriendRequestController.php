<?php

namespace App\Users\Controllers;

use App\Users\Transformers\UserTransformer;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;

class SendFriendRequestController
{
    public function __invoke(User $sender, User $recipient): JsonResponse
    {
        $sender->befriend($recipient);

        return responder()
            ->success($sender, UserTransformer::class)
            ->respond(JsonResponse::HTTP_CREATED);
    }
}
