@extends('layouts.app')

@section('template_title')
    Administracion de Roles
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administracion de Roles') }}
                            </span>
                        </div>
                        <div>
                            <form action="{{ route('users.index') }}" method="GET">
                                <input name="search" type="form-control" class="form-control"
                                    placeholder="Ingrese el nombre o correo de un usuario" value="{{ request('search') }}">
                            </form>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($users->count())
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>

                                            <th>Nombre</th>
                                            <th>Email</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td width="200px">
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('users.edit', $user->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="card-body">
                            <strong>No se encuentran registros</strong>
                        </div>
                    @endif

                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
