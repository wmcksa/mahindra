<?php

namespace App\Filament\Resources\YearOfModelResource\Pages;

use App\Filament\Resources\YearOfModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYearOfModel extends EditRecord
{
    protected static string $resource = YearOfModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
