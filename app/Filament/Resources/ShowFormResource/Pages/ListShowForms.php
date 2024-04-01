<?php

namespace App\Filament\Resources\ShowFormResource\Pages;

use App\Filament\Resources\ShowFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowForms extends ListRecords
{
    protected static string $resource = ShowFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
