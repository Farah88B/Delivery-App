<?php

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
        Schema::create('favorite_food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->CascadeOnDelete();
            $table->foreignId('restaurant_food_id')->constrained('restaurant_food')->CascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_food');
    }
};
