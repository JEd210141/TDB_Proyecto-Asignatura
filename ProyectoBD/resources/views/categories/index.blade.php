<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Categorías</h1>

    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endsection
