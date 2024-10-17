@extends('layouts.app')

@section('content')

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            @include('components.masthead')
        </div>
    </header>

    <!-- Weather-->
    <section class="page-section weather-info" id="el-tiempo">
        @include('components.weather')
    </section>

    <!-- Notices-->
    <section class="page-section bg-light" id="noticias">
        <div class="container">
            @include('components.notices')
        </div>
    </section>

    <!-- Advices -->
    <section class="page-section" id="consejos">
        <div class="container">
            @include('components.advices')
        </div>
    </section>

    <!-- History-->
    <section class="page-section bg-light" id="que-hace-la-dc">
        <div class="container">
            @include('components.history')
        </div>
    </section>

    <!-- Partners-->
    <section class="py-5" id="partners">
        @include('components.partners')
    </section>

    <!-- Dinamic modals container -->
    <div id="modals-container"></div>

    {{-- @include('modal.modals') --}}
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

</body>

</html>
@endsection
