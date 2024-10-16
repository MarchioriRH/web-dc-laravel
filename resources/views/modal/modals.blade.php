{{-- Modal --}}
<div class="modal fade" id="adviceModal{{ $advice['id'] }}" tabindex="-1" aria-labelledby="adviceModalLabel{{ $advice['id'] }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adviceModalLabel{{ $advice['id'] }}">{{ $advice['heading'] }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            {{-- <h2 class="text-uppercase">{{ $advice['heading'] }}</h2> --}}
                            {{-- <p class="item-intro text-muted">{{ $advice['subheading']}}</p> --}}
                            <img class="img-fluid d-block mx-auto" src={{ asset($advice['modalImage'])}} alt="..." />
                            {{-- <p>${modal.description}</p> --}}
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
