<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" type="image/svg+xml" href="/assets/logo.png" /> --}}
  <link rel="icon" type="image/svg+xml" href="storage/system/logo.png" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="h-screen md:grid grid-cols-2">
    <div class="relative w-full bg-black hidden md:block">
        <img src="{{ asset('social/login.png') }}" alt="" class="h-screen w-full object-cover">

        <!-- Gradient overlay only on the left side -->
        <div class="absolute inset-y-0 left-0 w-1/3 bg-gradient-to-r from-blue-600 to-transparent opacity-75"></div>

        <div class="z-20 absolute top-5 left-5">
            <img src="{{ asset('/loginSlider/eshop-icon.png') }}" alt="Logo" class="h-14">
        </div>
    </div>
    <div class="h-screen flex flex-col justify-between bg-[url('{{ asset('social/login.png') }}')] md:bg-none bg-cover bg-no-repeat w-full">
        <div>
            {{ $slot }}
        </div>

    </div>
</body>


</html>
