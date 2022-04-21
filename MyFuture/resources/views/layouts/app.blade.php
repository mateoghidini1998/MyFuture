<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Cinzel Decorative', cursive; color: white; font-size: 30px">
                    myFuture
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <ul class="navbar-nav">
                            @if (Auth::check())
                            <li class="nav-item">
                                <a style="color: white" class="nav-link" href="/posts">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a style="color: white" class="nav-link" href="/users">Usuarios</a>
                            </li>

                            <li class="nav-item">
                                <a style="color: white" class="nav-link" href="/posts/add">Agregar un Post</a>
                            </li>

                            <div class="search">

                                <form action="/search" method="get">
                                    @csrf
                                    <input class="form-control" type="text" name="search">
                                    <button type="submit" name="button" class="btn btn-primary">Buscar</button>

                                </form>
                            </div>
                            @endif
                        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img style="width: 40px;border-radius: 50%;position: relative;bottom: 4px;margin-left: 5px;margin-right: 10px;" src="../../../storage/avatar/{{ Auth::user()->avatar }}" alt="">
                                <span style="color:lightgrey" class="caret">{{ Auth::user()->userName }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">

                                <a style="color:white" class="dropdown-item" href="/user/{{Auth::user()->id}}">

                                    <i class="fa fa-btn fa-user"> {{ __('Profile') }}</i>
                                </a>

                                <a style="color:white" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-btn fa-sign-out"> {{ __('Logout') }}</i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
