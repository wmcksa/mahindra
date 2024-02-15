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

        //جدول طلب العرض
        Schema::create('request_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->require();
            $table->string('email')->require();
            $table->string('phone')->require();
            $table->integer('offer_price')->require(); //سعر العرض
            $table->longText('message')->require();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_offers');
    }
};
