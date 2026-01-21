@extends('layout.layout')

@section('title', 'Editar Evento')

@section('content')
    <main>
        <h1 id="titulo">CREAR EVENTO</h1>
        <form action="{{ route('events.update', $event) }}" method="POST">
            @csrf
            @method('put')

            <label for="name">NOMBRE:</label>
            <input type="text" name="name" id="name" value="{{ $event->name }}">
            <br>
            <label for="description">DESCRIPCIÓN:</label>
            <input type="text" name="description" id="description" value="{{ $event->description }}">
            <br>
            <label for="location">SITIO:</label>
            <input type="text" name="location" id="location" value="{{ $event->location }}">
            <br>
            <label for="map">MAPA</label>
            <input type="text" name="map" id="map" value="{{ $event->map }}">
            <br>
            <label for="date">FECHA:</label>
            <input type="date" name="date" id="date" value="{{ $event->date }}">
            <br>
            <label for="hour">HORA:</label>
            <input type="time" name="hour" id="hour" value="{{ $event->hour }}">
            <br>
            <label for="type">TIPO:</label>
            <input type="text" name="type" id="type" value="{{ $event->type }}">
            <br>
            <label for="tags">ETIQUETAS:</label>
            <input type="text" name="tags" id="tags" value="{{ $event->tags }}">
            <br>
            <label for="visible">VISIBILE:</label>
            @if($event->visible == 1)
                <input type="checkbox" name="visible" id="visible" checked">
            @else
                <input type="checkbox" name="visible" id="visible">
            @endif
            <br>
            <button type="submit">ACTUALIZAR</button>
        </form>
    </main>
@endsection

