<?php

namespace App\Filament\Resources\OrdenFabricacionResource\Pages;

use App\Filament\Resources\OrdenFabricacionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrdenFabricacions extends ListRecords
{
    protected static string $resource = OrdenFabricacionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
