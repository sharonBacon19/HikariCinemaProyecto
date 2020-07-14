<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //solo tiene un campo
    public function campo()
    {
        return $this->belongsTo('App\Campo');
    }

    //varias reservaciones
    public function reservacion()
    {
        return $this->belongsTo('App\Reservacion');
    }

    //funciones
    public function funcion()
    {
        return $this->belongsToMany('App\Funcion');
    }
}
