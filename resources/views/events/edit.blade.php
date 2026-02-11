@extends('layout.layout')

@section('title', 'Editar Evento')

@section('content')
    <main>
        <h1 class="titulo">CREAR EVENTO</h1>
        <div class="contenedor-formulario">
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
                <select name="type" id="type">
                    <option value="official">OFICIAL</option>
                    <option value="exibition">EXIBICIÓN</option>
                    <option value="charity">BENÉFICO</option>
                </select>
                <br>
                <label for="tags">ETIQUETAS:</label>
                <input type="text" name="tags" id="tags" value="{{ $event->tags }}">
                <br>
                <label for="visible">VISIBILE:</label>
                <input type="checkbox" name="visible" id="visible" @checked(old('active', $event->visible))>
                <br>
                <button type="submit">ACTUALIZAR</button>
            </form>
        </div>
    </main>
@endsection

