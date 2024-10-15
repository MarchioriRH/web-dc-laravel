<--! Modal 1 -->
<div class="modal-dialog">
    <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="modal-body">
                        <h2 class="text-uppercase">${modal.title}</h2>
                        <p class="item-intro text-muted">${modal.subtitle}</p>
                        <img class="img-fluid d-block mx-auto" src="${modal.image}" alt="..." />
                        <p>${modal.description}</p>
                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                            <i class="fas fa-xmark me-1"></i>
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
