@extends('layout.layout')

@section('title','Plantilla')

@section('content')
    <main>
        <h1 class="titulo">JUGADORES</h1>

        @isadmin
            <a href="{{ route('players.create') }}"><button>CREAR JUGADOR</button></a>
        @endisadmin

        <h3 class="seccion-titulo">DELANTEROS</h3>
        <div class="contenedor-jugadores">
            @forelse ($delanteros as $delantero)
                <a href="{{ route('players.show', ['player' => $delantero]) }}">
                    <div class="card-jugador">
                        <div class="contenedor-foto">
                            <span class="numero-jugador">{{ $delantero->number }}</span>
                            @if($delantero->photo)
                                <img src="{{ $delantero->photo }}" alt="{{ $delantero->name }}">
                            @else
                                <div class="foto-placeholder">SIN FOTO</div>
                            @endif
                        </div>

                        <div class="card-info">
                            <h2>{{ $delantero->name }}</h2>

                            <p><strong>Edad:</strong> {{ $delantero->years }} años</p>

                            <div class="social-icons">
                                @if ($delantero->twitter != null)
                                    <span>TW: {{ $delantero->twitter }}</span>
                                @endif

                                @if ($delantero->instagram != null)
                                    <span>IG: {{ $delantero->instagram }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h3>NO HAY DELANTEROS</h3>
            @endforelse
        </div>

        <h3 class="seccion-titulo">MEDIOCENTROS</h3>
        <div class="contenedor-jugadores">
            @forelse ($medios as $medio)
                <a href="{{ route('players.show', ['player' => $medio]) }}">
                    <div class="card-jugador">
                        <div class="contenedor-foto">
                            <span class="numero-jugador">{{ $medio->number }}</span>
                            @if($medio->photo)
                                <img src="{{ $medio->photo }}" alt="{{ $medio->name }}">
                            @else
                                <div class="foto-placeholder">SIN FOTO</div>
                            @endif
                        </div>

                        <div class="card-info">
                            <h2>{{ $medio->name }}</h2>

                            <p><strong>Edad:</strong> {{ $medio->years }} años</p>

                            <div class="social-icons">
                                @if ($medio->twitter != null)
                                    <span>TW: {{ $medio->twitter }}</span>
                                @endif

                                @if ($medio->instagram != null)
                                    <span>IG: {{ $medio->instagram }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h3>NO HAY MEDIOCENTROS</h3>
            @endforelse
        </div>

        <h3 class="seccion-titulo">DEFENSAS</h3>
        <div class="contenedor-jugadores">
            @forelse ($defensas as $defensa)
                <a href="{{ route('players.show', ['player' => $defensa]) }}">
                    <div class="card-jugador">
                        <div class="contenedor-foto">
                            <span class="numero-jugador">{{ $defensa->number }}</span>
                            @if($defensa->photo)
                                <img src="{{ $defensa->photo }}" alt="{{ $defensa->name }}">
                            @else
                                <div class="foto-placeholder">SIN FOTO</div>
                            @endif
                        </div>

                        <div class="card-info">
                            <h2>{{ $defensa->name }}</h2>

                            <p><strong>Edad:</strong> {{ $defensa->years }} años</p>

                            <div class="social-icons">
                                @if ($defensa->twitter != null)
                                    <span>TW: {{ $defensa->twitter }}</span>
                                @endif

                                @if ($defensa->instagram != null)
                                    <span>IG: {{ $defensa->instagram }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h3>NO HAY DEFENSAS</h3>
            @endforelse
        </div>


        <h3 class="seccion-titulo">PORTEROS</h3>
        <div class="contenedor-jugadores">
            @forelse ($porteros as $portero)
                <a href="{{ route('players.show', ['player' => $portero]) }}">
                    <div class="card-jugador">
                        <div class="contenedor-foto">
                            <span class="numero-jugador">{{ $portero->number }}</span>
                            @if($portero->photo)
                                <img src="{{ $portero->photo }}" alt="{{ $portero->name }}">
                            @else
                                <div class="foto-placeholder">SIN FOTO</div>
                            @endif
                        </div>

                        <div class="card-info">
                            <h2>{{ $portero->name }}</h2>

                            <p><strong>Edad:</strong> {{ $portero->years }} años</p>

                            <div class="social-icons">
                                @if ($portero->twitter != null)
                                    <span>TW: {{ $portero->twitter }}</span>
                                @endif

                                @if ($portero->instagram != null)
                                    <span>IG: {{ $portero->instagram }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h3>NO HAY PORTEROS</h3>
            @endforelse
        </div>
    </main>
@endsection
