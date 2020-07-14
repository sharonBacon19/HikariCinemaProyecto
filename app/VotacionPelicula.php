<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VotacionPelicula extends Model
{
    //pelicula
    public function pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }
}
