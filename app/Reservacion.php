<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //tiene un ticket
    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }

    //un usuario
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //detalle
    public function detalle()
    {
        return $this->hasMany('App\DetalleProducto');
    }
}
