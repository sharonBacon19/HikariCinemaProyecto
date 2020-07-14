<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //pertenece a un tipo
    public function tipoProducto()
    {
        return $this->belongsTo('App\TipoProducto', 'tipoproducto_id');
    }

    //votaciones
    public function votacion()
    {
        return $this->hasMany('App\VotacionProducto');
    }

    //clasificacion
    public function clasificacion()
    {
        return $this->belongsToMany('App\ClasificacionProducto', 'producto_clasificacion', 'producto_id', 'clasificacion_id');
    }

    //varios detalles
    public function detalle()
    {
        return $this->hasMany('App\DetalleProducto');
    }
}
