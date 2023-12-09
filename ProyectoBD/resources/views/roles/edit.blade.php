@extends('layouts.app')

@section('content')
    <h1>Editar Rol</h1>
    <!-- Agrega un formulario para editar el rol actual -->
    <form method="post" action="{{ route('roles.update', $role->id) }}">
        @csrf
        @method('PUT')
        <!-- Agrega campos del formulario con valores actuales -->
        <button type="submit">Actualizar Rol</button>
    </form>
@endsection
