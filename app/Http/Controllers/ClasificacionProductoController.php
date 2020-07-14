<?php

namespace App\Http\Controllers;

use App\ClasificacionProducto;
use Illuminate\Http\Request;

class ClasificacionProductoController extends Controller
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
            $pelicula=ClasificacionProducto::
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
     * @param  \App\ClasificacionProducto  $clasificacionProducto
     * @return \Illuminate\Http\Response
     */
    public function show(ClasificacionProducto $clasificacionProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClasificacionProducto  $clasificacionProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(ClasificacionProducto $clasificacionProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClasificacionProducto  $clasificacionProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClasificacionProducto $clasificacionProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClasificacionProducto  $clasificacionProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClasificacionProducto $clasificacionProducto)
    {
        //
    }
}
