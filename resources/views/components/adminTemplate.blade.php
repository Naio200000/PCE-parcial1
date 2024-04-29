<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}Dashboard Komei</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/styles.css')}}">

</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-md fixed-top container-fluid x-auto ">
            <div class="nav container align-items-center">
                <a class="navbar-brand " href="{{route('dash')}}"><img src="{{url('./img/logo/komei_Juku.webp')}}" alt="Logo de la escuela"></a>
                <h1 class="titulo text-uppercase text-center">Komei Juku</h1>
                <button class="navbar-toggler ms-auto m-2" type="button" data-bs-toggle="collapse" data-bs-target="#ContenidoSoporteBarranNav" aria-controls="ContenidoSoporteBarranNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="ContenidoSoporteBarranNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-center text-sm-end" aria-current="page" href="{{route('dash')}}">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?view=tienda" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrar</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('products')}}">Productos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main >{{ $slot}}</main>
    <footer class="container-fluid mb-lg-0 footer">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col col-lg-4 p-1">
                    <img class="imagen-perfil footer-perfil" src="{{url('./img/misc/perfil.webp')}}" alt="Un señor muy buen moso">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                        <ul class="datos">
                            <li>Nicolas,Alsinet</li>
                            <li>38 Años</li>
                            <li>nicolas.alsinet@davinci.edu.ar</li>
                        </ul>
                        </div>
                        <div class="col-12 col-lg-7">
                            <ul class="row social">
                                <li class="col"><a href="https://www.instagram.com/nicolas.alsinet/" target="_blank"><img src="{{url('./img/logo/SVG/Instagram_logo_2016.svg')}}" alt="Logo de Instagram"></a></li>
                                <li class="col"><a href="https://www.linkedin.com/in/nicolas-alsinet-99a067226/" target="_blank"><img src="{{url('./img/logo/SVG/LinkedIn_icon.svg')}}" alt="Logo de linkedin"></a></li>
                                <li class="col"><a href="https://github.com/Naio200000" target="_blank"><img src="{{url('./img/logo/SVG/github_icon.svg')}}" alt="Logo de Github"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{url('js/bootstrap.bundle.js')}}"></script>
    <script type="module" src="{{url('js/main.js')}}"></script>
</body>
</html>