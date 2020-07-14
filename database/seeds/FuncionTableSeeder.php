<?php

use Illuminate\Database\Seeder;

class FuncionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funcion=new \App\Funcion();
        $funcion->horafuncion="1:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=1;
        $funcion->sucursal_id=1;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([1, 2, 3]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="3:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=2;
        $funcion->sucursal_id=1;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([4, 5, 6]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="5:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=3;
        $funcion->sucursal_id=1;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([7, 8, 9]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="1:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=4;
        $funcion->sucursal_id=2;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([10, 11, 12]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="3:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=5;
        $funcion->sucursal_id=2;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([13, 14]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="5:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=6;
        $funcion->sucursal_id=2;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([1, 2, 3]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="1:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=7;
        $funcion->sucursal_id=3;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([4, 5, 6]);

        $funcion=new \App\Funcion();
        $funcion->horafuncion="3:00pm";
        $funcion->fechafuncion="20/07/2020";
        $funcion->pelicula_id=8;
        $funcion->sucursal_id=3;
        $funcion->save();
        #ticket
        $funcion->ticket()->attach([7, 8, 9]);
    }
}
