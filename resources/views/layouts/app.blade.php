<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('assets/color.css') }}" rel="style"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

  <body class="font-sans antialiased relative">

<livewire:back-end.side-bar />

<!-- Page Content -->
<div class="ml-60  bg-gray-100  ">

@livewire('navigation-menu')
<div class=" bg-gray-50">
    {{-- <div class=" px-2 py-3 bg-gray-50"> --}}

{{ $slot }}
</div>
</div>

@stack('modals')

        @livewireScripts
    </body>
</html>
