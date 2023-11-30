<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Auth;
use Domain\Colors\Models\Image;
use Domain\Users\Models\User;
use Illuminate\Http\JsonResponse;
use Request;
use Support\Controllers\Controller;

class SaveImageController extends Controller
{
    public function __invoke(Image $image): JsonResponse
    {

        Auth::user()->images()->save($image);

        return responder()
            ->success(["message" => "Image saved successfully", "image" => $image])
            ->respond();
    }
}
