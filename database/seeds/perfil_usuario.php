<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class perfil_usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert([
            'perfil' => "Administrador",
            'estado' => true
        ]);
        DB::table('users')->insert([
            'name' => "Fabio Rojas",
            'email' => "ing.fabiorojas90@gmail.com",
            'password' => Hash::make('qaz123456'),
            'idperfil' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Eduardo Baquero",
            'email' => "ingeduardobt123@gmail.com",
            'password' => Hash::make('qaz123456'),
            'idperfil' => 1
        ]);
    }
}
