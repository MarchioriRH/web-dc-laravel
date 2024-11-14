@extends('layouts.app')

@section('content')
<section id="descargas" class="py-5 bg-light">
    <div class="container">
        <div>
            <a class="navbar-brand" href="home"><img src="{{ asset('images/dc-logo.png') }}" width="150" height="150" alt="Logo Defensa Civil" /></a>
        </div>
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Descargas</h2>
        <p class="lead text-muted">Accede a volantes, folletos, documentos, guías y manuales para estar siempre informado.</p>
      </div>
  
      <!-- Navegación de Tabs -->
      <ul class="nav nav-tabs mb-4 justify-content-center" id="descargasTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="guias-tab" data-bs-toggle="tab" data-bs-target="#guias" type="button" role="tab" aria-controls="guias" aria-selected="true">Guías</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button" role="tab" aria-controls="documentos" aria-selected="false">Documentos</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="volantes-tab" data-bs-toggle="tab" data-bs-target="#volantes" type="button" role="tab" aria-controls="volantes" aria-selected="false">Volantes</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="manuales-tab" data-bs-toggle="tab" data-bs-target="#manuales" type="button" role="tab" aria-controls="manuales" aria-selected="false">Manuales</button>
        </li>
      </ul>
  
      <!-- Contenido de las Tabs -->
      <div class="tab-content" id="descargasTabsContent">
        <!-- Sección de Guías -->
        <div class="tab-pane fade show active" id="guias" role="tabpanel" aria-labelledby="guias-tab">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                  <div class="icon mb-3">
                    <i class="bi bi-file-earmark-pdf-fill fs-1 text-primary"></i>
                  </div>
                  <h5 class="card-title">Guía de Emergencias</h5>
                  <p class="card-text">Descarga la guía oficial de procedimientos en caso de emergencia.</p>
                  <a href="#" class="btn btn-primary">Descargar PDF</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Sección de Documentos -->
        <div class="tab-pane fade" id="documentos" role="tabpanel" aria-labelledby="documentos-tab">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                  <div class="icon mb-3">
                    <i class="bi bi-file-earmark-text-fill fs-1 text-secondary"></i>
                  </div>
                  <h5 class="card-title">Informe Anual</h5>
                  <p class="card-text">Consulta el informe anual con toda la información relevante.</p>
                  <a href="#" class="btn btn-secondary">Descargar Documento</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Sección de Volantes -->
        <div class="tab-pane fade" id="volantes" role="tabpanel" aria-labelledby="volantes-tab">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                  <div class="icon mb-3">
                    <i class="bi bi-file-earmark-image-fill fs-1 text-danger"></i>
                  </div>
                  <h5 class="card-title">Volantes de Prevención</h5>
                  <p class="card-text">Descarga los volantes informativos sobre prevención de desastres.</p>
                  <a href="#" class="btn btn-danger">Descargar Imágenes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Sección de Manuales -->
        <div class="tab-pane fade" id="manuales" role="tabpanel" aria-labelledby="manuales-tab">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                  <div class="icon mb-3">
                    <i class="bi bi-file-earmark-word-fill fs-1 text-success"></i>
                  </div>
                  <h5 class="card-title">Manual de Primeros Auxilios</h5>
                  <p class="card-text">Conoce las técnicas básicas para brindar primeros auxilios.</p>
                  <a href="#" class="btn btn-success">Descargar DOC</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
  