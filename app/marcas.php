<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    protected $primaryKey = 'id_mar';
    protected $fillable=['id_mar','nombre'];
}
