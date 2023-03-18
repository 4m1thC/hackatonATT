@extends('layouts.app')

@section('template_title')
    Evento
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Evento') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('eventos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif



                </div>

                @foreach ($eventos as $evento)
                    <div class="card text-center mt-1">
                        <div class="card-header">
                            {{ $evento->tipo_evento }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $evento->nombre_evento }}</h5>
                            <p class="card-text">{{ $evento->descripcion }}
                            </p>
                            <p class="card-text">{{ $evento->nro_cupos }}
                            </p>
                            <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-primary">Ver mas</a>
                            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST">
                                <a class="btn btn-sm btn-success" href="{{ route('eventos.edit', $evento->id) }}"><i
                                        class="fa fa-fw fa-edit"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                    Delete</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $evento->fecha }}
                        </div>
                    </div>
                @endforeach
                {!! $eventos->links() !!}
            </div>
        </div>
    </div>
@endsection
