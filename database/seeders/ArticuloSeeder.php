<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++){
            Categoria::create([
                'nombre' => 'nombre' . Str::random(5),
                'descripcion' => 'descripcion' . Str::random(5),
                'codigo_barras' => 'descripcion' . Str::random(100),
                'precio_compra' => 'descripcion' . Str::random(100),
                'precio_venta' => 'descripcion' . Str::random(),
                'stock' => 'descripcion' . int::random(8),
                'activo' => rand(0, 1) == 1? true : false,
            ]);
        }
    }
}
