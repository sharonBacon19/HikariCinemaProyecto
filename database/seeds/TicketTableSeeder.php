<?php

use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        $ticket=new \App\Ticket();
        $ticket->nombre="Carro";
        $ticket->precio=2000;
        $ticket->campo_id=1;
        $ticket->save();

        #2
        $ticket=new \App\Ticket();
        $ticket->nombre="Carro";
        $ticket->precio=2000;
        $ticket->campo_id=2;
        $ticket->save();

        #3
        $ticket=new \App\Ticket();
        $ticket->nombre="Carro";
        $ticket->precio=2000;
        $ticket->campo_id=3;
        $ticket->save();

        #4
        $ticket=new \App\Ticket();
        $ticket->nombre="Carro";
        $ticket->precio=2000;
        $ticket->campo_id=4;
        $ticket->save();

        #5
        $ticket=new \App\Ticket();
        $ticket->nombre="Pie";
        $ticket->precio=1500;
        $ticket->campo_id=5;
        $ticket->save();

        #6
        $ticket=new \App\Ticket();
        $ticket->nombre="Pie";
        $ticket->precio=1500;
        $ticket->campo_id=6;
        $ticket->save();

        #7
        $ticket=new \App\Ticket();
        $ticket->nombre="Pie";
        $ticket->precio=1500;
        $ticket->campo_id=7;
        $ticket->save();

        #8
        $ticket=new \App\Ticket();
        $ticket->nombre="Pie";
        $ticket->precio=1500;
        $ticket->campo_id=8;
        $ticket->save();

        #9
        $ticket=new \App\Ticket();
        $ticket->nombre="Pie";
        $ticket->precio=1500;
        $ticket->campo_id=9;
        $ticket->save();

        #10
        $ticket=new \App\Ticket();
        $ticket->nombre="Moto";
        $ticket->precio=1500;
        $ticket->campo_id=10;
        $ticket->save();

        #11
        $ticket=new \App\Ticket();
        $ticket->nombre="Moto";
        $ticket->precio=1500;
        $ticket->campo_id=11;
        $ticket->save();

        #12
        $ticket=new \App\Ticket();
        $ticket->nombre="Moto";
        $ticket->precio=1500;
        $ticket->campo_id=12;
        $ticket->save();

        #13
        $ticket=new \App\Ticket();
        $ticket->nombre="Moto";
        $ticket->precio=1500;
        $ticket->campo_id=13;
        $ticket->save();

        #14
        $ticket=new \App\Ticket();
        $ticket->nombre="Moto";
        $ticket->precio=1500;
        $ticket->campo_id=14;
        $ticket->save();
    }
}
