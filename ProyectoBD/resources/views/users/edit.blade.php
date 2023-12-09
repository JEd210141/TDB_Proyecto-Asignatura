@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <!-- Agrega un formulario para editar el usuario actual -->
    <form method="post" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <!-- Agrega campos del formulario con valores actuales -->
        <button type="submit">Actualizar Usuario</button>
    </form>
@endsection
