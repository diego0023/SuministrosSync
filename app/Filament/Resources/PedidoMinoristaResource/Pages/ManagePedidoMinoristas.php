<?php

namespace App\Filament\Resources\PedidoMinoristaResource\Pages;

use App\Filament\Resources\PedidoMinoristaResource;
use App\Models\PedidoMinorista;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;

class ManagePedidoMinoristas extends ManageRecords
{
    protected static string $resource = PedidoMinoristaResource::class;

    protected function getActions(): array
    {
        return [
           // Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return PedidoMinorista::where('procesado', false);
    }

}
