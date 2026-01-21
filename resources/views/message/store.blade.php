@extends('layout.layout')

@section('title', 'STORE')

@section('content')

    <h3>Se ha guardado correctamente el mensaje {{$message['name']}}</h3>

    @foreach ($message as $key => $value)
        <h3>{{$key}} : {{$value}}</h3>
    @endforeach



@endsection
