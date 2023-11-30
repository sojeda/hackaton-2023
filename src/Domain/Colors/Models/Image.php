<?php

declare(strict_types=1);

namespace Domain\Colors\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Domain\Colors\Models\Image
 *
 * @property int                             $id
 * @property string                          $path
 * @property int                             $emotion_id
 * @property int                             $used
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Domain\Colors\Models\Emotion $emotion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereEmotionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUsed($value)
 *
 * @mixin \Eloquent
 */
class Image extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function emotion(): BelongsTo
    {
        return $this->belongsTo(Emotion::class);
    }
}
