<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Defensa Civil Tandil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href={{ asset('favicon.ico') }} />
    <!-- Font Awesome icons (free version)-->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=local_shipping" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css" /> --}}
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/eventFormStyle.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/service.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div>
            <a class="navbar-brand" href="home"><img src="{{ asset('images/dc-logo.png') }}" alt="..." /></a>
        </div>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0" id="navbar-list-ul">
                    <li class="nav-item dropdown links-dropdown-list">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Secciones
                        </a>
                        <ul class="dropdown-menu text-uppercase ms-auto py-4 py-lg-0 links-dropdown">
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="#el-tiempo">El tiempo</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="#noticias">Noticias</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="#consejos">Consejos</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="#que-hace-la-dc">¿Que hace la DC?</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown links-dropdown-list">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Links de interes
                        </a>
                        <ul class="dropdown-menu text-uppercase ms-auto py-4 py-lg-0 links-dropdown">
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="https://tandil.gob.ar" target="_blank">Municipalidad de Tandil</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="http://www.smn.gov.ar" target="_blank">SMN</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="http://meteotandil.com.ar/index.htm" target="_blank">EMA Meteotandil</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                    href="https://mapa.tandil.gov.ar" target="_blank">IDE Tandil</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="nav-link" data-bs-toggle="modal" href="#contactModal">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
        @include('modal.contact')
    </main>

     <!-- Scroll to top -->
     <a class="scrollup" href="#page-top"><i class="fas fa-angle-up"></i></a>

     <!-- Scripts -->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <!-- Bootstrap core JS-->
 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
         AOS.init();
       </script>
     <!-- Local scripts -->
 
     @vite('resources/js/scripts.js')
 
</body>
</html>
