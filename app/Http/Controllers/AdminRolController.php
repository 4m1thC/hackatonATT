<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminRolController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->paginate();

        return view('adminRol.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        return view('adminRol.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('users.index', $user->id)->with('info', 'se asigno los roles correctamente');
    }
}