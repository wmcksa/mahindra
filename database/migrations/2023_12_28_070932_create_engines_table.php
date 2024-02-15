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

        //جدول المحركات
        Schema::create('engines', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('language_id')->constrained()->cascadeOnDelete(); //رقم اللغة
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engines');
    }
};
