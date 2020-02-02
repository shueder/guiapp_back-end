<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clasificacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clasificacion')->insert(
            [
                'clasificacion' => "Automotriz",
                'estado' => true,
            ],
        );
        DB::table('clasificacion')->insert(
            [
                'clasificacion' => "Bares",
                'estado' => true,
            ],
        );
        DB::table('clasificacion')->insert(
            [
                'clasificacion' => "Ferreterias",
                'estado' => true,
            ],
        );
        DB::table('clasificacion')->insert(
            [
                'clasificacion' => "Restaurantes",
                'estado' => true,
            ],
        );
        DB::table('clasificacion')->insert(
            [
                'clasificacion' => "Modas",
                'estado' => true,
            ],
        );
        DB::table('clasificacion')->insert(
            [
                'clasificacion' => "Droguerias",
                'estado' => true,
            ],
        );
    }
}