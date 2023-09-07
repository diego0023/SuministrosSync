<?php

namespace App\Filament\Resources\HistorialOrdenAlmacenamientoResource\Pages;

use App\Filament\Resources\HistorialOrdenAlmacenamientoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistorialOrdenAlmacenamiento extends EditRecord
{
    protected static string $resource = HistorialOrdenAlmacenamientoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
