<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administradores extends Model
{
    protected $primaryKey = 'id_ad';
    protected $fillable=['id_ad','nombre','ap_p','ap_m','edad','sexo','telefono','correo','contrasena'];
}
