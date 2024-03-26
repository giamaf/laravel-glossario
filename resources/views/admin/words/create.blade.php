@extends('layouts.app')

@section('title', 'Word')

@section('content')

    {{-- Intestazione pagina --}}
    <header>
        <h1>Inserisci un nuovo termine</h1>
    </header>
    <hr>

    {{-- Form --}}
    @include('layouts.includes.form')

@endsection
