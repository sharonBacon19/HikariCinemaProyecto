<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //pertene a varios usuarios
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
