@extends('layouts.app')

@section('content')
    <!-- Navigation-->
    @include('components.navbar')

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            @include('components.masthead')
        </div>
    </header>

    <!-- Weather-->
    <section class="page-section weather-info" id="el-tiempo">
        <div class="container">
            @include('components.weather')
        </div>
    </section>

    <!-- Notices-->
    <section class="page-section bg-white" id="noticias">
        <div class="container">
            @include('components.notices')
        </div>
    </section>

    <!-- Advices -->
    <section class="page-section" id="consejos">
        <div class="container">
            @include('components.advices')
        </div>
    </section>

    <!-- What does DC-->
    <section class="page-section bg-white" id="que-hace-la-dc">
        <div class="container">
            @include('components.what-does-dc')
        </div>
    </section>

    <!-- What does AV -->
    <section class="page-section" id="que-hace-av">
        <div class="container">
            @include('components.what-does-av')
        </div>
    </section>

    <!-- Partners-->
    <section class="py-5 bg-white" id="partners">
        <div class="container">
            @include('components.partners')
        </div>
    </section>

    <!-- Footer-->
    <section class="page-section" id="footer">
        <div class="container">
            @include('components.footer')
        </div>
    </section>

    <!-- Dinamic modals container -->
    <div id="modals-container"></div>

@endsection
