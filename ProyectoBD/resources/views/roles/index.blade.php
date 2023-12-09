<!-- resources/views/roles/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Roles</h1>

    <ul>
        @foreach($roles as $role)
            <li>{{ $role->name }}</li>
        @endforeach
    </ul>
@endsection
