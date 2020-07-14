<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //votaciones
    public function votacion()
    {
        return $this->hasMany('App\VotacionPelicula');
    }

    //generos
    public function genero()
    {
        return $this->belongsToMany('App\Genero', 'pelicula_genero', 'pelicula_id', 'genero_id');
    }

    //varias funcion
    public function funcion()
    {
        return $this->hasMany('App\Funcion');
    }

    //una clasificacion
    public function clasificacion()
    {
        return $this->belongsTo('App\ClasificacionPelicula', 'clasificacionpelicula_id');
    }
}
