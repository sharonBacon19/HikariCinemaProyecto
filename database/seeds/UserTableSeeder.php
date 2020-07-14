<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario=new \App\User();
        $usuario->rol_id=1;
        $usuario->nombre="Ana Calvo";
        $usuario->cedula="207840390";
        $usuario->edad=22;
        $usuario->tarjeta="";
        $usuario->email="aacalvo@gmail.com";
        $usuario->password="Ana378902";
        $usuario->save();

        $usuario=new \App\User();
        $usuario->rol_id=1;
        $usuario->nombre="Pablo Corarales";
        $usuario->cedula="201200456";
        $usuario->edad=26;
        $usuario->tarjeta="4789225335464534";
        $usuario->email="ppCorrales@gmail.com";
        $usuario->password="ppCorrales123";
        $usuario->save();
    }
}
