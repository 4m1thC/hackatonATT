@extends('layouts.app')

@section('template_title')
    {{ $inscribeUsuarioEvento->name ?? 'Show Inscribe Usuario Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inscribe Usuario Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscribe-usuario-eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado Asistencia:</strong>
                            {{ $inscribeUsuarioEvento->estado_asistencia }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $inscribeUsuarioEvento->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $inscribeUsuarioEvento->evento_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
