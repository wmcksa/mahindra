<?php

namespace App\Filament\Resources\DealerLocatorResource\Pages;

use App\Filament\Resources\DealerLocatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDealerLocator extends EditRecord
{
    protected static string $resource = DealerLocatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
