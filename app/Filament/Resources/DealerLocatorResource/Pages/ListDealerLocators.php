<?php

namespace App\Filament\Resources\DealerLocatorResource\Pages;

use App\Filament\Resources\DealerLocatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDealerLocators extends ListRecords
{
    protected static string $resource = DealerLocatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
