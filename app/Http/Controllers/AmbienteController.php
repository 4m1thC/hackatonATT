<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use App\Models\Evento;
use Illuminate\Http\Request;

/**
 * Class AmbienteController
 * @package App\Http\Controllers
 */
class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambientes = Ambiente::paginate();

        $eventos = Evento::pluck('nombre_evento','id');

        return view('ambiente.index', compact('ambientes'))
            ->with('i', (request()->input('page', 1) - 1) * $ambientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ambiente = new Ambiente();

        $eventos = Evento::pluck('nombre_evento','id');
        
        return view('ambiente.create', compact('ambiente', 'eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ambiente::$rules);

        $ambiente = Ambiente::create($request->all());

        return redirect()->route('ambientes.index')
            ->with('success', 'Ambiente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ambiente = Ambiente::find($id);

        return view('ambiente.show', compact('ambiente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ambiente = Ambiente::find($id);

        $eventos = Evento::pluck('nombre_evento','id');

       return view('ambiente.edit', compact('ambiente', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ambiente $ambiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambiente $ambiente)
    {
        request()->validate(Ambiente::$rules);

        $ambiente->update($request->all());

        return redirect()->route('ambientes.index')
            ->with('success', 'Ambiente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ambiente = Ambiente::find($id)->delete();

        return redirect()->route('ambientes.index')
            ->with('success', 'Ambiente deleted successfully');
    }
}
