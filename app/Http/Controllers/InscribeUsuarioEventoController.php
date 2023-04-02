<?php

namespace App\Http\Controllers;

use App\Models\InscribeUsuarioEvento;
use Illuminate\Http\Request;

/**
 * Class InscribeUsuarioEventoController
 * @package App\Http\Controllers
 */
class InscribeUsuarioEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscribeUsuarioEventos = InscribeUsuarioEvento::paginate();

        return view('inscribe-usuario-evento.index', compact('inscribeUsuarioEventos'))
            ->with('i', (request()->input('page', 1) - 1) * $inscribeUsuarioEventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscribeUsuarioEvento = new InscribeUsuarioEvento();
        return view('inscribe-usuario-evento.create', compact('inscribeUsuarioEvento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InscribeUsuarioEvento::$rules);

        $inscribeUsuarioEvento = InscribeUsuarioEvento::create($request->all());

        return redirect()->route('inscribe-usuario-eventos.index')
            ->with('success', 'InscribeUsuarioEvento created successfully.');
    }

    public function inscrito(Request $request)
    {
        $newpost = new InscribeUsuarioEvento();

        $newpost->usuario_id = auth()->user()->id;
        $newpost->evento_id = $request->id_evento;
        $newpost->estado_asistencia = "pendiente";

        $newpost->save();

        return redirect()->back();
        //     ->with('success', 'InscribeUsuarioEvento created successfully.');
    }
    
   /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscribeUsuarioEvento = InscribeUsuarioEvento::find($id);

        return view('inscribe-usuario-evento.show', compact('inscribeUsuarioEvento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscribeUsuarioEvento = InscribeUsuarioEvento::find($id);

        return view('inscribe-usuario-evento.edit', compact('inscribeUsuarioEvento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InscribeUsuarioEvento $inscribeUsuarioEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InscribeUsuarioEvento $inscribeUsuarioEvento)
    {
        request()->validate(InscribeUsuarioEvento::$rules);

        $inscribeUsuarioEvento->update($request->all());

        return redirect()->route('inscribe-usuario-eventos.index')
            ->with('success', 'InscribeUsuarioEvento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inscribeUsuarioEvento = InscribeUsuarioEvento::find($id)->delete();

        return redirect()->route('inscribe-usuario-eventos.index')
            ->with('success', 'InscribeUsuarioEvento deleted successfully');
    }
}
