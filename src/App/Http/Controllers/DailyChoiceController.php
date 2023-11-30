<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Colors\Models\Image;
use Domain\Users\Models\User;
use Domain\Users\Models\UserDailyChoice;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Support\Controllers\Controller;

class DailyChoiceController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();

        $image = Image::query()->find($request->get('imageId'));

        $choice = UserDailyChoice::create([
            'user_id' => $user->id,
            'image_id'=> $image->id
        ]);

        return responder()
            ->success($choice)
            ->respond();
    }
}
