<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    {{-- <script src="js/scripts.js"></script> --}}
    <!-- Styles -->
    <style>
        /* Estilos para la lista de comentarios */
        .comment {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .content {
            margin-bottom: 10px;
        }

        .details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .author {
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        .date {
            font-size: 12px;
            color: #999;
        }

        .actions button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 14px;
            color: #555;
            margin-left: 10px;
        }

        .actions button:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Proyecto 281</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Informacion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Introduccion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>

                    @if (Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link">Eventos</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log
                                    in</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Tu Lugar Favorito Para Aprender</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Proyecto 281 puede ayudarlo a encontrar informacion sobre enventos de
                        su interes! ¡Simplemente elija un evento, inscribase a el y comience a adquirir conocimiento,
                        sin condiciones</p>
                    <a class="btn btn-primary btn-xl" href="{{ url('/home') }}">Ver los Eventos</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">¡Tenemos lo que necesitas!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Proyecto 281 tiene todo lo que necesita para poner en marcha su
                        nuevo sitio web en muy poco tiempo! Elija uno de nuestros temas de código abierto, de descarga
                        gratuita y fáciles de usar. ¡Sin condiciones!</p>
                    <a class="btn btn-light btn-xl" href="{{ route('register') }}">¡Registrate ahora!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">A su servicio</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Temas robustos</h3>
                        <p class="text-muted mb-0">¡Nuestros eventos se actualizan regularmente para mantenerlos libres
                            de errores!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Al dia</h3>
                        <p class="text-muted mb-0">Todas las charlas se mantienen actualizadas para mantener las cosas
                            frescas.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Listo para enseñar</h3>
                        <p class="text-muted mb-0">¡Lo aprendido en los eventos podras aplicarlo en cualquie ambito!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Hecho con amor</h3>
                        <p class="text-muted mb-0">¿Es realmente un evento si no está hecho con amor?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Expositores</div>
                            <div class="project-name">Te brindamos la oportunidad de aprender con los mejores
                                expositores</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Material</div>
                            <div class="project-name">Podras encontrar el material audiovisual o notas en entrando en
                                los eventos</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Ambientes</div>
                            <div class="project-name">Te brindaremos la informacion de donde se realizaran los eventos
                                y charlas</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">¡Registrate y empieza a aprender junto a nosotros!</h2>
            <a class="btn btn-light btn-xl" href="{{ route('register') }}">REGISTRARSE</a>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section-footer" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">
                        ¡Mantengámonos en contacto!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">¿Tienes dudas sobre lo que ofrecemos? ¡Envíenos un
                        mensaje y nos pondremos en contacto con usted lo antes posible!</p>
                </div>
            </div>

            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+591 --- --- --</div>
                </div>
            </div>
        </div>
    </section>

    {{-- agregar el page-section-footer al css --}}
    <section class="page-section-footer" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">
                        ¡Comentanos sobre tu experciencia!</h2>
                    <hr class="divider" />
                </div>
            </div>

            @if (Auth::check())
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Comentarios') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('comentarios.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            @foreach ($comentarios as $comentario)
                <div class="comment my-1">
                    <div class="content">
                        <p>{{ $comentario->contenido }}</p>
                    </div>
                    <div class="details">
                        <div class="author">
                            <span>Por: {{ $comentario->user->name }}</span>
                        </div>
                        <div class="date">
                            <span>{{ $comentario->created_at }}</span>
                        </div>
                        @if (Auth::check())
                            @if (auth()->user()->id == $comentario->usuario_id)
                                <div class="actions">
                                    <form action="{{ route('comentarios.destroy', $comentario->id) }}"
                                        method="POST">
                                        <a class="edit-button"
                                            href="{{ route('comentarios.edit', $comentario->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button"><i
                                                class="fa fa-fw fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>


</body>

</html>
