@extends('layout.layout')

@section('title', 'Perfil de ' . $player->name)

@section('content')
<main>

    <div class="perfil-jugador">
        <div class="perfil-foto">
            <span class="perfil-dorsal">{{ $player->number }}</span>
            @if($player->photo)
                <img src="{{ $player->photo }}" alt="{{ $player->name }}">
            @else
                <div style="height: 500px; display:flex; align-items:center; justify-content:center; color:white;">SIN FOTO</div>
            @endif
        </div>

        <div class="perfil-info">
            <span class="posicion-badge">{{ $player->position }}</span>
            <h1>{{ $player->name }}</h1>

            <div class="datos-grid">
                <div class="dato-item">
                    <span class="dato-label">Edad</span>
                    <span class="dato-valor">{{ $player->years }} años</span>
                </div>
                <div class="dato-item">
                    <span class="dato-label">Dorsal</span>
                    <span class="dato-valor">#{{ $player->number }}</span>
                </div>
                @if ($player->twitter !== null)
                    <div class="dato-item">
                        <span class="dato-label">Twitter</span>
                        <span class="dato-valor">{{ $player->twitter}}</span>
                    </div>
                @endif
                @if ($player->instagram !== null)
                    <div class="dato-item">
                        <span class="dato-label">Instagram</span>
                        <span class="dato-valor">{{ $player->instagram}}</span>
                    </div>
                @endif
            </div>
            <br>
            @isadmin
                <div>
                    <a href="{{ route('players.edit', $player) }}"><button class="btn-primary">Editar Jugador</button></a>
                </div>
            @endisadmin
        </div>
    </div>
</main>
@endsection
