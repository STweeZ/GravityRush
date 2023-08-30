<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GravityRush</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">
    <div id="container_header">
        <a class="logo" href="{{ url('/') }}">
            <div id="logo_container"></div>
        </a>
        <div class="liens">
            <div class="container_liens">
                <a class="lien_menu accueil" href="{{ url('/') }}">Accueil</a>
            </div>

            <div class="container_liens">
                @if(Auth::user()==null)
                    <a class="lien_menu connect" href="{{ route('login') }}">Se connecter</a>
                @else
                    <a class="lien_menu connect" href="{{ route('logout') }}">Se déconnecter</a>
                @endif
            </div>

        </div>
    </div>
</header>
<div id="main">
    @yield('content')
</div>
</body>
</html>