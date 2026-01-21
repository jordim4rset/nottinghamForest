@extends('layout.layout')

@section('title', 'SingUp')

@section('content')
    <main>
        <h1 class="titulo">REGISTRARSE</h1>
        <div class="contenedor-formulario">
            <form action="{{ route('singup') }}" method="POST">
                @csrf
                <label for="username">Nombre de usuario:</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}">
                <br>
                <label for="name">Nombre completo:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                <br>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}">
                <br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
                <br>
                <label for="password_confirmation">Repite la contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
                <br>
                <button type="submit">Registrarse</button>
            </form>
        </div>

        @if ($errors->any())
            Hay errores en el formulario: <br>

            @foreach ($errors as $error)
                {{ $error }} <br>
            @endforeach
        @endif
    </main>

@endsection
