<?php

use Domain\Colors\Models\Color;
use Domain\Colors\Models\Image;
use Domain\Users\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_emotions_history', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();

            $table
                ->foreignIdFor(Image::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
