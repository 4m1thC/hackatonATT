<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Materiale;

use Illuminate\Http\Request;

/**
 * Class MaterialeController
 * @package App\Http\Controllers
 */
class MaterialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Materiale::paginate();

        return view('materiale.index', compact('materiales'))
            ->with('i', (request()->input('page', 1) - 1) * $materiales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiale = new Materiale();
        $eventos = Evento::pluck('nombre_evento','id');
        return view('materiale.create', compact('materiale', 'eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materiale::$rules);

        $materiale = Materiale::create($request->all());

        return redirect()->route('materiales.index')
            ->with('success', 'Materiale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiale = Materiale::find($id);

        return view('materiale.show', compact('materiale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiale = Materiale::find($id);
        $eventos = Evento::pluck('nombre_evento','id');

        return view('materiale.edit', compact('materiale', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materiale $materiale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiale $materiale)
    {
        request()->validate(Materiale::$rules);

        $materiale->update($request->all());

        return redirect()->route('materiales.index')
            ->with('success', 'Materiale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materiale = Materiale::find($id)->delete();

        return redirect()->route('materiales.index')
            ->with('success', 'Materiale deleted successfully');
    }
}
