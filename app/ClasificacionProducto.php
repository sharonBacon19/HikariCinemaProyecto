<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasificacionProducto extends Model
{
    //producto
    public function producto()
    {
        return $this->belongsToMany('App\Producto');
    }
}
