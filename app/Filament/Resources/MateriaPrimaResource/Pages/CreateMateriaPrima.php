<?php

namespace App\Filament\Resources\MateriaPrimaResource\Pages;

use App\Filament\Resources\MateriaPrimaResource;
use App\Models\CaracteristicaMateria;
use App\Models\CaracteristicaMateriaPrima;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateMateriaPrima extends CreateRecord
{
    protected static string $resource = MateriaPrimaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $record = $this->getModel()::create($data);

        foreach ($data['caracteristicas'] as $caracteristica) {

             $attach = CaracteristicaMateriaPrima::create([
                'descripcion' => $caracteristica['descripcion_materia_prima'],
                'valor_max'   => $caracteristica['valor_max'],
                'valor_min'   => $caracteristica['valor_min'],
            ]);

            CaracteristicaMateria::create([
                'id_caracteristica' => $attach->id,
                'id_materiaprima'   => $record->id,
            ]);
        }

        return $record;
    }


}
