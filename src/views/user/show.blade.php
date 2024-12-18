@extends('layouts.app')

@section('title', $title)

@section('content')
    @if ($user)
    <h2>Esto es Usuario {{ $user['name'] }}</h2>
    <p>ID: {{ $user['id'] }}</p>
    <p>Nombre: {{ $user['name'] }}</p>
    <p>Email: {{ $user['email'] }}</p>
    @else
    <p>No existe el usuario</p>
    @endif
@endsection