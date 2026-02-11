@extends('layout.layout')

@section('title','Editar Jugador')

@section('content')
    <main>
        <h1 class="titulo">Editar JUGADOR</h1>
        <div class="contenedor-formulario">
            <form action="{{ route('players.update', $player) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <label for="name">NAME: </label>
                <input type="text" name="name" id="name" value="{{ $player->name }}">
                <br>
                <label for="number">DORSAL: </label>
                <input type="text" name="number" id="number" value="{{ $player->number }}">
                <br>
                <label for="position">POSICIÓN: </label>
                <input type="text" name="position" id="position" value="{{ $player->position }}">
                <br>
                <label for="years">AÑOS: </label>
                <input type="text" name="years" id="years" value="{{ $player->years }}">
                <br>
                <label for="twitter">TWITTER: </label>
                <input type="text" name="twitter" id="twitter" value="{{ $player->twitter }}">
                <br>
                <label for="instagram">INSTAGRAM: </label>
                <input type="text" name="instagram" id="instagram" value="{{ $player->instagram }}">
                <br>
                <label for="twitch">TWITCH: </label>
                <input type="text" name="twitch" id="twitch" value="{{ $player->twitch }}">
                <br>
                <label for="photo">FOTO: </label>
                <input type="file" name="photo" id="photo" value="{{ $player->photo }}">
                <br>
                <label for="visible">VISIBILE: </label>
                <input type="checkbox" name="visible" id="visible" @checked(old('active', $player->visible))>
                <br>
                <button type="submit">ACTUALIZAR</button>
            </form>
        </div>
    </main>
@endsection

