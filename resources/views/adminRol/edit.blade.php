@extends('layouts.app')

@section('template_title')
    Administracion de Roles
@endsection
@section('content')
    <div class="container">
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <p>Nombre: </p>
                <p class="form-control">{{ $user->name }}</p>
                <h2 class="h5">Listado de Roles</h2>
                {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $rol)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                            {{ $rol->name }}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
