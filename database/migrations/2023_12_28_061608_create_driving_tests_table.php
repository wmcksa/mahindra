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
        //جدول اختبار القيادة

        Schema::create('driving_tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->require();
            $table->string('email')->require();
            $table->string('phone')->require();
            $table->date('date')->require();
            $table->longText('message')->require();


            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_tests');
    }
};
