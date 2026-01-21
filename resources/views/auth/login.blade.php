@extends('layout.layout')

@section('title','Login')

@section('content')
    <main>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="username">Nombre de Usuario:</label>
            <br>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Contraseña:</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </main>
@endsection
