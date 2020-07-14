<?php

use Illuminate\Database\Seeder;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        $genero=new \App\Genero();
        $genero->tipogenero="Acción";
        $genero->save();

        #2
        $genero=new \App\Genero();
        $genero->tipogenero="Bélica";
        $genero->save();

        #3
        $genero=new \App\Genero();
        $genero->tipogenero="Aventura";
        $genero->save();

        #4
        $genero=new \App\Genero();
        $genero->tipogenero="Ciencia ficción";
        $genero->save();

        #5
        $genero=new \App\Genero();
        $genero->tipogenero="Comedia";
        $genero->save();

        #6
        $genero=new \App\Genero();
        $genero->tipogenero="Policial";
        $genero->save();

        #7
        $genero=new \App\Genero();
        $genero->tipogenero="Terror";
        $genero->save();

        #8
        $genero=new \App\Genero();
        $genero->tipogenero="Romántica";
        $genero->save();

        #9
        $genero=new \App\Genero();
        $genero->tipogenero="Fántasia";
        $genero->save();

        #10
        $genero=new \App\Genero();
        $genero->tipogenero="Historia";
        $genero->save();

        #11
        $genero=new \App\Genero();
        $genero->tipogenero="Suspenso";
        $genero->save();

        #12
        $genero=new \App\Genero();
        $genero->tipogenero="Drama";
        $genero->save();

        #13
        $genero=new \App\Genero();
        $genero->tipogenero="Documental";
        $genero->save();

        #14
        $genero=new \App\Genero();
        $genero->tipogenero="Animación";
        $genero->save();

        #15
        $genero=new \App\Genero();
        $genero->tipogenero="Musical";
        $genero->save();
    }
}
