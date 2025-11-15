@extends('layouts.app')

@section('title', 'Agregar Cliente')

@section('content')
<div class="container mt-4">
    <h1>Agregar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="Nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="Correo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="Direccion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="contrasena" class="form-control" required minlength="6">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection