@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    @if (count($users) === 0)
        <p>No hay usuarios</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>
                            <a href="/user/{{ $user['id'] }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
