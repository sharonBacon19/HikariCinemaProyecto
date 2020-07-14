<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VotacionProducto extends Model
{
    //producto
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
