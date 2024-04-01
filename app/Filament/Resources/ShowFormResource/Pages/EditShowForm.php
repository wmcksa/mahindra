<?php

namespace App\Filament\Resources\ShowFormResource\Pages;

use App\Filament\Resources\ShowFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShowForm extends EditRecord
{
    protected static string $resource = ShowFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
