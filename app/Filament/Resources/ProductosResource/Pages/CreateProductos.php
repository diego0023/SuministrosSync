<?php

namespace App\Filament\Resources\ProductosResource\Pages;

use App\Filament\Resources\ProductosResource;
use App\Models\InventarioMayorista;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProductos extends CreateRecord
{
    protected static string $resource = ProductosResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $record =  $this->getModel()::create($data);
        InventarioMayorista::create([
            'id_producto' => $record->id,
            'cantidad'    => 0,
        ]);
        return $record;
    }


}
