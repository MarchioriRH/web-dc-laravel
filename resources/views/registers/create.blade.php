
@section('content')
<div class="bg-light p-4">

  <div class="container bg-white p-4 rounded shadow">
    <h2 class="mb-4">Reporte de Impacto Post-Evento Meteorológico / Emergencia</h2>

    <form>
      <!-- Datos básicos -->
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="fecha" class="form-label">Fecha del evento</label>
          <input type="date" class="form-control" id="fecha">
        </div>
        <div class="col-md-4">
          <label for="hora" class="form-label">Hora del evento</label>
          <input type="time" class="form-control" id="hora">
        </div>
        <div class="col-md-4">
          <label for="autor" class="form-label">Autor</label>
          <input type="text" class="form-control" id="autor">
        </div>
      </div>

      <div class="mb-3">
        <label for="localidad" class="form-label">Localidad</label>
        <input type="text" class="form-control" id="localidad">
      </div>

      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción del evento</label>
        <textarea class="form-control" id="descripcion" rows="3"></textarea>
      </div>

      <!-- Causa -->
      <div class="mb-3">
        <label for="causa" class="form-label">Causa</label>
        <select class="form-select" id="causa">
          <option>Lluvias</option>
          <option>Vientos</option>
          <option>Granizo</option>
          <option>Otras</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="valores" class="form-label">Valores (pp [mm], Ráfagas [km/h], tamaño de granizo) - indicar fuente</label>
        <textarea class="form-control" id="valores" rows="2"></textarea>
      </div>

      <!-- Afectación a personas -->
      <h5 class="mt-4">Personas Afectadas</h5>
      <div class="row">
        <!-- Repite para cada categoría -->
        <div class="col-md-3">
          <label class="form-label">Evacuadas</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-3">
          <label class="form-label">Heridas</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-3">
          <label class="form-label">Perdidas</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-3">
          <label class="form-label">Fallecidas</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
      </div>

      <!-- Viviendas e infraestructura -->
      <h5 class="mt-4">Viviendas e Infraestructura</h5>
      <div class="row">
        <div class="col-md-4">
          <label class="form-label">Viviendas afectadas</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-4">
          <label class="form-label">Daños a estructuras</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="text" class="form-control" placeholder="Detalle">
        </div>
        <div class="col-md-4">
          <label class="form-label">Voladura de techos</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
      </div>

      <!-- Inundación -->
      <div class="mb-3 mt-3">
        <label class="form-label">Nivel de inundación URBANO</label>
        <select class="form-select">
          <option>Anegamiento (hasta cordón de vereda)</option>
          <option>Medio (encima vereda)</option>
          <option>Grave (dentro hogares)</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Nivel de inundación RURAL</label>
        <select class="form-select">
          <option>Anegamiento (de lado a lado camino)</option>
          <option>Medio (caminos tapados con agua)</option>
          <option>Grave (intransitable, campos inundados)</option>
        </select>
      </div>

      <!-- Vía pública -->
      <h5 class="mt-4">Daños en Vía Pública</h5>
      <div class="row">
        <div class="col-md-2">
          <label class="form-label">Postes caídos</label>
          <select class="form-select"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-2">
          <label class="form-label">Árboles caídos</label>
          <select class="form-select"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-2">
          <label class="form-label">Ramas caídas</label>
          <select class="form-select"><option>NO</option><option>SI</option></select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Cables caídos</label>
          <select class="form-select"><option>NO</option><option>SI</option></select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Carteles</label>
          <select class="form-select"><option>NO</option><option>SI</option></select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Calles/rutas cortadas</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="text" class="form-control" placeholder="Detalle">
        </div>
      </div>

      <!-- Servicios -->
      <h5 class="mt-4">Interrupción de Servicios</h5>
      <div class="row">
        <div class="col-md-3">
          <label class="form-label">Luz</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Horas sin servicio">
        </div>
        <div class="col-md-3">
          <label class="form-label">Agua</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Horas sin servicio">
        </div>
        <div class="col-md-3">
          <label class="form-label">Teléfonos</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" placeholder="Horas sin servicio">
        </div>
        <div class="col-md-3">
          <label class="form-label">Transporte</label>
          <select class="form-select mb-1"><option>NO</option><option>SI</option></select>
          <input type="text" class="form-control" placeholder="Detalle">
        </div>
      </div>

      <!-- Otras pérdidas -->
      <div class="mb-3 mt-4">
        <label class="form-label">Otras pérdidas</label>
        <textarea class="form-control" rows="2"></textarea>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Enviar Reporte</button>
    </form>
  </div>

</div>
@endsection
