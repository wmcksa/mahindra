<?php

namespace App\Filament\Resources\DrivingTestResource\Pages;

use App\Filament\Resources\DrivingTestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDrivingTest extends EditRecord
{
    protected static string $resource = DrivingTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
