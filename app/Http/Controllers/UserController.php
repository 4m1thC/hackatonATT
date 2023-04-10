<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->id();
        $user = auth()->user();
        // $certificados = Certificado::all($id);
        // return view('perfil.index', compact('certificados', 'user'));

        $certificados = Certificado::paginate();

        return view('perfil.index', compact('certificados', 'user'))
            ->with('i', (request()->input('page', 1) - 1) * $certificados->perPage());
        //return view('perfil.index'); 
    }

}