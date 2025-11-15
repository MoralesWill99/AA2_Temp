@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="container mt-4">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->Id_cliente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="Nombre" class="form-control" value="{{ $cliente->Nombre }}" required>
        </div>
        <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="Correo" class="form-control" value="{{ $cliente->Correo }}" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="Direccion" class="form-control" value="{{ $cliente->Direccion }}" required>
        </div>

        {{-- Selector de Rol --}}
        <div class="mb-3">
            <label>Rol</label>
            <select name="Rol" class="form-select" required>
                <option value="usuario" {{ $cliente->Rol == 'usuario' ? 'selected' : '' }}>Usuario</option>
                <option value="administrador" {{ $cliente->Rol == 'administrador' ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection