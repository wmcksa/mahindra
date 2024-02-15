<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                'language_id' => 1,
                'car_id' => 1,
                'name' => 'غمارة دفع ثنائي'
            ]
        );
        Category::create(
            [
                'language_id' => 1,
                'car_id' => 1,
                'name' => 'غمارة دفع رباعي'
            ]
        );

        Category::create(
            [
                'language_id' => 1,
                'car_id' => '1',
                'name' => 'غمارتين دفع ثنائي'
            ]
        );
        Category::create(
            [
                'language_id' => 2,
                'car_id' => 2,
                'name' => 'Four wheel drive cabin'
            ]
        );
        Category::create(
            [
                'language_id' => 2,
                'car_id' => 2,
                'name' => 'Two wheel drive cabin'
            ]
        );
    }
}
