<?php

namespace App\Filament\Resources\OrdenAlmacenamientoResource\Pages;

use App\Filament\Resources\OrdenAlmacenamientoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrdenAlmacenamientos extends ListRecords
{
    protected static string $resource = OrdenAlmacenamientoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
