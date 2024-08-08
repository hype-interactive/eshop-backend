<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShops</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>


</head>

<body class="antialiased">

    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            
            <img src="{{ asset('loginSlider/icon.png') }}" class="h-20 w-auto">
            <h1 class="mt-4 text-3xl font-bold tracking-tight  sm:text-5xl" style="color: #F6AE42; "> Inactive Account  </h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we cannot let you in because your account is inactive.</p>

            <div class="mt-10">
                <button class='px-6 py-3 rounded-xl text-gray bg-yellow-900 transition-all hover:bg-yellow-800'> +255678763743</button>
              </div>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    style="background-color: #2759A9; ">Go back home</a>
                <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </main>


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
