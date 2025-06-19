<nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
    <div>
        <a class="navbar-brand" href="home"><img src="{{ asset('images/dc-logo.png') }}" alt="Logo Defensa Civil" /></a>
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0" id="navbar-list-ul">
                {{-- <li class="nav-item dropdown links-dropdown-list">
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
                        <li>
                            <a class="dropdown-item text-uppercase ms-auto py-4 py-lg-0"
                                href="#que-hace-av">¿Que hace Asitencia a la Víctima?</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link"
                                href="#el-tiempo">El tiempo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                                href="#noticias">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                                href="#consejos">Consejos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                                href="#que-hace-la-dc">¿Que hace la DC?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                                href="#que-hace-av">¿Que es Asitencia a la Víctima?</a>
                </li>
                <li class="nav-item" id="download">
                    <a class="nav-link" href="/descargas">Descargas</a>
                </li>
                <li class="nav-item" id="contact">
                    <a class="nav-link" data-bs-toggle="modal" href="#contactModal">Contacto</a>
                </li>
                <li class="nav-item dropdown links-dropdown-list">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Links de interes
                    </a>
                    <ul class="dropdown-menu text-uppercase ms-auto py-4 py-lg-0 links-dropdown dropdown-menu-right">
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
                @if(Auth::user()) 
                    <li class="nav-item" id="logout">
                        {{-- <a class="nav-link" href="{{route('logout')}}">Salir</a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="/home" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                    </li>
                @else 
                    <li class="nav-item" id="login">
                        <a class="nav-link" href="{{route('login')}}">Ingresar</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
