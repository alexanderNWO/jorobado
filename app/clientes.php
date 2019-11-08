<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $primaryKey = 'id_cli';
    protected $fillable=['id_cli','nombre','ap_p','ap_m','edad','sexo','telefono','n_licencia','correo','contrasena'];
}
