<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Artwork;
use Domain\Colors\Models\Color;
use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artwork::query()->create([
            'description' => 'Red Emotion',
            'path' => asset('assets/photo1.png'),
            'data' => [
                ['neutralization' => 'Green'],
                ['description' => 'Green is associated with nature and tranquility. It can counterbalance the intensity of red, offering balance and serenity.']
            ],
            'color_id' => Color::query()->where('name', 'red')->firstOrFail()->id,
        ]);

        Artwork::query()->create([
            'description' => 'Yellow Emotion',
            'path' => asset('assets/photo2.png'),
            'data' => [
                ['neutralization' => 'Blue'],
                ['description' => 'Blue is known for its calming and relaxing properties. It counteracts the bright energy of yellow, promoting peace and stability.']
            ],
            'color_id' => Color::query()->where('name', 'blue')->firstOrFail()->id,
        ]);

        Artwork::query()->create([
            'description' => 'Blue',
            'path' => asset('assets/photo3.png'),
            'data' => [
                ['neutralization' => 'Orange'],
                ['description' => 'Orange is a warm color that can add vitality and positive energy, countering the sometimes cool tranquility of blue.']
        ],
            'color_id' => Color::query()->where('name', 'yellow')->firstOrFail()->id,
        ]);

        Artwork::query()->create([
            'description' => 'Green',
            'path' => asset('assets/photo4.png'),
            'data' => [
                ['neutralization' => 'Purple'],
                ['description' => 'Purple combines the calming properties of blue with the vitality of red. It can balance the stability of green with a touch of energy.']],
            'color_id' => Color::query()->where('name', 'green')->firstOrFail()->id,
        ]);
    }
}
