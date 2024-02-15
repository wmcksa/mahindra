<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CarSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\EngineSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\YearOfModelSeeder;
use Database\Seeders\MotionVactorSeeder;
use Database\Seeders\DealerLocatorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            LanguageSeeder::class,
            EngineSeeder::class,
            YearOfModelSeeder::class,
            MotionVactorSeeder::class,
            ModelCarSeeder::class,
            DealerLocatorSeeder::class,
            SettingSeeder::class,
            // CarSeeder::class,
            // CategorySeeder::class,
        ]);
    }
}
