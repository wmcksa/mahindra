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
        Schema::create('website_content', function (Blueprint $table) {
            $table->id();

            $table->longText('home_section')->require();
            $table->longText('about_section_content')->unique();
            $table->longText('about_section_points');
            $table->string('link');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_content');
    }
};
