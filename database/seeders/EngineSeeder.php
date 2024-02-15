<?php

namespace Database\Seeders;

use App\Models\Engine;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Engine::create(
            [
                'language_id' => 1,
                'type' => 'ديزل S6'

            ]
        );

        Engine::create(
            [
                'language_id' => 1,
                'type' => 'ديزل s11'

            ]
        );

        Engine::create(
            [
                'language_id' => 2,
                'type' => 's6 diesel'

            ]
        );
        Engine::create(
            [
                'language_id' => 2,
                'type' => 's11 diesel'

            ]
        );
    }
}
