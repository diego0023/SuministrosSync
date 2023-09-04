<?php

namespace App\Filament\Resources\MateriaPrimaResource\Pages;

use App\Filament\Resources\MateriaPrimaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMateriaPrimas extends ListRecords
{
    protected static string $resource = MateriaPrimaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
