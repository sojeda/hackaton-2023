<?php

declare(strict_types=1);

namespace Domain\Colors\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Domain\Colors\Models\Emotion
 *
 * @property int                             $id
 * @property int                             $color_id
 * @property string                          $adjectives
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Domain\Colors\Models\Color $color
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion whereAdjectives($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emotion whereUpdatedAt($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Domain\Colors\Models\Image> $images
 * @property-read int|null $images_count
 *
 * @mixin \Eloquent
 */
class Emotion extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
