<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('direcciones')->insert([
            ['calle' => 'Calle 1', 'numero' => '1', 'Localidad' => 'Localidad 1', 'Provincia' => 'Provincia 1', 'Codigo Postal' => '11111'],
            ['calle' => 'Calle 2', 'numero' => '2', 'Localidad' => 'Localidad 2', 'Provincia' => 'Provincia 2', 'Codigo Postal' => '22222'],
            ['calle' => 'Calle 3', 'numero' => '3', 'Localidad' => 'Localidad 3', 'Provincia' => 'Provincia 3', 'Codigo Postal' => '33333'],
        ]);
    }
}
