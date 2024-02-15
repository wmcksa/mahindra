<?php

namespace App\Filament\Resources\MotionVactorResource\Pages;

use App\Filament\Resources\MotionVactorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMotionVactors extends ListRecords
{
    protected static string $resource = MotionVactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
