<?php

namespace App\Filament\Resources\MiantenanecTimeeResource\Pages;

use App\Filament\Resources\MiantenanecTimeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMiantenanecTimee extends EditRecord
{
    protected static string $resource = MiantenanecTimeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
