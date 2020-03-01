<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubmenuPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenu_perfil',function(Blueprint $table){
            $table->increments('id');
            $table->integer('idsubmenu')->unsigned();
            $table->foreign('idsubmenu')->references('id')->on('submenu');
            $table->integer('idperfil')->unsigned();
            $table->foreign('idperfil')->references('id')->on('perfil');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
