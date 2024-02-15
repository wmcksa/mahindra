<?php

namespace App\Filament\Resources\YearOfModelResource\Pages;

use App\Filament\Resources\YearOfModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYearOfModels extends ListRecords
{
    protected static string $resource = YearOfModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
