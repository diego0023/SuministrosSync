<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\MateriaPrima;


class BlogPostsChart extends BarChartWidget
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
                    'label' => 'Precio',
                    'data' => MateriaPrima::all()->pluck('precio_unidad')->toArray(),
                ],
            ],
            'labels' => MateriaPrima::all()->pluck('nombre')->toArray(),

        ];
    }
}
