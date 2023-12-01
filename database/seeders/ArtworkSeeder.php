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
        Artwork::query()->createMany([
            [
                'description' => 'Neutralization/Calming:Suggested Color: Green',
                'path' => '',
                'data' => '',
                'color_id' => Color::query()->where('name', 'red')->firstOrFail()->id,
            ]
        ]);

        Artwork::query()->createMany([
            [
                'description' => '',
                'path' => '',
                'data' => '',
                'color_id' => Color::query()->where('name', 'blue')->firstOrFail()->id,
            ]
        ]);

        Artwork::query()->createMany([
            [
                'description' => '',
                'path' => '',
                'data' => '',
                'color_id' => Color::query()->where('name', 'yellow')->firstOrFail()->id,
            ]
        ]);

        Artwork::query()->createMany([
            [
                'description' => '',
                'path' => '',
                'data' => '',
                'color_id' => Color::query()->where('name', 'green')->firstOrFail()->id,
            ]
        ]);
    }
}
