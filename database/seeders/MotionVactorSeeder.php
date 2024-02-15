<?php

namespace Database\Seeders;

use App\Models\MotionVactor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MotionVactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MotionVactor::create(
            [
                'language_id' => 1,
                'name' => 'يدوي  '
            ]
        );
        MotionVactor::create(
            [
                'language_id' => 1,
                'name' => 'أوتوماتيك  '
            ]
        );
        MotionVactor::create(
            [
                'language_id' => 2,
                'name' => 'manual  '
            ]
        );
        MotionVactor::create(
            [
                'language_id' => 2,
                'name' => 'Automatic  '
            ]
        );
    }
}
