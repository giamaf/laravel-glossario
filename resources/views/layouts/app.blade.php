<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme='dark'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Glossario') }} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/logo.png') }}">

    <style>
        body {
            visibility: hidden;
        }
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        {{-- Navbar --}}
        @include('layouts.includes.navbar')

        {{-- Main --}}
        <main class="container">

            {{-- ! Alert  --}}
            @include('layouts.includes.alert')

            {{-- ! Modal --}}
            @include('layouts.includes.modal')

            @yield('content')
        </main>
    </div>

    {{-- Scripts --}}
    @yield('scripts')
</body>

</html>
