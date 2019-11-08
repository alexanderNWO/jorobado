<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    protected $primaryKey = 'id_suc';
    protected $fillable=['id_suc','nombre','direccion','telefono','responsable'];
}
