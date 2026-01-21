@extends('layout.layout')

@section('title','Añadir Eventos')

@section('content')
    <main>
        <h1 id="titulo">CREAR EVENTO</h1>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <label for="name">NOMBRE:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="description">DESCRIPCIÓN:</label>
            <input type="text" name="description" id="description">
            <br>
            <label for="location">SITIO:</label>
            <input type="text" name="location" id="location">
            <br>
            <label for="map">MAPA</label>
            <input type="text" name="map" id="map">
            <br>
            <label for="date">FECHA:</label>
            <input type="date" name="date" id="date">
            <br>
            <label for="hour">HORA:</label>
            <input type="time" name="hour" id="hour">
            <br>
            <label for="type">TIPO:</label>
            <input type="text" name="type" id="type">
            <br>
            <label for="tags">ETIQUETAS:</label>
            <input type="text" name="tags" id="tags">
            <br>
            <label for="visible">VISIBILE:</label>
            <input type="checkbox" name="visible" id="visible">
            <br>
            <button type="submit">CREAR</button>
        </form>
    </main>
@endsection
