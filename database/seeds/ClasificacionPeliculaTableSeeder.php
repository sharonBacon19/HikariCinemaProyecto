<?php

use Illuminate\Database\Seeder;

class ClasificacionPeliculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clasificacion=new \App\ClasificacionPelicula();
        $clasificacion->clasificacion="Apta para todo público";
        $clasificacion->save();

        $clasificacion=new \App\ClasificacionPelicula();
        $clasificacion->clasificacion="Con supervición";
        $clasificacion->save();

        $clasificacion=new \App\ClasificacionPelicula();
        $clasificacion->clasificacion="Mayor de 18";
        $clasificacion->save();

        $clasificacion=new \App\ClasificacionPelicula();
        $clasificacion->clasificacion="Infantil";
        $clasificacion->save();
    }
}
