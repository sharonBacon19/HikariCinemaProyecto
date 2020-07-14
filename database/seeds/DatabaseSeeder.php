<?php

use App\Http\Controllers\ReservacionController;
use App\VotacionPelicula;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //sentencia de seeders, el orden afecta
        //tomar en cuenta relaciones
        //orden como migraciones
        $this->call(RolTableSeeder::class);
        $this->call(CampoTableSeeder::class);
        $this->call(GeneroTableSeeder::class);
        $this->call(TipoProductoTableSeeder::class);
        $this->call(ClasificacionPeliculaTableSeeder::class);
        $this->call(ClasificacionProductoTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SucursalTableSeeder::class);
        $this->call(PeliculaTableSeeder::class);
        $this->call(VotacionPeliculaTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(FuncionTableSeeder::class);
        $this->call(DetalleProductoTableSeeder::class);
        $this->call(ReservacionTableSeeder::class);
        $this->call(VotacionProductoTableSeeder::class);
    }
}
