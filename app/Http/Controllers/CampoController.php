<?php

namespace App\Http\Controllers;

use App\Campo;
use Illuminate\Http\Request;

class CampoController extends Controller
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
            $pelicula=Campo::where('estado', true)->
            orderBy('ubicacion', 'asc')->get();

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
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            #lista de vídeojuegos ordenada por nombre de manera decendente
            $pelicula=Campo::where('estado', true)->
            orderBy('ubicacion', 'asc')->first();

        $response=$pelicula;
        return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function edit(Campo $campo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campo $campo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campo $campo)
    {
        //
    }
}
