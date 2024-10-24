
{{-- Extends the base layout, show new notice form --}}
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row p-10">
            <h1>Agregar Nueva Noticia</h1>
            <form action="{{ route('news.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtítulo</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" required>
                </div>
                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="text" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="mt-2"></div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button onclick="window.location.href='/home'" class="btn btn-warning">Salir</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
