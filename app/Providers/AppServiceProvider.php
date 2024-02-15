<?php


namespace App\Providers;

use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $websiteSetting = Setting::where('language_id', 1)->first(); //عرض للغة العربية
        View::share('appSetting', $websiteSetting);

        $websiteSetting_en = Setting::where('language_id', 2)->first(); //عرض للغة الانجليزية
        View::share('appSetting_en', $websiteSetting_en);
    }
}
