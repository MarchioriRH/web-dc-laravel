@extends('layouts.app')
@section('content')
<div class="bg-light p-4">

  <div class="container bg-white p-4 rounded shadow">
    <div  class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-4">Reporte de Impacto Post-Evento Meteorológico / Emergencia</h2>
      <button type="button" class="btn-close mb-3" aria-label="Cerrar" onclick="window.history.back()"></button>      
    </div>
   @if ($errors->any())
      <div class="alert alert-danger">
        <div>
            <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
              <h4 class="alert-heading mb-0">¡Error!</h4>
              <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <p>Por favor corrige los siguientes errores:</p>
        </div>

          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  
    
    
    <form method="POST" action="{{ route('registers.store') }}">
      @csrf
      <!-- Datos básicos -->
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="fecha" class="form-label">Fecha de registro</label>
          <input type="date" class="form-control" id="fechaRegistro" name="fecha" value="{{ date('Y-m-d') }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="hora" class="form-label">Hora de registro</label>
          <input type="time" class="form-control" id="horaRegistro" name="hora" value="{{ date('H:i') }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="autor" class="form-label">Autor</label>
          <input type="text" class="form-control" id="autor" value="{{ Auth::user()->name }}" name="autor" readonly>
        </div>
      </div>
      <h5>Evento</h5>
      <div class="row">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="fechaEvento" class="form-label">Fecha del evento</label>
            <input type="date" class="form-control" id="fechaEvento" name="fecha">
          </div>
          <div class="col-md-6">
            <label for="horaEvento" class="form-label">Hora del evento</label>
            <input type="time" class="form-control" id="horaEvento" name="hora">
          </div>
        </div>

        <div class="mb-3">
          <label for="localidad" class="form-label">Localidad</label>
          <select class="form-select" id="localidad" name="localidad">
            <option>Tandil</option>
            <option>Maria Ignacia - Vela</option>
            <option>Gardey</option>
            <option>Fulton</option>
            <option>Azucena</option>
            <option>De la Canal</option>
            <option>La Pastora</option>
            <option>Iraola</option>
            <option>La Patria</option>
            <option>Base Aerea</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="barrio" class="form-label">Barrio</label>
          <select class="form-select" id="barrio" name="barrio">
            <option>Centro</option>
            <option>Villa Aguirre</option>
            <option>Hipodromo</option>
            <option>El Molino</option>
            <option>La Union</option>
            <option>Villa Italia</option>
            <option>Arcoiris</option>
            <option>Maggiori</option>
            <option>La Movediza</option>
            <option>La Elena</option>
            <option>Tunitas</option>
            <option>Gral Belgrano</option>
            <option>Villa Galicia</option>
            <option>Mirage</option>
            <option>El Paraiso</option>
            <option>Uncas</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción del evento</label>
          <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>

        <!-- Causa -->
        <div class="mb-3">
          <label for="causa" class="form-label">Causa</label>
          <select class="form-select" id="causa" name="causa">
            <option>Lluvias</option>
            <option>Vientos</option>
            <option>Granizo</option>
            <option>Otras</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="valores" class="form-label">Valores (pp [mm], Ráfagas [km/h], tamaño de granizo) - indicar fuente</label>
          <textarea class="form-control" id="valores" name="valores" rows="2"></textarea>
        </div>
    </div>
      <!-- Afectación a personas -->
      <h5 class="mt-4">Personas Afectadas</h5>
      <div class="row">
        <!-- Repite para cada categoría -->
        <div class="col-md-3">
          <label class="form-label">Evacuadas</label>
          <select class="form-select mb-1" name="evacuadas_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="evacuadas_cantidad" placeholder="Cantidad">
        </div>
        <div class="col-md-3">
          <label class="form-label">Heridas</label>
          <select class="form-select mb-1" name="heridas_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="heridas_cantidad" placeholder="Cantidad">
        </div>
        <div class="col-md-3">
          <label class="form-label">Perdidas</label>
          <select class="form-select mb-1" name="perdidas_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="perdidas_cantidad" placeholder="Cantidad">
        </div>
        <div class="col-md-3">
          <label class="form-label">Fallecidas</label>
          <select class="form-select mb-1" name="fallecidas_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="fallecidas_cantidad" placeholder="Cantidad">
        </div>
      </div>

      <!-- Viviendas e infraestructura -->
      <h5 class="mt-4">Viviendas e Infraestructura</h5>
      <div class="row">
        <div class="col-md-4">
          <label class="form-label">Viviendas afectadas</label>
          <select class="form-select mb-1" name="viviendas_afectadas_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="viviendas_afectadas_cantidad" placeholder="Cantidad">
        </div>
        <div class="col-md-4">
          <label class="form-label">Daños a estructuras</label>
          <select class="form-select mb-1" name="danos_estructuras_si_no"><option>NO</option><option>SI</option></select>
          <input type="text" class="form-control" name="danos_estructuras_detalle" placeholder="Detalle">
        </div>
        <div class="col-md-4">
          <label class="form-label">Voladura de techos</label>
          <select class="form-select mb-1" name="voladura_techos_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="voladura_techos_cantidad" placeholder="Cantidad">
        </div>
      </div>

      <!-- Inundación -->
      <div class="mb-3 mt-3">
        <label class="form-label">Nivel de inundación URBANO</label>
        <select class="form-select" name="inundacion_urbano">
          <option>Anegamiento (hasta cordón de vereda)</option>
          <option>Medio (encima vereda)</option>
          <option>Grave (dentro hogares)</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Nivel de inundación RURAL</label>
        <select class="form-select" name="inundacion_rural">
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
          <select class="form-select" name="postes_caidos_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="postes_caidos_cantidad" placeholder="Cantidad">
        </div>
        <div class="col-md-2">
          <label class="form-label">Árboles caídos</label>
          <select class="form-select" name="arboles_caidos_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="arboles_caidos_cantidad" placeholder="Cantidad">
        </div>
        <div class="col-md-2">
          <label class="form-label">Ramas caídas</label>
          <select class="form-select" name="ramas_caidas_si_no"><option>NO</option><option>SI</option></select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Cables caídos</label>
          <select class="form-select" name="cables_caidos_si_no"><option>NO</option><option>SI</option></select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Carteles</label>
          <select class="form-select" name="carteles_si_no"><option>NO</option><option>SI</option></select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Calles/rutas cortadas</label>
          <select class="form-select mb-1" name="calles_cortadas_si_no"><option>NO</option><option>SI</option></select>
          <input type="text" class="form-control" name="calles_cortadas_detalle" placeholder="Detalle">
        </div>
      </div>

      <!-- Servicios -->
      <h5 class="mt-4">Interrupción de Servicios</h5>
      <div class="row">
        <div class="col-md-3">
          <label class="form-label">Luz</label>
          <select class="form-select mb-1" name="luz_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="luz_horas" placeholder="Horas sin servicio">
        </div>
        <div class="col-md-3">
          <label class="form-label">Agua</label>
          <select class="form-select mb-1" name="agua_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="agua_horas" placeholder="Horas sin servicio">
        </div>
        <div class="col-md-3">
          <label class="form-label">Teléfonos</label>
          <select class="form-select mb-1" name="telefonos_si_no"><option>NO</option><option>SI</option></select>
          <input type="number" class="form-control" name="telefonos_horas" placeholder="Horas sin servicio">
        </div>
        <div class="col-md-3">
          <label class="form-label">Transporte</label>
          <select class="form-select mb-1" name="transporte_si_no"><option>NO</option><option>SI</option></select>
          <input type="text" class="form-control" name="transporte_detalle" placeholder="Detalle">
        </div>
      </div>

      <!-- Otras pérdidas -->
      <div class="mb-3 mt-4">
        <label class="form-label">Otras pérdidas</label>
        <textarea class="form-control" name="otras_perdidas" rows="2"></textarea>
      </div>
      <div class="text-center">      
        <button type="submit" class="btn btn-primary mt-3">Enviar Reporte</button>
        <button type="button" class="btn btn-primary mt-3" onclick="window.history.back()">Cancelar</button>
        {{-- <button type="button" class="btn-close mb-3" aria-label="Cerrar" onclick="window.history.back()"></button> --}}
      </div>

    </form>
  </div>

</div>
@endsection

