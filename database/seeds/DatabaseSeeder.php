<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
                clasificacion::class,
                perfil_usuario::class,
                menu::class,
                eventos::class
            ]);
    }
}
