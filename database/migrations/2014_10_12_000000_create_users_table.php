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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->bigInteger('mobile')->unique();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->string('otp')->nullable();
            $table->timestamp('otp_expires_at')->nullable(); // تاريخ انتهاء الرمز
            $table->string('profile_image')->nullable();
            $table->string('preferred_language')->default('en');
            $table->string('reset_code')->nullable(); // رمز التحقق
            $table->timestamp('reset_code_expires_at')->nullable(); // تاريخ انتهاء الرمز
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
//        Schema::table('users', function (Blueprint $table) {
//            $table->dropColumn(['otp', 'otp_expires_at']);
//            $table->dropColumn(['reset_code', 'reset_code_expires_at']);
//        });
    }
};
