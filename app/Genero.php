<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //peliculas
    public function pelicula()
    {
        return $this->belongsToMany('App\Pelicula');
    }
}
