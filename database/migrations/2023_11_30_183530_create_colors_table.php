<?php
declare(strict_types=1);

use Domain\Colors\Models\Color;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('emotions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')->constrained();
            $table->string('adjectives');
            $table->timestamps();
        });


        Color::create([
            'name' => 'red',
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

    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
