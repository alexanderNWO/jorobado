<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Administradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->increments('id_ad');
            $table->string('nombre',30);
            $table->string('ap_p',30);
            $table->string('ap_m',30);
            $table->integer('edad');
            $table->string('sexo',2);
            $table->string('telefono',15);
            $table->string('correo',100);
            $table->string('contrasena',100);
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
        Schema::drop('administradores');
    }
}
