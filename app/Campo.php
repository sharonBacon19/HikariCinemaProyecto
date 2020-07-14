<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    //pertenece a varios ticket
    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }
}
