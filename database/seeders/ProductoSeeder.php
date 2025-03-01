<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
            'nombre' => 'Café de Colombia',
            'descripcion' => 'Delicioso café de Colombia',
            'precio' => 10.00,
            'stock' => 10,
            'imagen' => 'img/cafe/cafecolombia.webp',
            'categoria_id' => 1,
            ],
            [
            'nombre' => 'Café de Etiopía',
            'descripcion' => 'Delicioso café de Etiopía',
            'precio' => 12.00,
            'stock' => 10,
            'imagen' => 'img/cafe/cafecolombia.webp',
            'categoria_id' => 1,
            ],
            [    
            'nombre' => 'Café de Jamaica',
            'descripcion' => 'Delicioso café de Jamaica',
            'precio' => 15.00,
            'stock' => 10,
            'imagen' => 'img/cafe/cafecolombia.webp',
            'categoria_id' => 1,
            ],
            [ 
            'nombre' => 'Café de Kenia',
            'descripcion' => 'Delicioso café de Kenia',
            'precio' => 13.00,
            'stock' => 10,
            'imagen' => 'img/cafe/cafecolombia.webp',
            'categoria_id' => 1,
            ],
            [
            'nombre' => 'Café de Brasil',
            'descripcion' => 'Delicioso café de Brasil',
            'precio' => 11.00,
            'stock' => 10,
            'imagen' => 'img/cafe/cafecolombia.webp',
            'categoria_id' => 1,
            ],
            [
            'nombre' => 'Café de Costa Rica',
            'descripcion' => 'Delicioso café de Costa Rica',
            'precio' => 14.00,
            'stock' => 10,      
            'imagen' => 'img/cafe/cafecolombia.webp',
            'categoria_id' => 1,
            ],
        ]);
    }
}
