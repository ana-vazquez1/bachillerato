<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bachillerato Digital Num. 24</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/info.css') }}">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <!doctype html>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        

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
      <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ asset('img/1c.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/2c.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="ins">Inscripcciones</h5>
                    <button type="button" class="btn btn-primary">Ver más</button>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

            <div class="mvv">
            <div class="mision">
                <aside>
                    <h5>Misión</h5>
                    <p>Servir a la comunidad formando
                            alumnos con habilidades y competencias que les permitan desarrollarse
                            profesionalmente para enfrentar los retos y desafíos del entorno local,
                            regional y nacional; orientado por profesores íntegros y de calidad en la
                            enseñanza.</p>
                </aside>
            </div>

            <div class="vision">
                <aside>
                    <h5>Visión</h5>
                    <p>Posicionarse como centro educativo
                        de referencia y ser un instrumento de colaboración, participación y desarrollo
                        que facilite un proceso de enseñanza-aprendizaje de excelencia, creativa e innovadora
                        que permita continuar con estudios superiores y/o integrarse al ámbito laboral.</p>
                </aside>
            </div>
            <div class="valores">
                <aside>
                    <h5>Valores</h5>
                    <p>Responsabilidad, Respeto, Armonía,
                    Amistad, Honestidad, Lealtad, Cooperación.</p>
                </aside>
            </div>
            </div>
            <div class="galeria">
                <h3>Galería</h3>
                <div class="linea"></div>
                <img src="{{ asset('img/1.png')}}" alt="">
                <img src="{{ asset('img/2.png')}}" alt="">
                <img src="{{ asset('img/3.png')}}" alt="">
                <img src="{{ asset('img/4.png')}}" alt="">

                <button type="button" class="btn btn-light">Ver</button>
            </div><br>
            <div class="linea"></div>

                <center>
                <div class="contacto" >
                <h3>¿Estas interesado? </h3>
                <p>Conoce nuestra oferta educativa</p>
                <button type="button" class="btn btn-success">Entrar</button>
                </center> <br>

                <div class="contacto">
                    <div class="contac"><h3>Contactanos</h3><br>
                        <p><i class="fi fi-rr-marker"></i> Ubicación: </p>
                        <p>Carretera federal Tehuacán. Orizaba km. 11.5 Col. Francisco I. Madero, Chapulco, Puebla. C.P. 75810</p>

                        <p><i class="fi fi-rr-phone-flip"></i> Télefono: </p>
                        <p>(+52) 238 100 1660</p>

                        <p><i class="fi fi-rr-envelope"></i> Correo: </p>
                        <p>21ebh0999q@seppue.gob.mx</p>
                    </div>
                </div>
            </div>
            <br><br>
         </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>