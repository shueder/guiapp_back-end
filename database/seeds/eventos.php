<?php

use Illuminate\Database\Seeder;

class eventos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert(
            [
                'evento' => "Festival de la Hamburguesa",
                'ubicación' => "Carrera 17 # 15-20",
                'fecha' => "2021/03/24 16:00",
                'descripcion' => "Festival en el que se muestrá toda la destreza culinaria de los cocineros"
            ]
        );
        DB::table('eventos')->insert(
            [
                'evento' => "Feria del libro",
                'ubicación' => "Carrera 19 # 7-20",
                'fecha' => "2021/03/24 16:00",
                'descripcion' => "Feria en la que se expone una gran variedad de los mejores libros"
            ]
        );
    }
}
