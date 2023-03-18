@extends('layouts.app')

@section('template_title')
    {{ $ambiente->name ?? 'Show Ambiente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ambiente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ambientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Ambiente:</strong>
                            {{ $ambiente->nombre_ambiente }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $ambiente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ambiente->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $ambiente->evento->nombre_evento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
