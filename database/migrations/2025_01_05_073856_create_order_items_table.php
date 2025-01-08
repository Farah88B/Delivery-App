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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // علاقة مع جدول الطلبات
            $table->foreignId('restaurant_food_id')->constrained('restaurant_food')->onDelete('cascade'); // علاقة مع جدول الطعام
            $table->integer('quantity');
            $table->decimal('price', 10, 2); // السعر وقت الطلب
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
