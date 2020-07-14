<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
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
            $producto=Producto::where('estado', true)->
            orderBy('nombre', 'asc')->
            with(['clasificacion', 'tipoproducto'])->get();

        //siempre dar respuesta
        $response=$producto;
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
        $producto=Producto::where('estado', true)->
        orderBy('nombre', 'asc')->
        with(['clasificacion', 'tipoproducto'])->withCount('votacion')->get();

        //siempre dar respuesta
        $response=$producto;
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
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            #lista de vídeojuegos ordenada por nombre de manera decendente
            $producto=Producto::where('estado', true)->where('id', $id)->
            orderBy('nombre', 'asc')->
            with(['clasificacion', 'tipoproducto'])->withCount('votacion')->first();

        $response=$producto;
        return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
