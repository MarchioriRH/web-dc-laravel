@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Us</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <select name="subject" id="">
                <option value="general" selected>General</option>
                <option value="support">Asistencia</option>
                <option value="capacitation">Capacitaciones</option>
                <option value="info">Informacion</option>
                <option value="otro">Otro</option>
            </select>
        <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
