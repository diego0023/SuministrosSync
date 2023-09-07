<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RolesAndPermissionsSeeder::class]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\TipoMateriaPrima::create([
            'nombre' => 'embalaje',
        ]);


        \App\Models\TipoMateriaPrima::create([
            'nombre' => 'perecedero',
        ]);

        \App\Models\Proveedor::create([
            'nombre'    => 'proveedor1',
            'nit'       => '123456789',
            'telefono'  => '87654321',
            'direccion' =>  'calle 6 zona 9',
        ]);

        \App\Models\Proveedor::create([
            'nombre'    => 'proveedor2',
            'nit'       => '123456789',
            'telefono'  => '87654321',
            'direccion' =>  'calle 6 zona 9',
        ]);


    }
}
