{{-- Contact modal --}}
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="contact-modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-14">
                        <div class="modal-body">
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
                                rel="stylesheet">
                            <div class="container">
                                <div class="contact__wrapper shadow-lg mt-n9">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                                            {{-- <h3 class="color--white mb-5">Otras maneras de mantenernos en contacto</h3> --}}
                                            <figure class="figure position-relative mb-5">
                                                <img src="../images/dc-logo.png" alt="Logo Defensa Civil"
                                                    class="img-contact rounded-circle">
                                            </figure>
                                            <ul
                                                class="contact-info__list list-style--none position-relative z-index-101">
                                                {{-- <li class="mb-4 pl-4">
                                                    <h4> Emergencias
                                                        <br> 103
                                                    </h4>
                                                </li> --}}
                                                <li class="mb-4 pl-4">
                                                    <span class="position-absolute"><i
                                                            class="fas fa-envelope"></i></span>
                                                    defensacivil@tandil.gov.ar
                                                    defensa.civil.tandil@gmail.com
                                                </li>
                                                <li class="mb-4 pl-4">
                                                    <span class="position-absolute"><i class="fas fa-phone"></i></span>
                                                    (249)-449 0327 / (249)-442 9547
                                                </li>
                                                <li class="mb-4 pl-4">
                                                    <span class="position-absolute"><i
                                                            class="fas fa-map-marker-alt"></i></span>
                                                    Belgrano 328
                                                    <br> 7000 - Tandil

                                                    <div class="mt-3">
                                                        <a href="https://www.google.com/maps/place/Belgrano+328,+B7000+Tandil,+Provincia+de+Buenos+Aires"
                                                            target="_blank"
                                                            class="text-link link--right-icon text-white">¿Como llegar?
                                                            <i class="link__icon fa fa-directions"></i></a>
                                                    </div>
                                                    <div class="col-lg-6 my-3 my-lg-5 media-links">
                                                        <a class="btn btn-light btn-social mx-2"
                                                            href="https://twitter.com/messages/compose?recipient_id=DC_Tandil&ref_src=twsrc%5Etfw"
                                                            class="twitter-dm-button" data-screen-name="DC_Tandil" data-show-count="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                                            </svg>
                                                        </a>
                                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                        <a class="btn btn-light btn-social mx-2"
                                                            href="https://www.facebook.com/DireccionDefensaCivilTandil?mibextid=ZbWKwL"
                                                            aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                        <a class="btn btn-light btn-social mx-2" href="detandil" aria-label="Instagram"><i
                                                                class="fa-brands fa-instagram"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                                            <form action="{{route('contact.submit')}}" method="POST" class="contact-form form-validate" novalidate="novalidate">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-4 pl-4">
                                                        <h4>Para emergencias comunicarse al 103</h4>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="required-field" for="firstName">Nombre</label>
                                                            <input type="text" class="form-control" id="firstName"
                                                                name="firstName" placeholder="Nombre">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <div class="form-group">
                                                            <label for="lastName">Apellido</label>
                                                            <input type="text" class="form-control" id="lastName"
                                                                name="lastName" placeholder="Apellido">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="required-field" for="email">Email</label>
                                                            <input type="text" class="form-control" id="email"
                                                                name="email" placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <div class="form-group">
                                                            <label for="phone">Teléfono</label>
                                                            <input type="tel" class="form-control" id="phone"
                                                                name="phone" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="subject">Asunto:</label>
                                                            <select name="subject" id=""
                                                                class="col-sm-12 mb-3 form-control">
                                                                <option value="general" selected>General</option>
                                                                <option value="support">Asistencia</option>
                                                                <option value="capacitation">Capacitaciones</option>
                                                                <option value="info">Informacion</option>
                                                                <option value="otro">Otro</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="required-field" for="message">¿En que podemos
                                                                ayudarle?</label>
                                                            <textarea class="form-control" id="message" name="message" rows="4" placeholder=""></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 mb-3">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary">Enviar</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Contact Form Wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
