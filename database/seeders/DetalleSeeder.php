<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('detalles')->insertOrIgnore([
            [
                'id_producto' => 1, // Reemplaza con el ID real del producto
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 1, // Reemplaza con el ID real del producto
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 2,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 2,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 3,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 3,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 4,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 4,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 5,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 5,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 6,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 6,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 7,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 7,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 8,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 8,
                'id_orden_fabricacions' => 2, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producto' => 9,
                'id_orden_fabricacions' => 1, // Reemplaza con el ID real de la orden de fabricación
                'cantidad' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]


        ]);
    }
}
