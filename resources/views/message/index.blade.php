@extends('layout.layout')

@section('title','Mensajes')

@section('content')
    <main>
        <h1 class="titulo">LISTA MENSAJES</h1>

        @forelse ($messages as $message)
            <h3>Nombre:{{$message->name}}</h3>
            <p>Correo:{{$message->subject}}</p>
            <p>Contenido:{{$message->text}}</p>
        @empty
            <h2>NO HAY MENSAJES</h2>
        @endforelse
    </main>
@endsection
