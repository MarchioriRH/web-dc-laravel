@extends('layouts.app')
@include('components.navbar')
@section('content')
<div class="container mt-10">
    <h1 class="mb-4">Lista de Usuarios</h1>
    <div class="mx-auto p-2" style="width: 200px;"><a type="button" href={{route('registers.create')}}>Nuevo registro</a></div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No hay usuarios registrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection