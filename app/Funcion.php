<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    //una sucursal
    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal');
    }

    //una pelicula
    public function pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }

    //ticket
    public function ticket()
    {
        return $this->belongsToMany('App\Ticket', 'funcion_ticket', 'funcion_id', 'ticket_id');
    }
}
