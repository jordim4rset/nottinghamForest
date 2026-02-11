@extends('layout.layout')

@section('title', 'Ver Evento')

@section('content')

    <main>
        @if ($event->visible == true)
            <div class="card-evento">

                <div class="card-header">
                    <h1>{{ $event->name }}</h1>
                </div>

                <div class="card-body">

                    <div class="campo">
                        <span>DESCRIPCIÓN:</span>
                        {{ $event->description }}
                    </div>

                    <div class="campo">
                        <span>SITIO:</span>
                        {{ $event->location }}
                    </div>

                    <div class="campo mapa">
                        <span>MAPA:</span>
                        <iframe src="{{ $event->map }}"></iframe>
                    </div>

                    <div class="campo">
                        <span>FECHA:</span>
                        {{ $event->date }}
                    </div>

                    <div class="campo">
                        <span>HORA:</span>
                        {{ $event->hour }}
                    </div>

                    <div class="campo">
                        <span>TIPO:</span>
                        {{ $event->type }}
                    </div>

                    <div class="campo">
                        <span>ETIQUETAS:</span>
                        {{ $event->tags }}
                    </div>

                    <div class="campo">
                        <span>VISIBLE:</span>

                        @if($event->visible)
                            <span class="visible-si">SÍ</span>
                        @else
                            <span class="visible-no">NO</span>
                        @endif
                    </div>
                </div>
            </div>


            @isadmin
                <form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn-primary">ELIMINAR</button>
                </form>
                <a href="{{ route('events.edit', ['event' => $event->id]) }}"><button class="btn-primary">EDITAR</button></a>
            @endisadmin
        @endif
    </main>
@endsection
