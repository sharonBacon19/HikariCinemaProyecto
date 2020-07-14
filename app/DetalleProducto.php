<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    //un producto
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }

    //varias reservacion
    public function reservacion()
    {
        return $this->belongsTo('App\Reservacion');
    }
}
