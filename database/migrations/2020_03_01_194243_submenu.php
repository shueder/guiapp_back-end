<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Submenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenu',function(Blueprint $table){
            $table->increments('id');
            $table->string('submenu',70);
            $table->string('url',30);
            $table->integer('idmenu')->unsigned();
            $table->foreign('idmenu')->references('id')->on('menu');
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
