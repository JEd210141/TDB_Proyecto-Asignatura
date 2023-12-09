@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Rol</h1>
    <!-- Agrega un formulario para crear un nuevo rol -->
    <form method="post" action="{{ route('roles.store') }}">
        @csrf
        <!-- Agrega campos del formulario según tus necesidades -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Guardar Rol</button>
    </form>
@endsection
