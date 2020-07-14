<?php

namespace App\Http\Controllers;

use App\Funcion;
use Illuminate\Http\Request;

class FuncionController extends Controller
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
            $pelicula=Funcion::
            orderBy('horafuncion', 'asc')->with(['pelicula', 'sucursal'])->get();

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
     * @param  \App\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            #lista de vídeojuegos ordenada por nombre de manera decendente
            $pelicula=Funcion::
            orderBy('horafuncion', 'asc')->
            with(['pelicula', 'sucursal'])->first();

        $response=$pelicula;
        return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcion $funcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcion $funcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcion $funcion)
    {
        //
    }
}
