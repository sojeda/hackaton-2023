<?php

namespace App;

use Domain\Colors\Models\Color;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Artwork
 *
 * @property int $id
 * @property string $description
 * @property string $path
 * @property mixed $data
 * @property int $color_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork query()
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artwork whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Artwork extends Model
{
    protected $guarded = [];

    protected $casts = [
        'data' => 'array'
    ];

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

}
