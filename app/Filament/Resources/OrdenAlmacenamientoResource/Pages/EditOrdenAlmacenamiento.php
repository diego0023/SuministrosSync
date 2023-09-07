<?php

namespace App\Filament\Resources\OrdenAlmacenamientoResource\Pages;

use App\Filament\Resources\OrdenAlmacenamientoResource;
use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Models\HistorialOrdenAlmacenamiento;
use App\Models\InventarioBodega;

class EditOrdenAlmacenamiento extends EditRecord
{
    protected static string $resource = OrdenAlmacenamientoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
{
    $bodega = InventarioBodega::find($record->id_materia_prima);

    $cantidad = $bodega->cantidad+$record->cantidad;

    $bodega->update(['cantidad'=>$cantidad,]);

    $message= "APROBADO";

   HistorialOrdenAlmacenamiento::create([
        'id_orden_almacenamientos'=> $record->id,
        'descripcion' => $message,
    ]);

    $record->update($data);

    return $record;
}



}
