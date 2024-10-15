@extends('layouts.app')

@section('content')

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">
                <span class="masthead-shadow">Bienvenidos</span>
            </div>
            <div class="masthead-heading text-uppercase">
                <span class="masthead-shadow">Gracias por visitarnos</span>
            </div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#que-hace-la-dc"><span class="masthead-shadow">¿Que
                    hace la DC?</span></a>
        </div>
    </header>

    <!-- Weather-->
    <section class="page-section weather-info" id="el-tiempo">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">El tiempo</h2>
        </div>
        <div class="weather-buttons-container">
            <div>
                <a href="https://www.smn.gob.ar" target="_blank">
                    <button class="weather-button smn-button btn btn-info btn-xl text-uppercase" type="button">
                        <i class="bi bi-cloud">
                            <span class="weather-btn-text"> SMN </span>
                        </i>
                    </button>
                </a>
                <a href="https://www.smn.gob.ar/alertas" target="_blank"><button
                        class="weather-button alert-button btn btn-primary btn-xl text-uppercase" type="button">
                        <i class="bi bi-bell"><span class="weather-btn-text"> Alertas</span></i>
                    </button></a>
                <a href="http://meteotandil.com.ar/index.htm" target="_blank"><button
                        class="weather-button meteo-button btn btn-dark btn-xl text-uppercase" type="button">
                        <i class="bi bi-sun"><span class="weather-btn-text"> Meteotandil</span></i>
                    </button></a>
            </div>
        </div>
        <div class="container">
            <div class="row weather-row">
                <iframe width="1125" height="400"
                    src="https://embed.windy.com/embed.html?type=map&location=coordinates&metricRain=mm&metricTemp=°C&metricWind=km/h&zoom=7&overlay=wind&product=ecmwf&level=surface&lat=-38.874&lon=-54.679&detailLat=-37.323&detailLon=-59.137&detail=true"
                    frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <!-- Notices-->
    <section class="page-section bg-light" id="noticias">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Noticias</h2>
                <h3 class="section-subheading text-muted">Ultimas novedades.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="notices-item">
                        <a class="notices-link" data-bs-toggle="modal" href="#noticesModal1">
                            <div class="notices-hover">
                                <div class="notices-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src={{ asset('images/notices/notice_1_may24_fulton.png') }}
                                alt="Charla prevencion Fulton" />
                        </a>
                        <div class="notices-caption">
                            <div class="notices-caption-heading">Charlas en escuelas</div>
                            <div class="notices-caption-subheading text-muted">
                                Mayo 2024
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="notices-item">
                        <a class="notices-link" data-bs-toggle="modal" href="#noticesModal2">
                            <div class="notices-hover">
                                <div class="notices-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src={{ asset('images/notices/notice_2_26abr24_SCI_Bahia.jpg') }}
                                alt="Curso SCI Bahia Blanca" />
                        </a>
                        <div class="notices-caption">
                            <div class="notices-caption-heading">Curso de SCI</div>
                            <div class="notices-caption-subheading text-muted">
                                Abril 2024
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="notices-item">
                        <a class="notices-link" data-bs-toggle="modal" href="#noticesModal3">
                            <div class="notices-hover">
                                <div class="notices-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src={{ asset('images/notices/notice_3_abr24_presentacion_programa_fortalecimiento.jpeg')}}
                                alt="Presentacion programa fortalecimiento DC" />
                        </a>
                        <div class="notices-caption">
                            <div class="notices-caption-heading">
                                Programa de Fortalecimiento de las Defensas Civiles
                            </div>
                            <div class="notices-caption-subheading text-muted">
                                Abril 2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advice -->
    <section class="page-section" id="consejos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Consejos</h2>
                <h3 class="section-subheading text-muted">
                    ¿Que hacemos en estas situaciones?.
                </h3>
            </div>
            <!-- Carrousel -->
            <div class="carrousel-page" id="carrousel">
                <div class="container">
                    <div id="adviceCarousel" class="carousel slide text-center" data-bs-ride="carousel">
                        <div class="carousel-inner content-centered">
                            <div class="carousel-item active">
                                <img src={{ asset('images/carrousel/Monoxido-01.png') }}
                                    class="d-block mx-auto w-70" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src={{ asset('images/carrousel/Monoxido-02.png') }}
                                    class="d-block mx-auto w-70" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src={{ asset('images/carrousel/Monoxido-03.png') }}
                                    class="d-block mx-auto w-70" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src={{ asset('images/carrousel/Monoxido-04.png') }}
                                    class="d-block mx-auto w-70" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($advices as $advice)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="advice-item">
                            <a class="advice-link" data-bs-toggle="modal" href="#{{ $advice['id'] }}">
                                <div class="advice-hover">
                                    <div class="advice-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset($advice['image']) }}" alt="..." />
                            </a>
                            <div class="advice-caption">
                                <div class="advice-caption-heading">{{ $advice['heading'] }}</div>
                                <div class="advice-caption-subheading text-muted">{{ $advice['subheading'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    <!-- History-->
    <section class="page-section bg-light" id="que-hace-la-dc">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">
                    ¿Que hace la Defensa Civil?
                </h2>
                <h3 class="section-subheading text-muted">
                    La Defensa Civil organiza, instruye, prepara y capacita a los
                    habitantes a fin de que puedan afrontar en forma adecuada, toda
                    situación de emergencia producida por conflictos de tipo
                    internacional, conmoción interna y desastres imprevisibles
                    provocados por la naturaleza o por el hombre. Tambien coordina
                    acciones de mitigacion y prevencion junto a otros actores locales,
                    ademas de racionalizar el uso de los recursos disponibles durante la
                    atencion de una emergencia.
                </h3>
            </div>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">
                    ¿Que tareas cumple la Defensa Civil?
                </h2>
                <h3 class="text-things-todo text-muted">
                    Su principal tarea está orientada a la prevención y defensa de la
                    sociedad, por lo que brindan los siguientes servicios:
                </h3>
                <ul class="things-todo">
                    <li>Asistencia sanitaria.</li>
                    <li>Auxilio y rescate.</li>
                    <li>Comunicación.</li>
                    <li>Transporte y traslado.</li>
                    <li>Asistencia social.</li>
                    <li>Rehabilitación de servicios esenciales.</li>
                    <li>Prevención de accidentes viales.</li>
                    <li>Primeros auxilios.</li>
                    <li>Contención de la sociedad en incidentes.</li>
                    <li>Evacuación de la población.</li>
                </ul>
            </div>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Historia</h2>
                <h3 class="section-subheading text-muted">
                    La defensa civil argentina a travez del tiempo.
                </h3>
            </div>
            <ul class="timeline">
                <li>
                    <!-- <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/history/1.jpg" alt="..." /></div> -->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1939</h4>
                            <h4 class="subheading">Cuando todo comenzo</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Se crea el Comando de Defensa Antiaérea del Ejército.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <!-- <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/history/2.jpg" alt="..." /></div> -->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1950 - 1970</h4>
                            <h4 class="subheading">Como siguio</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Este organismo fue denominado como “Defensa Pasiva” y “Defensa
                                Antiaérea Pasiva”.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/history/3.jpg" alt="..." /></div> -->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1977</h4>
                            <h4 class="subheading">
                                Se empieza a hablar de la Defensa Civil.
                            </h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Defensa Civil comenzó a operar junto al Ministerio de Defensa
                                de la Nación.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <!-- <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/history/4.jpg" alt="..." /></div> -->
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1978</h4>
                            <h4 class="subheading">Ya es ministerio.</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Se transforma en la Dirección Nacional de Defensa Civil,
                                organismo dependiente del Ministerio de Defensa.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Partners-->
    <section class="py-5" id="partners">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src={{ asset('images/logos/municipalidad_tandil.jpg') }} alt="..."
                            aria-label="Municipalidad Tandil logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src={{ asset('images/logos/bbvv_gardey.png') }}
                            alt="..." aria-label="BBVV Gardey logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src={{ asset('images/logos/bbvv_vela.png') }}
                            alt="..." aria-label="BBVV Vela logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src={{ asset('images/logos/bomberos_tandil.png') }} alt="..."
                            aria-label="Bomberos Tandil logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src={{ asset('images/logos/SISP.png') }}
                            alt="..." aria-label="SISP Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src={{ asset('images/logos/cruz_roja_tandil.png') }} alt="..." aria-label="Cruz Roja Logo" /></a>
                </div>
            </div>
        </div>
    </section>

    {{-- @include('modals') --}}
    <!-- Dinamic modals container -->
    <div id="modals-container"></div>

    <!-- Footer-->
    <footer class="footer py-4 bg-light">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Defensa Civil y Asistencia a la Víctima - Tandil
                    </h6>
                    <p>
                        Página oficial de la Dirección de Defensa Civil y Asistencia a la
                        Víctima de Tandil.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Secciones</h6>
                    <p>
                        <a href="#weather-info" class="text-reset">El tiempo</a>
                    </p>
                    <p>
                        <a href="#notices" class="text-reset">Noticias</a>
                    </p>
                    <p>
                        <a href="#advice" class="text-reset">Consejos</a>
                    </p>
                    <p>
                        <a href="#what-does-the-dc" class="text-reset">¿Que hace la Defensa Civil?</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Links de interes</h6>
                    <p>
                        <a href="https://tandil.gob.ar" target="_blank" class="text-reset">Municipalidad de Tandil</a>
                    </p>
                    <p>
                        <a href="http://www.smn.gov.ar/?mod=pron&id=4&provincia=Buenos%20Aires&ciudad=Tandil"
                            target="_blank" class="text-reset">SMN</a>
                    </p>
                    <p>
                        <a href="http://meteotandil.com.ar/index.htm" target="_blank" class="text-reset">EMA
                            Meteotandil</a>
                    </p>
                    <p>
                        <a href="https://mapa.tandil.gov.ar" target="_blank" class="text-reset">ide Tandil</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                    <p>Tandil, 7000, ARG</p>
                    <p>defensacivil&#64;tandil.gob.ar</p>
                    <p>defensa.civil.tandil&#64;gmail.com</p>
                    <p>+ 54 249 449 0357</p>
                    <p>+ 54 249 442 9547</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start">
                    Copyright &copy; Defensa Civil y Asistencia a la Víctima - Tandil
                    2024
                </div>
                <div class="col-lg-6 my-3 my-lg-0 media-links">
                    <a class="btn btn-dark btn-social mx-2"
                        href="https://twitter.com/messages/compose?recipient_id=DC_Tandil&ref_src=twsrc%5Etfw"
                        class="twitter-dm-button" data-screen-name="DC_Tandil" data-show-count="false">X</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <a class="btn btn-dark btn-social mx-2"
                        href="https://www.facebook.com/DireccionDefensaCivilTandil?mibextid=ZbWKwL"
                        aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="detandil" aria-label="Instagram"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to top -->
    <a class="scrollup" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <!-- Scripts -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Local scripts -->
    @vite('resources/js/scripts.js')

    <script src="js/modals.js"></script>
    <!-- <script type="module" src="js/control_panel.js"></script> -->
</body>

</html>
@endsection
