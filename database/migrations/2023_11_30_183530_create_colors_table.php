<?php
declare(strict_types=1);

use Domain\Colors\Models\Color;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emotion1');
            $table->string('emotion2');
            $table->string('emotion3');
            $table->string('emotion4');
            $table->timestamps();
        });

        Color::create([
            'name' => 'red',
            'emotion1' => 'Passion, emotional intensity, strong desire',
            'emotion2' => 'Anger, Rage, Fury',
            'emotion3' => 'Love, Romantic, Affectionate feelings',
            'emotion4' => 'Excitement, Enthusiams',
        ]);
        Color::create([
            'name' => 'blue',
            'emotion1' => 'Calmness, tranquility, relaxation',
            'emotion2' => 'serenity, sense of inner peace, quiet and harmonious state of mind',
            'emotion3' => 'Sadness, melancholy, sense of depth and introspection',
            'emotion4' => 'trust, reliability, sense of security and stability',
        ]);
        Color::create([
            'name' => 'yellow',
            'emotion1' => 'Joy, happiness, cheerful, positive, uplifting mood',
            'emotion2' => 'optimism, hopefulness, sunny and bright future',
            'emotion3' => 'Energy, enthusiasm, dynamism, and a zest for life.',
            'emotion4' => 'Creativity, stimulate mental activity and inspiration',
        ]);
        Color::create([
            'name' => 'green',
            'emotion1' => 'Balance, Harmony, Symmetry, Stability',
            'emotion2' => 'Vitality, Growth, Renewal, New Start',
            'emotion3' => 'Natural, tranquility, peace, calming effect',
            'emotion4' => 'Jealousy, envy, resentmnet, bitterness',
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
