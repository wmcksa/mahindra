<?php

namespace Database\Seeders;

use App\Models\DealerLocator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DealerLocatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DealerLocator::create(
            [
                'country' => 'Kingdom Saudi Arabia', //الدولة
                'city' => 'Al-riyad', //المدينة
                'location' => 'Khobar,king fahd road', //الشارع
                'beginning_working_day' => 'Sunday ', //بداية ايام العمل
                'end_working_day' => 'Thursday', //نهاية ايام العمل
                'beginning_working_hours' => ' 8:00 AM ', //بداية  ساعات العمل
                'end_working_hours' => '5:00 PM', //نهاية  ساعات العمل
                'mobile' => '04-2994969', //رقم الهاتف
                'language_id' => 2
            ]
        );
        DealerLocator::create(
            [
                'country' => 'المملكة العربية السعودية', //الدولة
                'city' => 'جدة', //المدينة
                'location' => 'الخبر، شارع الملك فهد', //الشارع
                'beginning_working_day' => 'الاحد ', //بداية ايام العمل
                'end_working_day' => 'الخميس', //نهاية ايام العمل
                'beginning_working_hours' => ' 8:00 صباحاً ', //بداية  ساعات العمل
                'end_working_hours' => '5:00 مساء', //نهاية  ساعات العمل
                'mobile' => '04-2994969', //رقم الهاتف
                'language_id' => 1
            ]
        );
    }
}
