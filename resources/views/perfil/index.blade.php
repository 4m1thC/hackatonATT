@extends('layouts.app')


@section('content')

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
            type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/perfil.css" rel="stylesheet" />
    </head>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="https://cdn-icons-png.flaticon.com/512/64/64572.png"
                alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Perfil de Usuario</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">{{ $user->name }}</p>
            <p class="masthead-subheading font-weight-light mb-0">{{ $user->email }}</p>
            <p class="masthead-subheading font-weight-light mb-0">{{ $user->id }}</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Certificados</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Folio</th>
                        <th scope="col">Horas Academicas</th>
                        <th scope="col">Fecha Expedido</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Descargar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificados as $certificado)
                        @if ($certificado->usuario_id == $user->id)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $certificado->folio }}</td>
                                <td>{{ $certificado->horas_academicas }}</td>
                                <td>{{ $certificado->fecha_expedido }}</td>
                                <td>{{ $certificado->charla->tema }}</td>
                                <td>{{ $certificado->charla->evento->nombre_evento }}</td>

                                <td>
                                    <a class="btn btn-sm btn-primary "
                                        href="{{ route('certificados.pdf', $certificado->id) }}"><i
                                            class="fa fa-fw fa-eye"></i> PDF</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
