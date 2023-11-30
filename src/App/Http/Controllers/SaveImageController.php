<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Colors\Models\Image;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Support\Controllers\Controller;

class SaveImageController extends Controller
{
    public function __invoke(Request $request, Image $image): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();

        $user->images()->save($image);

        return responder()
            ->success(["message" => "Image saved successfully", "image" => $image])
            ->respond();
    }
}
