@extends('layout.layout')

@section('title','Crear Mensaje')

@section('content')
    <main>
        <h1 class="titulo">CREAR MENSAJE</h1>
        <div class="contenedor-formulario">
            <form action="{{route('messages.store')}}" method="post">
                @csrf
                @auth
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="INPname" value="{{Auth::user()->name}}">
                    <br>
                    <label for="email">Correo:</label>
                    <input type="text" name="subject" id="INPemail" value="{{Auth::user()->email}}">
                    <br>
                @else
                    <label for="name">Nombre: </label>
                    <input type="text" name="name" id="INPname">
                    <br>
                    <label for="email">Correo:</label>
                    <input type="text" name="subject" id="INPemail">
                    <br>
                @endauth
                <label for="content">Contenido:</label>
                <br>
                <textarea name="text" id="content" cols="30" rows="10"></textarea>
                <br>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
@endsection
