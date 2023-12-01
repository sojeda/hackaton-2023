<?php

declare(strict_types=1);

namespace Domain\Users\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Domain\Users\Models\UserDailyChoice
 *
 * @property int $id
 * @property int $user_id
 * @property int $image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDailyChoice whereUserId($value)
 * @mixin \Eloquent
 */
class UserDailyChoice extends Model
{
    protected $table = 'user_emotions_history';

    protected $guarded = [];
}
