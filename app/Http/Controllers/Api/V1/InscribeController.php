<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\InscribeUsuarioEvento;
use Illuminate\Http\Request;

class InscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = InscribeUsuarioEvento::all();
        return response()->json($inscripciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InscribeUsuarioEvento $inscribeUsuarioEvento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InscribeUsuarioEvento $inscribeUsuarioEvento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InscribeUsuarioEvento $inscribeUsuarioEvento)
    {
        //
    }
}