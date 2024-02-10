<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bachillerato Digital Num. 24</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="inicio">
      <div class="barraInicio">
        <nav>
            <p> Bachillerato Digital Num. 24 |  21ebh0999q@seppue.gob.mx  | Tel: 2361068938</p>
                <img src="{{asset('img/logo.png')}}" alt="">
                <ul>
                    <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{ route('docentes') }}">Docentes</a></li>
                    <li class="activo"><a href="{{ route('calendario') }}">Calendario</a></li>
                    <li class="iniciar"><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                </ul>
        </nav>
      </div>

    </body>
</html>
