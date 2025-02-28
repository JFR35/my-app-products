<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Juan', 'email' => 'juan@gamail.com', 'password' => 'usarhash', 'role_id' => 1],
            ['name' => 'Pedro', 'email' => 'pedro@gmail.com', 'password' => 'usarhash', 'role_id' => 2],
            ['name' => 'Maria', 'email' => 'maria.gmail.com', 'password' => '', 'role_id' => 3],
        ]);
    }
}
