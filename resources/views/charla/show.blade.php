@extends('layouts.app')

@section('template_title')
    {{ $charla->name ?? 'Show Charla' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Charla</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('charlas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tema:</strong>
                            {{ $charla->tema }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $charla->horario }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $charla->archivo }}
                        </div>
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $charla->evento_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
