<?php

namespace App\Filament\Resources\HistorialRequisicionResource\Pages;

use App\Filament\Resources\HistorialRequisicionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistorialRequisicion extends EditRecord
{
    protected static string $resource = HistorialRequisicionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
