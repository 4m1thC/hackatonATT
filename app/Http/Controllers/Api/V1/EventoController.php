<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();
        return response()->json($eventos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newpost = new Evento();

        $newpost->portada = $request->portada;
        $newpost->nombre_evento = $request->nombre_evento;
        $newpost->descripcion = $request->descripcion;
        $newpost->tipo_evento = $request->tipo_evento;
        $newpost->nro_cupos = $request->nro_cupos;
        $newpost->fecha = $request->fecha;

        $newpost->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Evento::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}