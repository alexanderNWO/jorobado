<?php

use Illuminate\Database\Seeder;
use App\administrador;

class administradores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         administrador::create(array(
             'email'     => 'victeku92@gmail.com',
             'password' => 'victeculovic69' // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
         ));
     }
}
