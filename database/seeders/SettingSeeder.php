<?php

namespace Database\Seeders;

use App\Models\Setting;
use Filament\Forms\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Setting::create([
            'user_id' => 1,
            'site_name' => 'ماهيندرا',
            'site_logo' => 'SiteLogoImages/Mahindra-Logo.png',
            'email' => 'm@gmail.com',
            'phone' => '348348648',
            'language_id' => 1,
            'dealer_locator_id' => 2
        ]);

        Setting::create([
            'user_id' => 1,
            'site_name' => 'Mahindra ',
            'site_logo' => 'SiteLogoImages/Mahindra-Logo_Red.png',
            'email' => 'mm@gmail.com',
            'phone' => '348348648',
            'language_id' => 2,
            'dealer_locator_id' => 1
        ]);
    }
}
