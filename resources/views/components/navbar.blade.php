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
