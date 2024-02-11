<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bachillerato Digital Num. 24</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    </head>
    <body class="inicio">
      <div class="barraInicio">
        <nav>
                <img src="{{asset('img/logo.png')}}" alt="">
                <ul>
                    <li class="activo"><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{ route('docentes') }}">Docentes</a></li>
                    <li><a href="{{ route('calendario') }}">Calendario</a></li>
                    <li class="iniciar"><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                </ul>
        </nav>
      </div>

      <div class="container">
        <img src="{{asset('img/inicio1.png')}}" alt="">
        <div class="titulo">
          <h3>Bachillerato Digital <br> Núm. 24</h3>
          <p>La escuela Bachillerato General Digital Núm. 24 es una escuela del <br> sector público, de nivel educativo Media Superior y de turno vespertino.</p>
        </div>
        <button type="submit" class="enviar"><a href="{{ route('info')}}">Entrar <i class="fi fi-rr-angle-right"></i></a></button>
      </div>

    </body>
</html>
