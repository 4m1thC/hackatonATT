@extends('layouts.app')

@section('template_title')
    {{ $expositore->name ?? 'Show Expositore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Expositore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('expositores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Informacion:</strong>
                            {{ $expositore->informacion }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $expositore->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
