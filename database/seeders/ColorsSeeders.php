<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Colors\Models\Color;
use Illuminate\Database\Seeder;

class ColorsSeeders extends Seeder
{
    public function run(): void
    {
        Color::create([
            'name' => 'red',
            'default_hex' => '#EA4335'
        ])->emotions()
            ->createMany([[
                'adjectives' => 'Passion, emotional intensity, strong desire',
            ], [
                'adjectives' => 'Anger, Rage, Fury',
            ], [
                'adjectives' => 'Love, Romantic, Affectionate feelings',
            ], [
                'adjectives' => 'Excitement, Enthusiams',
            ]]);

        Color::create([
            'name' => 'blue',
            'default_hex' => '#5A76D7'
        ])->emotions()
            ->createMany([[
                'adjectives' => 'Calmness, tranquility, relaxation',
            ], [
                'adjectives' => 'serenity, sense of inner peace, quiet and harmonious state of mind',
            ], [
                'adjectives' => 'Sadness, melancholy, sense of depth and introspection',
            ], [
                'adjectives' => 'trust, reliability, sense of security and stability',
            ]]);


        Color::create([
            'name' => 'yellow',
            'default_hex' => '#FBBC04'
        ])->emotions()
            ->createMany([[
                'adjectives' => 'Joy, happiness, cheerful, positive, uplifting mood',
            ], [
                'adjectives' => 'optimism, hopefulness, sunny and bright future',
            ], [
                'adjectives' => 'Energy, enthusiasm, dynamism, and a zest for life.',
            ], [
                'adjectives' => 'Creativity, stimulate mental activity and inspiration',
            ]]);

        Color::create([
            'name' => 'green',
            'default_hex' => '#34A853'
        ])->emotions()
            ->createMany([[
                'adjectives' => 'Balance, Harmony, Symmetry, Stability',
            ], [
                'adjectives' => 'Vitality, Growth, Renewal, New Start',
            ], [
                'adjectives' => 'Natural, tranquility, peace, calming effect',
            ], [
                'adjectives' => 'Jealousy, envy, resentmnet, bitterness',
            ]]);
    }
}
