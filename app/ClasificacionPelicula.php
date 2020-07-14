<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasificacionPelicula extends Model
{
   //varias peliculas
   public function pelicula()
   {
       return $this->hasMany('App\Pelicula');
   }
}
