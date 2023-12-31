<?php

declare(strict_types=1);

namespace App\Http\Transformers;

use Domain\Colors\Models\Image;
use Flugg\Responder\Transformers\Transformer;

class ImageTransformer extends Transformer
{
    /**
     * @return array<string, mixed>
     */
    public function transform(Image $image): array
    {
        return [
            'id' => $image->id,
            'path' => asset($image->path),
        ];
    }
}
