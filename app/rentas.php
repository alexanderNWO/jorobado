<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rentas extends Model
{
    protected $primaryKey = 'id_ren';
    protected $fillable=['id_ren','fecha_inicio','fecha_final','tipo_pago','motivo','lugar_estancia','monto','cobertura','id_co','id_suc','id_cli'];
}
