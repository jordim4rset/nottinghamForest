@extends('layout.layout')

@section('title', 'Cuenta')

@section('content')

    <main>
        @if ($user)
            <h2>{{ $user->username }}</h2>
            <h3>{{ $user->rol }}</h3>
        @endif
    </main>

@endsection
