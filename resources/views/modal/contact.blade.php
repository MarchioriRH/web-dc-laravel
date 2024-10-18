

{{-- Contact modal --}}
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModal">Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-14">
                        <div class="modal-body">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="form-group p-2">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group p-2">
                                    <label for="phone">Telefono</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group p-2">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group p-2">
                                    <label for="subject">Asunto:</label>
                                    <select name="subject" id="" class="col-lg-14">
                                        <option value="general" selected>General</option>
                                        <option value="support">Asistencia</option>
                                        <option value="capacitation">Capacitaciones</option>
                                        <option value="info">Informacion</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                <div class="form-group p-2">
                                    <label for="message">Mensaje</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                    <button  data-bs-dismiss="modal" class="btn btn-warning">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
