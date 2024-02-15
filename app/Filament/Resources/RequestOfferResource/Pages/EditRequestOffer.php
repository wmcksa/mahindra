<?php

namespace App\Filament\Resources\RequestOfferResource\Pages;

use App\Filament\Resources\RequestOfferResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestOffer extends EditRecord
{
    protected static string $resource = RequestOfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
