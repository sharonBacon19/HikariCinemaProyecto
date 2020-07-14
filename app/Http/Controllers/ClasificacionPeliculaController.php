<?php

namespace App\Http\Controllers;

use App\ClasificacionPelicula;
use Illuminate\Http\Request;

class ClasificacionPeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            #lista de vídeojuegos ordenada por nombre de manera decendente
            $pelicula=ClasificacionPelicula::
            orderBy('clasificacion', 'asc')->get();

        //siempre dar respuesta
        $response=$pelicula;
        return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClasificacionPelicula  $clasificacionPelicula
     * @return \Illuminate\Http\Response
     */
    public function show(ClasificacionPelicula $clasificacionPelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClasificacionPelicula  $clasificacionPelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(ClasificacionPelicula $clasificacionPelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClasificacionPelicula  $clasificacionPelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClasificacionPelicula $clasificacionPelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClasificacionPelicula  $clasificacionPelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClasificacionPelicula $clasificacionPelicula)
    {
        //
    }
}
