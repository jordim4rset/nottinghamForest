@extends('layout.layout')

@section('title','Ver Eventos')

@section('content')
    <main>
        <h1 id="titulo">EVENTOS</h1>

        @isadmin
            <a href="{{ route('events.create') }}"><button>CREAR EVENTO</button></a>
        @endisadmin

        @forelse ($events as $event)
            <div>
                <a href="{{ route('events.show', ['event' => $event]) }}"><h2>{{ $event->name }}</h2></a>
                <p>{{ $event->description }}</p>
                <p>{{ $event->location }}</p>
                <p>{{ $event->map }}</p>
                <p>{{ $event->date }}</p>
                <p>{{ $event->hour }}</p>
                <p>{{ $event->type }}</p>
                <p>{{ $event->tags }}</p>
                <p>{{ $event->visible }}</p>
                <div>
                    <a href="{{ route('events.edit', ['event' => $event->id]) }}"></a>
                </div>
            </div>
        @empty
            <h2>NO HAY EVENTOS</h2>
        @endforelse
    </main>
@endsection
