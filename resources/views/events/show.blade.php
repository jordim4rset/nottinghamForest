@extends('layout.layout')

@section('title', 'Ver Evento')

@section('content')

    <main>

            <div class="content-show">
                <div class="content-card">
                    <div class="title">
                        
                    </div>
                </div>
            </div>
























        @if ($event->visible == true)
            <div>
                <h2>NOMBRE: {{ $event->name }}</h2>
                <p>DESCRIPCIÓN: {{ $event->description }}</p>
                <p>SITIO: {{ $event->location }}</p>
                <p>MAPA: {{ $event->map }}</p>
                <p>FECHA: {{ $event->date }}</p>
                <p>HORA: {{ $event->hour }}</p>
                <p>TIPO: {{ $event->type }}</p>
                <p>ETIQUETAS: {{ $event->tags }}</p>
                <p>VISIBILIDAD: {{ $event->visibility }}</p>

                @isadmin
                    <form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn-primary">ELIMINAR</button>
                    </form>
                    <a href="{{ route('events.edit', ['event' => $event->id]) }}"><button class="btn-primary">EDITAR</button></a>
                @endisadmin
            </div>

        @endif
    </main>
@endsection
