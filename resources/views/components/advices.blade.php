<div class="text-center">
    <h2 class="section-heading text-uppercase">Consejos</h2>
    <h3 class="section-subheading text-muted">¿Que hacemos en estas situaciones?</h3>
</div>
<div class="container text-center my-3">
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($advices as $advice)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset($advice['image']) }}" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">
                                    <a class="advice-link" data-bs-toggle="modal" href="#adviceModal" data-id="{{ $advice['id'] }}" data-heading="{{ $advice['heading'] }}" data-subheading="{{ $advice['subheading'] }}" data-image="{{ asset($advice['modalImage']) }}">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $advice['heading'] }}</h5>
                                            <p>{{ $advice['subheading'] }}</p>
                                        </div>


                                        {{-- <div class="advice-caption text-center">
                                            <div class="advice-caption-heading">{{ $advice['heading'] }}</div>
                                            <div class="advice-caption-subheading text-muted">{{ $advice['subheading'] }}</div>
                                        </div> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel"  href="#recipeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel"  href="#recipeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>



            {{-- <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="" aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="" aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
            </a> --}}
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="adviceModal" tabindex="-1" aria-labelledby="adviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adviceModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <img class="img-fluid img-advice d-block mx-auto" id="adviceModalImage" src="" alt="..." />
                            <button class="btn btn-primary btn-l text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

