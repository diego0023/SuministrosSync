<?php

namespace App\Filament\Resources\HistorialRequisicionResource\Pages;

use App\Filament\Resources\HistorialRequisicionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistorialRequisicions extends ListRecords
{
    protected static string $resource = HistorialRequisicionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
