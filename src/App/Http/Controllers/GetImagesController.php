<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Transformers\ImageTransformer;
use Domain\Colors\Models\Color;
use Domain\Colors\Models\Emotion;
use Illuminate\Http\JsonResponse;
use Support\Controllers\Controller;

class GetImagesController extends Controller
{
    public function __invoke(
        Color $color,
    ): JsonResponse {
        $color
            ->load([
                'emotions.images',
            ])
            ->firstOrFail();

        $images = $color->emotions->map(fn(Emotion $emotion) => $emotion->images->random());

        return responder()
            ->success($images, ImageTransformer::class)
            ->respond();
    }
}
