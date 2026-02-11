@extends('layout.layout')

@section('title','Crear Jugador')

@section('content')
    <main>
        <h1 class="titulo">CREAR JUGADOR</h1>
        <div class="contenedor-formulario">
            <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name">NAME: </label>
                <input type="text" name="name" id="name">
                <br>
                <label for="number">DORSAL: </label>
                <input type="text" name="number" id="number">
                <br>
                <label for="position">POSICIÓN: </label>
                <input type="text" name="position" id="position">
                <br>
                <label for="years">AÑOS: </label>
                <input type="text" name="years" id="years">
                <br>
                <label for="twitter">TWITTER: </label>
                <input type="text" name="twitter" id="twitter">
                <br>
                <label for="instagram">INSTAGRAM: </label>
                <input type="text" name="instagram" id="instagram">
                <br>
                <label for="twitch">TWITCH: </label>
                <input type="text" name="twitch" id="twitch">
                <br>
                <label for="photo">FOTO: </label>
                <input type="file" name="photo" id="photo">
                <br>
                <label for="visible">VISIBILE: </label>
                <input type="checkbox" name="visible" id="visible">
                <br>
                <button type="submit">CREAR</button>
            </form>
        </div>
    </main>
@endsection
