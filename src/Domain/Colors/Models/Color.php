<?php
declare(strict_types=1);

namespace Domain\Colors\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Domain\Colors\Models\Color
 *
 * @property int $id
 * @property string $name
 * @property string $emotion1
 * @property string $emotion2
 * @property string $emotion3
 * @property string $emotion4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereEmotion1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereEmotion2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereEmotion3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereEmotion4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereUpdatedAt($value)
 * @mixin Eloquent
 *
 */
class Color extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
}