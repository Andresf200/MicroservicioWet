<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapas con Humedad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
</head>

<body>
    <header class="header contenedor">
        <div class="header__logo">
            <img src="{{ asset('img/logo.png')}}" alt="logo">
        </div>

        <nav class="navegacion">
            <a href="#" class="navegacion__link">Inicio</a>

            <a href="#" class="navegacion__link--historial">Historial</a>
        </nav>


    </header>

    @yield('content')

    <footer class="footer">
        <div class="footer__grid contenedor">
            <div class="footer__widget">
                <h3 class="footer__heading">Nosotros</h3>
                <p class="footer__texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, aliquid
                    beatae quisquam iste adipisci fuga veniam voluptatibus necessitatibus? Sed eligendi quisquam
                    accusantium maiores at, minima dolor labore maxime error soluta.</p>
            </div>
            <div class="footer__widget">
                <h3 class="footer__heading">Navegación</h3>
                <div class="footer__nav">
                    <a href="#" class="footer__link">Enlace 1</a>
                    <a href="#" class="footer__link">Enlace 2</a>
                    <a href="#" class="footer__link">Enlace 3</a>
                    <a href="#" class="footer__link">Enlace 4</a>
                    <a href="#" class="footer__link">Enlace 5</a>
                    <a href="#" class="footer__link">Enlace 6</a>
                </div>
            </div>
            <div class="footer__widget">
                <h3 class="footer__heading">Contacto</h3>
                <p class="footer__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique fuga,
                    suscipit ab minima fugiat quisquam inventore odio possimus? Minima possimus eveniet mollitia in
                    suscipit nihil harum officia aperiam iure. Odit!</p>
            </div>
        </div>
        <p class="footer__copyright">
            Mapas con Humedad. Todos los derechos Reservados
        </p>
    </footer>
</body>

</html>
