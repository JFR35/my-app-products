<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Perez', 'user_id' => 1],
            ['nombre' => 'Pedro', 'apellido' => 'Gomez', 'user_id' => 2],
            ['nombre' => 'Maria', 'apellido' => 'Lopez', 'user_id' => 3],
        ]);
    }
}
