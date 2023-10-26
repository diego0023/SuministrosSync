<?php

namespace App\Filament\Resources\OrdenFabricacionResource\Pages;

use App\Filament\Resources\OrdenFabricacionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrdenFabricacion extends EditRecord
{
    protected static string $resource = OrdenFabricacionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}