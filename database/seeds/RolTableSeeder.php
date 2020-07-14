<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //modelo al que voy a hacer referencia
        //como objeto
        $rol=new \App\Rol();
        $rol->tipoRol='Administrador';
        $rol->save();

        $rol=new \App\Rol();
        $rol->tipoRol='Cliente';
        $rol->save();
    }
}
