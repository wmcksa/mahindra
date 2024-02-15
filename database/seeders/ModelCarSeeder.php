<?php

namespace Database\Seeders;

use App\Models\ModelCar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModelCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelCar::create(
            [
                'language_id' => 1,
                'name' => ' بيك اب '
            ]
        );
        ModelCar::create(
            [
                'language_id' => 2,
                'name' => ' PIK UP'
            ]
        );
    }
}
