<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orden_fabricacions')->insertOrIgnore([
            [
                'fecha' => '2023-10-25 10:30:00',
                'descripcion' => 'Este es un ejemplo de descripción.'
            ],
            [
                'fecha' => '2023-10-26 15:45:00', // Ejemplo de fecha y hora
                'descripcion' => 'Otro ejemplo de descripción.'
            ]

        ]);
    }
}
