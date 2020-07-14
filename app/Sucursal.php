<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //varias funcinoes
    public function funcion()
    {
        return $this->hasMany('App\Funcion');
    }
}
