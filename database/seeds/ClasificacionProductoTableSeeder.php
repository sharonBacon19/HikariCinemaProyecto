<?php

use Illuminate\Database\Seeder;

class ClasificacionProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         #1
         $clasificacion=new \App\ClasificacionProducto();
         $clasificacion->clasificacion="Grande";
         $clasificacion->save();

         #2
         $clasificacion=new \App\ClasificacionProducto();
         $clasificacion->clasificacion="Mediano";
         $clasificacion->save();

         #3
         $clasificacion=new \App\ClasificacionProducto();
         $clasificacion->clasificacion="Pequeño";
         $clasificacion->save();
    }
}
