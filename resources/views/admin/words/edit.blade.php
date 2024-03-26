@extends('layouts.app')

@section('title', 'Modifica termine')

@section('content')

    {{-- Intestazione pagina --}}
    <header>
        <h1>Modifica termine</h1>
    </header>
    <hr>

    {{-- Form --}}
    @include('layouts.includes.form')
@endsection
