<?php

declare(strict_types=1);

namespace App\Users\Transformers;

use Flugg\Responder\Transformers\Transformer;
use Hootlex\Friendships\Models\Friendship;

class FriendshipTransformer extends Transformer
{
    public function transform(Friendship $friendship): array
    {
        return [
            'from_id' => (int) $friendship->sender->id,
            'from' => (string) $friendship->sender->name,
            'to_id' => (int) $friendship->recipient->id,
            'to' => (string) $friendship->recipient->name,
            'status' => (string) $friendship->status,
        ];
    }
}
