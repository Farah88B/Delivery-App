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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade'); // علاقة مع جدول السلة
            $table->foreignId('restaurant_food_id')->constrained('restaurant_food')->onDelete('cascade'); // علاقة مع جدول الطعام
            $table->integer('quantity');
            $table->decimal('price', 10, 2); // السعر عند الإضافة
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
