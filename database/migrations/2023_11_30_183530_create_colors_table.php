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
            $table->string('default_hex');
            $table->timestamps();
        });

        Schema::create('emotions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')->constrained();
            $table->string('adjectives');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
