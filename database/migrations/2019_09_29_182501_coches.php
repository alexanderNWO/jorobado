<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->increments('id_co');
            $table->string('modelo',30);
            $table->integer('ano');
            $table->string('color',20);
            $table->string('serie',25);
            $table->string('tipo',20);
            $table->string('placas',20);
            $table->integer('capacidad');
            $table->integer('precio_renta');
            $table->integer('id_cat')->unsigned();
            $table->foreign('id_cat')->references('id_cat')->on('categorias');
            $table->integer('id_suc')->unsigned();
            $table->foreign('id_suc')->references('id_suc')->on('sucursales');
            $table->integer('id_mar')->unsigned();
            $table->foreign('id_mar')->references('id_mar')->on('marcas');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coches');
    }
}
