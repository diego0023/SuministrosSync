<?php

namespace App\Filament\Resources\ProductosResource\Pages;

use App\Filament\Resources\ProductosResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductos extends EditRecord
{
    protected static string $resource = ProductosResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
