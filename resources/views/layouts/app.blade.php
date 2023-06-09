<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (Auth::check())
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('eventos.index') }}">{{ __('Eventos') }}</a>
                            </li>
                            @can('charlas.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('charlas.index') }}">{{ __('Charlas') }}</a>
                                </li>
                            @endcan
                            @can('expositores.index')
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('expositores.index') }}">{{ __('Expositores') }}</a>
                                </li>
                            @endcan
                            @can('certificados.index')
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('certificados.index') }}">{{ __('Certificados') }}</a>
                                </li>
                            @endcan
                            @can('ambientes.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ambientes.index') }}">{{ __('Ambientes') }}</a>
                                </li>
                            @endcan
                            @can('materiales.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('materiales.index') }}">{{ __('Materiales') }}</a>
                                </li>
                            @endcan
                            @can('certificados.index')
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('inscribe-usuario-eventos.index') }}">{{ __('Inscribe') }}</a>
                                </li>
                            @endcan

                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('comentarios.index') }}">{{ __('Comentarios') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Preguntas frecuentes') }}</a>
                            </li>

                            @can('admin.rol.crear')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">{{ __('Roles') }}</a>
                                </li>
                            @endcan


                        </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('perfil.index') }}">
                                        {{ __('Perfil') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
