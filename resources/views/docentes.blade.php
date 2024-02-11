<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bachillerato Digital Num. 24</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

        <link rel="stylesheet" href="{{ asset('css/docentes.css') }}">
    </head>
    <body class="inicio">
      <div class="barraInicio">
        <nav>
                <ul>
                    <li><a href="{{(route('inicio'))}}">Inicio</a></li>
                    <li class="activo"><a href="{{ route('docentes') }}">Docentes</a></li>
                    <li><a href="{{ route('calendario') }}">Calendario</a></li>
                    <li class="iniciar"><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                </ul>
        </nav>
      </div>

      <div class="contenido">
       <img src="{{asset('img/loginDocen.png')}}" alt="">
       <div class="card">
            <h3 class="titulo">Bienvenido Docente</h3>
            <p>Inicie Sesión</p>

            <form action="POST">
                <div class="correo">
                    <i class="fi fi-br-envelope"></i>
                    <input type="email" placeholder="Correo">
                </div>
                <br>
                <div class="pass">
                    <i class="fi fi-rr-lock"></i>
                    <input type="password" placeholder="Contraseña">
                </div>
            </form>
            <br>
            <div class="d-grid mx-auto">
                <button type="submit" class="enviar">Enviar <i class="fi fi-rr-angle-right"></i></button>
            </div>
            <br>
            <div class="olvido">
                <a href="">¿Olvidaste la contraseña?</a>
            </div>
        </div>
      </div>
    </body>
</html>
