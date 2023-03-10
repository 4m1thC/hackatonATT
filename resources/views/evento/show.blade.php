@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Evento:</strong>
                            {{ $evento->nombre_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $evento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Evento:</strong>
                            {{ $evento->tipo_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Cupos:</strong>
                            {{ $evento->nro_cupos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $evento->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
