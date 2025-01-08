<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // علاقة مع جدول المستخدمين
           // $table->timestamp('order_date')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['Under Preparation', 'Under delivery', 'Delivered'])->default('Under Preparation'); // حالة الطلب
            //////////// ترجمة حالة الطلب
            $table->string('payment_method')->default('cash');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
