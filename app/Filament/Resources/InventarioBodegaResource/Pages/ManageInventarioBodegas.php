<?php

namespace App\Filament\Resources\InventarioBodegaResource\Pages;

use App\Filament\Resources\InventarioBodegaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInventarioBodegas extends ManageRecords
{
    protected static string $resource = InventarioBodegaResource::class;

    protected function getActions(): array
    {
        return [
           // Actions\CreateAction::make(),
        ];
    }
}
