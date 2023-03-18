<?php

namespace App\Http\Controllers;

use App\Models\Expositore;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class ExpositoreController
 * @package App\Http\Controllers
 */
class ExpositoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expositores = Expositore::paginate();

        return view('expositore.index', compact('expositores'))
            ->with('i', (request()->input('page', 1) - 1) * $expositores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expositore = new Expositore();

        $usuarios = User::pluck('name','id');

        return view('expositore.create', compact('expositore', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Expositore::$rules);

        $expositore = Expositore::create($request->all());

        return redirect()->route('expositores.index')
            ->with('success', 'Expositore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expositore = Expositore::find($id);

        return view('expositore.show', compact('expositore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expositore = Expositore::find($id);

        $usuarios = User::pluck('name','id');

        return view('expositore.edit', compact('expositore', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Expositore $expositore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expositore $expositore)
    {
        request()->validate(Expositore::$rules);

        $expositore->update($request->all());

        return redirect()->route('expositores.index')
            ->with('success', 'Expositore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expositore = Expositore::find($id)->delete();

        return redirect()->route('expositores.index')
            ->with('success', 'Expositore deleted successfully');
    }
}
