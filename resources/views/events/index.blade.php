@extends('layout.layout')

@section('title','Ver Eventos')

@section('content')
<main class="events-container">

    <h1 class="titulo">EVENTOS</h1>

    @isadmin
        <a href="{{ route('events.create') }}">
            <button class="btn-create">CREAR EVENTO</button>
        </a>
    @endisadmin

    <div class="events-list">

        @forelse ($events as $event)

            <div class="event-card">

                <div class="event-info">
                    <a href="{{ route('events.show', ['event' => $event]) }}">
                        <h2 class="event-title">{{ $event->name }}</h2>
                    </a>

                    <p class="event-description">
                        {{ $event->description }}
                    </p>

                    <p><strong>📍 Lugar:</strong> {{ $event->location }}</p>
                    <p><strong>🗓 Fecha:</strong> {{ $event->date }}</p>
                    <p><strong>⏰ Hora:</strong> {{ $event->hour }}</p>
                </div>

                <div class="event-extra">
                    <p><strong>Tipo:</strong> {{ $event->type }}</p>
                    <p><strong>Tags:</strong> {{ $event->tags }}</p>
                    @isadmin
                        <p><strong>Visible:</strong> {{ $event->visible ? 'Sí' : 'No' }}</p>
                    @endisadmin
                    @if($event->map)
                        <div class="event-map">
                            <iframe
                                src="{{ $event->map }}"
                                width="100%"
                                height="180"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy">
                            </iframe>
                        </div>
                    @endif
                </div>

            </div>

        @empty
            <h2>NO HAY EVENTOS</h2>
        @endforelse

    </div>

</main>
@endsection
