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
                                {{ __('Eventos disponibles en nuestra plataforma') }}
                            </span>

                            @can('eventos.crear')
                                <div class="float-right">
                                    <a href="{{ route('eventos.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Create New') }}
                                    </a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                </div>
                {!! $eventos->links() !!}
            </div>
        </div>
        <!-- Event section-->
        <section class="py-1">
            @foreach ($eventos as $evento)
                <div class="container px-4 px-lg-5 my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center text-center">
                        <div class="small mb-1">{{ $evento->tipo_evento }}</div>
                        <h1 class="display-5 fw-bolder">{{ $evento->nombre_evento }}</h1>
                        <div class="col-md-6">
                            <img class="rounded card-img-top mb-5 mb-md-0" src="{{ $evento->portada }}" width="700"
                                height="500" alt="..." />
                        </div>
                        @php
                            $sw = 'false';
                            $id = $evento->id;
                            $c = 0;
                            foreach ($inscritos as $inscrito) {
                                if ($inscrito->evento_id == $id) {
                                    $c += 1;
                                }
                            }
                        @endphp
                        <div class="col-md-6">
                            <div class="fs-5 mb-5">
                                <span><b>Numero de cupos disponibles:</b> {{ $evento->nro_cupos - $c }}</span>
                                <br>
                                <span><b>Fecha del evento:</b> {{ $evento->fecha }}</span>
                            </div>
                            <div class="overflow-auto" style="height: 350px;">
                                <p class="lead">{{ $evento->descripcion }}</p>
                            </div>
                            <div class="d-flex">
                                @foreach ($inscritos as $inscrito)
                                    @if ($inscrito->evento_id == $evento->id && auth()->id() == $inscrito->usuario_id)
                                        @php
                                            $sw = 'true';
                                        @endphp
                                    @break
                                @endif
                            @endforeach

                            @if ($sw == 'true')
                                <button type="button" class="btn btn-success mx-1">Inscrito</button>
                            @else
                                @if ($evento->nro_cupos - $c > 0)
                                    <form method="POST" action="{{ route('inscribir_usuario') }}">
                                        @csrf
                                        <input type="hidden" name="id_evento" value="{{ $evento->id }}">
                                        <button class="btn btn-outline-primary flex-shrink-0 me-1"
                                            type="submit">Inscribirse</button>
                                    </form>
                                @else
                                    <button type="button" class="btn btn-danger px-1 mx-1">Sin
                                        Cupo</button>
                                @endif
                            @endif
                            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST">
                                <a class="btn btn-outline-dark flex-shrink-0 me-1"
                                    href="{{ route('eventos.show', $evento->id) }}"><i class="fa fa-fw fa-eye"></i> Ver
                                    mas</a>
                                @can('eventos.editar')
                                    <a class="btn btn-outline-success flex-shrink-0 me-1"
                                        href="{{ route('eventos.edit', $evento->id) }}"><i class="fa fa-fw fa-edit"></i>
                                        Edit</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('eventos.borrar')
                                    <button type="submit" class="btn btn-outline-danger flex-shrink-0 me-1"><i
                                            class="fa fa-fw fa-trash"></i>
                                        Delete</button>
                                @endcan
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    {!! $eventos->links() !!}

</div>
@endsection
