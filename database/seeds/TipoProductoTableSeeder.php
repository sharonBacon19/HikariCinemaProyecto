<?php

use Illuminate\Database\Seeder;

class TipoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        $tipo= new \App\TipoProducto();
        $tipo->tipo="Bebida";
        $tipo->save();

        #2
        $tipo= new \App\TipoProducto();
        $tipo->tipo="Snacks";
        $tipo->save();

        #3
        $tipo= new \App\TipoProducto();
        $tipo->tipo="Palomitas";
        $tipo->save();

        #4
        $tipo= new \App\TipoProducto();
        $tipo->tipo="Chocolates";
        $tipo->save();

        #5
        $tipo= new \App\TipoProducto();
        $tipo->tipo="Dulces";
        $tipo->save();

        #6
        $tipo= new \App\TipoProducto();
        $tipo->tipo="Comida rápida";
        $tipo->save();
    }
}
