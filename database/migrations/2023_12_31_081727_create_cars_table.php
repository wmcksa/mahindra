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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();

            $table->foreignId('dealer_locator_id')->constrained()->cascadeOnDelete(); //رقم الفرع
            $table->foreignId('model_car_id')->constrained()->cascadeOnDelete(); //رقم المودل
            $table->foreignId('language_id')->constrained()->cascadeOnDelete(); //رقم اللغة
            $table->foreignId('year_of_model_id')->constrained()->cascadeOnDelete(); //رقم سنة التصنيع
            $table->foreignId('engine_id')->constrained()->cascadeOnDelete(); //رقم المحرك
            $table->foreignId('motion_vactor_id')->constrained()->cascadeOnDelete(); //رقم ناقل الحركة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
