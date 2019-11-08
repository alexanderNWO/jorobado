<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->increments('id_ren');
            $table->string('fecha_inicio',30);
            $table->string('fecha_final',30);
            $table->string('tipo_pago',30);
            $table->string('motivo',50);
            $table->string('lugar_estancia',50);
            $table->integer('monto');
            $table->string('cobertura',40);
            $table->integer('id_co')->unsigned();
            $table->foreign('id_co')->references('id_co')->on('coches');
            $table->integer('id_suc')->unsigned();
            $table->foreign('id_suc')->references('id_suc')->on('sucursales');
            $table->integer('id_cli')->unsigned();
            $table->foreign('id_cli')->references('id_cli')->on('clientes');
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
        Schema::drop('rentas');
    }
}
