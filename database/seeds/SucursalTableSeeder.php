<?php

use Illuminate\Database\Seeder;

class SucursalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        $sucursal=new \App\Sucursal();
        $sucursal->nombre="HikariCinema Alajuela";
        $sucursal->ubicacion="Al frente del Hospital de Alajuela";
        $sucursal->save();

        #2
        $sucursal=new \App\Sucursal();
        $sucursal->nombre="HikariCinema San José";
        $sucursal->ubicacion="A un costado de Parque de la Merced";
        $sucursal->save();

        #3
        $sucursal=new \App\Sucursal();
        $sucursal->nombre="HikariCinema Cartago";
        $sucursal->ubicacion="A un costado de las Ruinas de Cartago";
        $sucursal->save();
    }
}
