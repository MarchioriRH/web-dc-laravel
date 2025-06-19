@extends('layouts.app')

@section('content')

{{-- Navbar --}}
@include('components.navbar')

{{-- Contenido del Panel de Control --}}

<div class="container-fluid mt-5">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse pt-5 mt-4">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('control-panel.index') }}">
                            <i class="fas fa-home me-2"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-file-alt me-2"></i> Documentos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('control-panel.index', ['section' => 'users']) }}">
                            <i class="fas fa-users me-2"></i> Usuarios
                        </a>
                    </li>
                    <!-- Agregá más secciones según lo que necesites -->
                </ul>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-3 mb-3 border-bottom">
                <h1 class="h2">Panel de Control</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>Bienvenido/a, {{ Auth::user()->name }}.</p>
                    <p>Desde aquí podés administrar documentos, usuarios, y otras funciones del sistema.</p>

                    <!-- Aquí podés agregar tarjetas, tablas, etc. -->
                    @if($section === 'users')
                        <h3>Entra</h3>
                        @include('users.index', ['users' => $users])
                    @endif
                </div>
            </div>
        </main>
    </div>
</div>

@endsection
