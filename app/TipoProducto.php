<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    //pertene a varios productos
    public function producto()
    {
        return $this->hasMany('App\Producto');
    }
}
