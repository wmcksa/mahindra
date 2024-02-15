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
        //سنين التصنيع
        Schema::create('year_of_models', function (Blueprint $table) {
            $table->id();
            $table->date('year_of_model'); //سنة التصنيع
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('year_of_models');
    }
};
