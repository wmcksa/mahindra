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
        Schema::create('dealer_locators', function (Blueprint $table) {
            $table->id();
            $table->string('country'); //الدولة
            $table->string('city'); //المدينة
            $table->string('location'); //الشارع
            $table->string('beginning_working_day'); //بداية ايام العمل
            $table->string('end_working_day'); //نهاية ايام العمل
            $table->string('beginning_working_hours'); //بداية ساعات العمل
            $table->string('end_working_hours'); //نهاية ساعات العمل
            $table->string('mobile'); //رقمالهاتف
            $table->foreignId('language_id')->constrained()->cascadeOnDelete(); //رقم اللغة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_locators');
    }
};
