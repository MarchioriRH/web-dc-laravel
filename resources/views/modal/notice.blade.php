{{-- Modal notices --}}
<div class="modal fade" id="noticeModal{{ $notice['id'] }}" tabindex="-1" aria-labelledby="noticeModalLabel{{ $notice['id'] }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="noticeModalLabel{{ $notice['id'] }}">{{ $notice['title'] }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="modal-body">
                            <img class="img-fluid d-block mx-auto" src={{ asset('images/notices/' . $notice['image'])}} alt="..." />
                            <div class="row">{!! $notice['content'] !!}</div>
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
