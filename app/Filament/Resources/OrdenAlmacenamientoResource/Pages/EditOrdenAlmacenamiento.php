<?php

namespace App\Filament\Resources\OrdenAlmacenamientoResource\Pages;

use App\Filament\Resources\OrdenAlmacenamientoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrdenAlmacenamiento extends EditRecord
{
    protected static string $resource = OrdenAlmacenamientoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
