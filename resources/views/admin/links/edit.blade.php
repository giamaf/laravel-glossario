@extends('layouts.app')

@section('title', 'Modifica link')

@section('content')

    {{-- Intestazione pagina --}}
    <header>
        <h1>Modifica link</h1>
    </header>
    <hr>

    {{-- Form --}}
    @include('layouts.includes.links.form')
@endsection
