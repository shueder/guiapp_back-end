<?php

use Illuminate\Database\Seeder;

class places extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert(
            [
                'enterprise_name' => "GuiApp",
                'address' => "Carrera 17 # 15-20",
                'description' => "Empresa que ofrece entre sus servicios el desarrollo de paginas web y software para todo tipo de empresa a la medida",
                'images' => ""
            ]
        );
        DB::table('places')->insert(
            [
                'enterprise_name' => "GuiApp",
                'address' => "Carrera 19 # 15-20",
                'description' => "Empresa que ofrece entre sus servicios el desarrollo de paginas web y software para todo tipo de empresa a la medida",
                'images' => ""
            ]
        );
    }
}
