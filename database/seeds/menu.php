<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(
            [
                'menu' => "Eventos",
                'estado' => true,
            ]
        );
        DB::table('submenu')->insert(
            [
                'submenu' => "Evento",
                'estado' => true,
                'idmenu' => 1
            ]
        );
        DB::table('submenu')->insert(
            [
                'submenu' => "Lugares",
                'estado' => true,
                'idmenu' => 1
            ]
        );
        DB::table('submenu')->insert(
            [
                'submenu' => "Tours",
                'estado' => true,
                'idmenu' => 1
            ]
        );
        DB::table('submenu_perfil')->insert(
            [
                'idsubmenu' => 1,
                'idperfil' => 1,
                'estado' => true
            ]
        );
        DB::table('submenu_perfil')->insert(
            [
                'idsubmenu' => 2,
                'idperfil' => 1,
                'estado' => true
            ]
        );
        DB::table('submenu_perfil')->insert(
            [
                'idsubmenu' => 3,
                'idperfil' => 1,
                'estado' => true
            ]
        );
    }
}
