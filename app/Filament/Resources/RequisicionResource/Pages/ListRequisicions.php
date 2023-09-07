<?php

namespace App\Filament\Resources\RequisicionResource\Pages;

use App\Filament\Resources\RequisicionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequisicions extends ListRecords
{
    protected static string $resource = RequisicionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
