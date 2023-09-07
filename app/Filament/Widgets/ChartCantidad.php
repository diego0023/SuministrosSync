<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\InventarioBodega;

class ChartCantidad extends BarChartWidget
{
    protected function getHeading(): string
    {
        return 'Materia Prima';
    }

    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'Cantidad',
                    'data' => InventarioBodega::all()->pluck('cantidad')->toArray(),
                ],
            ],
            'labels' => InventarioBodega::all()->pluck('id_materia_prima')->toArray(),

        ];
    }
}