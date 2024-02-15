<?php

namespace Database\Seeders;

use App\Models\YearOfModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class YearOfModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        YearOfModel::create(
            [
                'year_of_model' => '2019-12-28 08:47:36',

            ]
        );
        YearOfModel::create(
            [
                'year_of_model' => '2020-12-28 08:47:36',

            ]
        );
        YearOfModel::create(
            [
                'year_of_model' => '2021-12-28 08:47:36',

            ]
        );
        YearOfModel::create(
            [
                'year_of_model' => '2022-12-28 08:47:36',

            ]
        );
    }
}
