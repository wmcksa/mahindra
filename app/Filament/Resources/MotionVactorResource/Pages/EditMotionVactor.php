<?php

namespace App\Filament\Resources\MotionVactorResource\Pages;

use App\Filament\Resources\MotionVactorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMotionVactor extends EditRecord
{
    protected static string $resource = MotionVactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
