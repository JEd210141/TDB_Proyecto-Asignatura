@extends('layouts.app')

@section('content')
    <h1>Detalles de la Categoría</h1>
    <p>ID: {{ $category->id }}</p>
    <p>Nombre: {{ $category->name }}</p>
    <!-- Agrega más detalles según sea necesario -->
@endsection
