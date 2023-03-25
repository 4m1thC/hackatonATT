@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="../{{ $evento->portada }}" alt="..." />
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">{{ $evento->nombre_evento }}</h1>
                    <span class="badge bg-secondary">{{ $evento->tipo_evento }}</span>
                    <span class="badge bg-dark">Numero de cupos: {{ $evento->nro_cupos }}</span>
                    <p>{{ $evento->descripcion }}</p>
                    <h4>Fecha del evento: <span class="badge bg-secondary">{{ $evento->fecha }}</span></h4>

                    <a class="btn rounded-pill btn-primary" href="#!">Inscribirse</a>
                    <a class="btn rounded-pill btn-secondary" href="{{ route('eventos.index') }}">Regresar</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">Charlas que se realizaran en el evento</p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                @foreach ($charlas as $charla)
                    @if ($charla->evento_id == $evento->id)
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $charla->tema }}</h2>
                                    <p class="card-text">Expositor: {{ $charla->expositore->user->name }}</p>
                                    <p class="card-text">Horario: {{ $charla->horario }}</p>
                                </div>
                                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


        </div>
    </section>
@endsection
