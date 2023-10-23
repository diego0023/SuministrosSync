<?php

namespace App\Filament\Resources\InventarioMayoristaResource\Pages;

use App\Filament\Resources\InventarioMayoristaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInventarioMayoristas extends ManageRecords
{
    protected static string $resource = InventarioMayoristaResource::class;

    protected function getActions(): array
    {
        return [
           // Actions\CreateAction::make(),
        ];
    }
}
