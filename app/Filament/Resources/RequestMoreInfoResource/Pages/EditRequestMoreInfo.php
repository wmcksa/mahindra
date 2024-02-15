<?php

namespace App\Filament\Resources\RequestMoreInfoResource\Pages;

use App\Filament\Resources\RequestMoreInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestMoreInfo extends EditRecord
{
    protected static string $resource = RequestMoreInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
