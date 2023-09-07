<?php

namespace App\Filament\Resources\InventarioPlantaResource\Pages;

use App\Filament\Resources\InventarioPlantaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInventarioPlantas extends ManageRecords
{
    protected static string $resource = InventarioPlantaResource::class;

    protected function getActions(): array
    {
        return [
          //  Actions\CreateAction::make(),
        ];
    }
}
