<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
 //constructor

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            #lista de vídeojuegos ordenada por nombre de manera decendente
            $pelicula=Pelicula::where('estado', true)->
            orderBy('nombre', 'asc')->with(['genero', 'clasificacion'])->get();

        //siempre dar respuesta
        $response=$pelicula;
        return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all(){
        #para el admin
        try {
            #lista de vídeojuegos incluyendo las plataformas y usuario
        $pelicula=Pelicula::where('estado', true)->
        orderBy('nombre', 'asc')->
        with(['genero', 'clasificacion'])->withCount('votacion')->get();

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
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            #lista de vídeojuegos ordenada por nombre de manera decendente
            $pelicula=Pelicula::where([['estado', '=', true], ['id', '=', $id]])->
            orderBy('nombre', 'asc')->
            with(['genero', 'clasificacion'])->withCount('votacion')->first();

        $response=$pelicula;
        return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
