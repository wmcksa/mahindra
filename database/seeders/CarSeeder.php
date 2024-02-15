<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create(
            [
                'name' => 'ماهيندرا بيك أب',
                'image' => 'CarHomeImage/01HJZGF4GBGPWE9MWWK5PG53B5.jpg',
                'dealer_locator_id' => 2,
                'model_car_id' => 2,
                'language_id' => 1,
                'year_of_model_id' => 1,
                'motion_vactor_id' => 2,
                'engine_id' => 4
            ]
        );

        Car::create(
            [
                'name' => 'MAHINDRA PIK UP',
                'image' => 'CarHomeImage/01HJZGGNTXSC46ZWBSP3QY62KJ.jpg',
                'dealer_locator_id' => 1,
                'model_car_id' => 1,
                'language_id' => 2,
                'year_of_model_id' => 2,
                'motion_vactor_id' => 4,
                'engine_id' => 1
            ]
        );
    }
}
