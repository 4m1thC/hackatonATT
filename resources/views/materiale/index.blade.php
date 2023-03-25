@extends('layouts.app')

@section('template_title')
    Materiale
@endsection

@section('content')

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .custom-size {
                width: 450px;
                height: 300px;
            }
        </style>
    </head>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materiales') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('materiales.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif




                    {{-- <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Evento</th>
                                        <th>Nombre Materiales</th>
                                        <th>Tipo</th>
                                        <th>Archivo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiales as $materiale)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $materiale->evento->nombre_evento }}</td>
                                            <td>{{ $materiale->nombre_materiales }}</td>
                                            <td>{{ $materiale->tipo }}</td>
                                            <td>
                                                <div class="embed-responsive embed-responsive-4by3 .custom-size">
                                                    <embed class="embed-responsive-item" width="450" height="300" src="{{ $materiale->archivo }}">
                                                </div>
                                            </td>
                                            <td>
                                                <form action="{{ route('materiales.destroy', $materiale->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('materiales.show', $materiale->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('materiales.edit', $materiale->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>
                {!! $materiales->links() !!}
            </div>
        </div>
        <section class="py-1 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Materiales de todos los eventos</h2>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-2 justify-content-center">
                    @foreach ($materiales as $materiale)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                @if ($materiale->tipo == '1')
                                    <img class="card-img-top" src="{{ $materiale->archivo }}" alt="imagen"
                                        height="300" />
                                @endif

                                @if ($materiale->tipo == '2')
                                    <video src="{{ $materiale->archivo }}" controls autoplay="true" muted="true"
                                        height="300" loop="true"
                                        poster="https://carontestudio.com/img/contacto.jpg"></video>
                                @endif

                                @if ($materiale->tipo == '0')
                                    <div class="embed-responsive embed-responsive-4by3 .custom-size">
                                        <embed class="embed-responsive-item"  width="100%" height="300"
                                            src="{{ $materiale->archivo }}">
                                    </div>
                                @endif
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $materiale->nombre_materiales }}</h5>
                                        <!-- Product price-->
                                        {{ $materiale->evento->nombre_evento }} - {{ $materiale->tipo }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto"
                                            href="{{ route('materiales.show', $materiale->id) }}">Mostrar Mas</a>
                                        <form action="{{ route('materiales.destroy', $materiale->id) }}" method="POST">
                                            {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('materiales.show', $materiale->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a> --}}
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('materiales.edit', $materiale->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
