<?php

namespace App\Filament\Resources\DrivingTestResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords\Tab;
use App\Filament\Resources\DrivingTestResource;

class ListDrivingTests extends ListRecords
{
    protected static string $resource = DrivingTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {

        return [
            'All' => Tab::make(),
            'This Day' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now()->subDay())),

            'This Week' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now()->subWeek())),

            'This Month' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now()->subMonth()))
        ];
    }
}
