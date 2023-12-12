@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario</h1>

        <!-- Formulario para editar el usuario actual -->
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <!-- Campo para el nombre -->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
            </div>

            <!-- Campo para el correo electrónico -->
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>

            <!-- Campo para el rol (puedes usar un menú desplegable si tienes roles predefinidos) -->
            <div class="form-group">
                <label for="role">Rol:</label>
                <input type="text" id="role" name="role" value="{{ $user->role->name }}" class="form-control" readonly>
            </div>

            <!-- Puedes agregar más campos según sea necesario -->

            <!-- Botón para actualizar el usuario -->
            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>

            <!-- Botón para regresar -->
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
@endsection
