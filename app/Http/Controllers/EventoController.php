<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use App\Models\Ambiente;
use App\Models\Evento;
use App\Models\Charla;
use App\Models\InscribeUsuarioEvento;
use Illuminate\Http\Request;

/**
 * Class EventoController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::paginate();

        $inscritos = InscribeUsuarioEvento::all();
        $sw = 'false';

        return view('evento.index', compact('eventos', 'inscritos', 'sw'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento = new Evento();
        return view('evento.create', compact('evento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newpost = new Evento();

        if ($request->hasFile('portada')) {
            $file = $request->file('portada');
            $destinoPath = 'portadas/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSucess = $request->file('portada')->move($destinoPath, $filename);
            $newpost->portada = $destinoPath . $filename;
        }

        $newpost->nombre_evento = $request->nombre_evento;
        $newpost->descripcion = $request->descripcion;
        $newpost->tipo_evento = $request->tipo_evento;
        $newpost->nro_cupos = $request->nro_cupos;
        $newpost->fecha = $request->fecha;

        $newpost->save();

        // request()->validate(Evento::$rules);

        // $evento = Evento::create($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        $charlas = Charla::all();
        $materiales = Materiale::all();
        $ambientes = Ambiente::all();

        $inscritos = InscribeUsuarioEvento::all();
        $sw = 'false';

        $c = 0;
        foreach ($inscritos as $inscrito) {
            if ($inscrito->evento_id == $id) {
                $c+=1;
            }
        }

        return view('evento.show', compact('evento', 'charlas', 'materiales', 'ambientes', 'inscritos', 'sw', 'c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $newpost = $evento;

        if ($request->hasFile('portada')) {
            $file = $request->file('portada');
            $destinoPath = 'portadas/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSucess = $request->file('portada')->move($destinoPath, $filename);
            $newpost->portada = $destinoPath . $filename;
        }

        $newpost->nombre_evento = $request->nombre_evento;
        $newpost->descripcion = $request->descripcion;
        $newpost->tipo_evento = $request->tipo_evento;
        $newpost->nro_cupos = $request->nro_cupos;
        $newpost->fecha = $request->fecha;

        $newpost->save();
        // request()->validate(Evento::$rules);

        // $evento->update($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento deleted successfully');
    }
}
