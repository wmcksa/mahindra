<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use App\Models\Category;
use App\Models\Slider;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cars', Car::count()),
            Stat::make('Categories', Category::count()),
            Stat::make('Sliders', Slider::count()),
        ];
    }


    
}



