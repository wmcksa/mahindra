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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('language_id')->constrained()->cascadeOnDelete(); //رقم اللغة
            $table->string('site_name'); //اسم الموقع
            $table->string('site_logo'); //صورة الموقع
            $table->string('email')->unique();
            $table->string('phone');
            $table->foreignId('dealer_locator_id')->constrained()->cascadeOnDelete(); //الفرع الرئيسي

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
