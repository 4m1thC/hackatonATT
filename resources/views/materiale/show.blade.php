@extends('layouts.app')

@section('template_title')
    {{ $materiale->name ?? 'Show Materiale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materiale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $materiale->evento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Materiales:</strong>
                            {{ $materiale->nombre_materiales }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $materiale->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $materiale->archivo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
