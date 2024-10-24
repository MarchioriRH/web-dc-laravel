<div class="text-center">
    <h2 class="section-heading text-uppercase">Consejos</h2>
    <h3 class="section-subheading text-muted">¿Que hacemos en estas situaciones?</h3>
</div>
<div class="carrousel-page" id="carrousel">
    <div class="container">
        <div id="adviceCarousel" class="carousel slide text-center" data-bs-ride="carousel">
            <div class="carousel-inner content-centered">
                @foreach ($carouselImages as $image)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('images/carousel/' . $image['image']) }}" class="d-block mx-auto w-70" alt="..." />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($advices as $advice)
        <div class="col-lg-4 col-sm-6 mb-4">
                <div class="advice">
                    <div class="advice-item">
                        <a class="advice-link" data-bs-toggle="modal" href="#adviceModal{{ $advice['id'] }}">

                            <img class="img-fluid" src="{{ asset($advice['image']) }}" alt="..." style="margin: 0 auto; display: block;"/>
                        </a>
                        <div class="advice-caption text-center">
                            <div class="advice-caption-heading">{{ $advice['heading'] }}</div>
                            <div class="advice-caption-subheading text-muted">{{ $advice['subheading'] }}</div>
                        </div>
                    </div>
                </div>
        </div>
        @include('modal.advice', ['advice' => $advice])
    @endforeach
</div>
