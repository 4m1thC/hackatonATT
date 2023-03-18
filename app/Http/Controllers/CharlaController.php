<?php

namespace App\Http\Controllers;

use App\Models\Charla;
use App\Models\Evento;
use App\Models\Expositore;
use Illuminate\Http\Request;

/**
 * Class CharlaController
 * @package App\Http\Controllers
 */
class CharlaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charlas = Charla::paginate();

        return view('charla.index', compact('charlas'))
            ->with('i', (request()->input('page', 1) - 1) * $charlas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $charla = new Charla();

        $eventos = Evento::pluck('nombre_evento', 'id');
        $expositores = Expositore::pluck('id', 'id');

        return view('charla.create', compact('charla', 'eventos', 'expositores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Charla::$rules);

        $charla = Charla::create($request->all());

        return redirect()->route('charlas.index')
            ->with('success', 'Charla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $charla = Charla::find($id);

        return view('charla.show', compact('charla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $charla = Charla::find($id);

        $eventos = Evento::pluck('nombre_evento', 'id');
        //$expositores = Evento::all();

        return view('charla.edit', compact('charla', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Charla $charla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charla $charla)
    {
        request()->validate(Charla::$rules);

        $charla->update($request->all());

        return redirect()->route('charlas.index')
            ->with('success', 'Charla updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $charla = Charla::find($id)->delete();

        return redirect()->route('charlas.index')
            ->with('success', 'Charla deleted successfully');
    }
}
