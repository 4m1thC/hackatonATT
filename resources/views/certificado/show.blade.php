@extends('layouts.app')

@section('template_title')
    {{ $certificado->name ?? 'Show Certificado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Certificado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('certificados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $certificado->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Academicas:</strong>
                            {{ $certificado->horas_academicas }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Expedido:</strong>
                            {{ $certificado->fecha_expedido }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $certificado->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Charla Id:</strong>
                            {{ $certificado->charla_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
