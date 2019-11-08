<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $primaryKey = 'id_cat';
    protected $fillable=['id_cat','nombre'];
}
