<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Charla;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


/**
 * Class CertificadoController
 * @package App\Http\Controllers
 */
class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificados = Certificado::paginate();

        return view('certificado.index', compact('certificados'))
            ->with('i', (request()->input('page', 1) - 1) * $certificados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificado = new Certificado();

        $charlas = Charla::pluck('tema', 'id');
        $usuarios = User::pluck('name', 'id');

        return view('certificado.create', compact('certificado', 'usuarios', 'charlas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Certificado::$rules);

        $certificado = Certificado::create($request->all());

        return redirect()->route('certificados.index')
            ->with('success', 'Certificado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificado = Certificado::find($id);

        return view('certificado.show', compact('certificado'));
    }

    public function pdf($id)
    {
        $certificado = Certificado::find($id);

        $pdf = Pdf::loadView('certificado.pdf', ['certificado' => $certificado]);
        
        $pdf->setPaper('landscape');
     
        return $pdf->download('certificacion.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificado = Certificado::find($id);

        $charlas = Charla::pluck('tema', 'id');
        $usuarios = User::pluck('name', 'id');

        return view('certificado.edit', compact('certificado', 'usuarios', 'charlas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Certificado $certificado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificado $certificado)
    {
        request()->validate(Certificado::$rules);

        $certificado->update($request->all());

        return redirect()->route('certificados.index')
            ->with('success', 'Certificado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $certificado = Certificado::find($id)->delete();

        return redirect()->route('certificados.index')
            ->with('success', 'Certificado deleted successfully');
    }
}
