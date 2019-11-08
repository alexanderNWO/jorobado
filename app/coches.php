<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coches extends Model
{
    protected $primaryKey = 'id_co';
    protected $fillable=['id_co','modelo','ano','color','serie','tipo','placas','capacidad','precio_renta','id_cat','id_suc','id_mar'];
}
