<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarritoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carrito_productos')->insert([
            'carrito_id' => 1,
            'cantidad' => 1,
            'precio' => 10.00,
            'fecha_adicion' => now(),
        ]);
    }
}
