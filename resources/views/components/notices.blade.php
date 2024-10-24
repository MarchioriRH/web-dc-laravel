<div class="text-center">
    <h2 class="section-heading text-uppercase">Noticias</h2>
    <h3 class="section-subheading text-muted">Ultimas novedades.</h3>
</div>
<div class="row">
    @foreach($notices as $notice)
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="notices-item" id="notices">
                <a class="notices-link" data-bs-toggle="modal" href='#noticeModal{{ $notice['id'] }}'>
                    {{-- <div class="notices-hover">
                        <div class="notices-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div> --}}
                    <img class="img-fluid" src="{{ asset('images/notices/' . $notice['image']) }}" alt="{{ $notice['title'] }}" />
                </a>
                <div class="notices-caption">
                    <div class="notices-caption-heading">{{ $notice['title'] }}</div>
                    <div class="notices-caption-subheading text-muted">{{ $notice['subtitle'] }}</div>
                </div>
            </div>
        </div>
        @include('modal.notice', ['notice' => $notice])
    @endforeach
</div>
