@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <h1 class="font-weight-light">{{ $evento->nombre_evento }}</h1>
                <div class="col-md-6">
                    <img class="rounded card-img-top mb-5 mb-md-0" src="../{{ $evento->portada }}" width="700" height="500"
                        alt="..." />
                </div>

                <div class="col-lg-5">
                    <div class="text-center">
                        @foreach ($ambientes as $ambiente)
                            @if ($ambiente->evento_id == $evento->id)
                                <p>
                                    <strong>Direccion: {{ $ambiente->direccion }}</strong>
                                </p>
                                <p>
                                    <strong>Nombre del Ambiente:</strong> {{ $ambiente->nombre_ambiente }}
                                    <br><strong>Descripcion:</strong> {{ $ambiente->descripcion }}
                                </p>
                            @endif
                        @endforeach
                    </div>
                    <span class="badge bg-secondary">{{ $evento->tipo_evento }}</span>
                    <span class="badge bg-dark">Numero de cupos: {{ $evento->nro_cupos - $c }}</span>
                    <div class="overflow-auto" style="height: 350px;">
                        <p>{{ $evento->descripcion }}</p>
                    </div>
                    <h4>Fecha del evento: <span class="badge bg-secondary">{{ $evento->fecha }}</span></h4>
                    <div class="row">
                        <div class="col-3">
                            @php
                                $swCupo = 'true';
                            @endphp
                            @if ($evento->nro_cupos - $c == 0)
                                @php
                                    $swCupo = 'false';
                                @endphp
                            @endif
                            @php
                                $sw = 'false';
                            @endphp
                            @foreach ($inscritos as $inscrito)
                                @if ($inscrito->evento_id == $evento->id && auth()->id() == $inscrito->usuario_id)
                                    @php
                                        $sw = 'true';
                                    @endphp
                                @break
                            @endif
                        @endforeach
                        @if ($sw == 'true')
                            <button type="button" class="btn rounded-pill btn-success mx-1">Inscrito</button>
                        @else
                            @if ($swCupo == 'true')
                                <form method="POST" action="{{ route('inscribir_usuario') }}">
                                    @csrf
                                    <input type="hidden" name="id_evento" value="{{ $evento->id }}">
                                    <button class="btn rounded-pill btn-primary" type="submit">Inscribirse</button>
                                </form>
                            @else
                                <button type="button" class="btn rounded-pill btn-danger px-1 mx-1">Sin Cupo</button>
                            @endif
                        @endif

                    </div>
                    <div class="col-3">
                        <a class="btn rounded-pill btn-secondary" href="{{ route('eventos.index') }}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">Charlas que se realizaran en el evento</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            @foreach ($charlas as $charla)
                <div class="col-md-4 mb-5">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="../{{ $charla->archivo }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $charla->tema }}</h2>
                            <p class="card-text">Expositor: {{ $charla->expositore->user->name }}</p>
                            <p class="card-text">{{ $charla->expositore->informacion }}</p>
                            <p class="card-text">Horario: {{ $charla->horario }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-dark my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">Material que se encuentra disponible para el evento</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-2 justify-content-center">
            @foreach ($materiales as $materiale)
                @if ($materiale->evento_id == $evento->id)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            @if ($materiale->tipo == '1')
                                <img class="card-img-top" src="{{ asset($materiale->archivo) }}" alt="imagen"
                                    height="300" />
                            @endif
                            @if ($materiale->tipo == '2')
                                <video src="{{ asset($materiale->archivo) }}" controls autoplay="true" muted="true"
                                    height="300" loop="true"
                                    poster="https://carontestudio.com/img/contacto.jpg"></video>
                            @endif
                            @if ($materiale->tipo == '0')
                                <div class="embed-responsive embed-responsive-4by3 .custom-size">
                                    <embed class="embed-responsive-item" width="100%" height="300"
                                        src="../{{ $materiale->archivo }}">
                                </div>
                            @endif
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $materiale->nombre_materiales }}</h5>
                                    <!-- Product price-->
                                    {{ $materiale->evento->nombre_evento }}
                                    <span class="badge bg-dark">Publicado en: {{ $materiale->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
