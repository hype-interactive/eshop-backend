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
            @if(session('message_sucess'))

                <div class="flex items-start max-sm:flex-col bg-green-100 text-green-800 p-4 rounded-lg relative" role="alert">
                  <div class="flex items-center max-sm:mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] fill-green-500 inline mr-3" viewBox="0 0 512 512">
                      <ellipse cx="256" cy="256" fill="#32bea6" data-original="#32bea6" rx="256" ry="255.832" />
                      <path fill="#fff" d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                        data-original="#ffffff" />
                    </svg>
                    <strong class="font-bold text-sm">Success!</strong>
                  </div>

                  <span class="block sm:inline text-sm ml-4 mr-8 max-sm:ml-0 max-sm:mt-2">{{ session('message_sucess') }}</span>

                  <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-7 hover:bg-green-200 rounded-lg transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">
                    <path
                      d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                      data-original="#000000" />
                    <path
                      d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                      data-original="#000000" />
                  </svg>
                </div>

            @endif

            @if(session('message_fail'))

            <div class="flex items-start max-sm:flex-col bg-yellow-100 text-yellow-800 p-4 rounded-lg relative" role="alert">
                <div class="flex items-center max-sm:mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] fill-yellow-500 inline mr-3" viewBox="0 0 128 128">
                    <path
                      d="M56.463 14.337 6.9 106.644C4.1 111.861 8.173 118 14.437 118h99.126c6.264 0 10.338-6.139 7.537-11.356L71.537 14.337c-3.106-5.783-11.968-5.783-15.074 0z"
                      data-original="#fad271" />
                    <g fill="#fff">
                      <path
                        d="M64 31.726a5.418 5.418 0 0 0-5.5 5.45l1.017 44.289A4.422 4.422 0 0 0 64 85.726a4.422 4.422 0 0 0 4.482-4.261L69.5 37.176a5.418 5.418 0 0 0-5.5-5.45z"
                        data-original="#fff" />
                      <circle cx="64" cy="100.222" r="6" data-original="#fff" />
                    </g>
                  </svg>
                  <strong class="font-bold text-sm">Warning!</strong>
                </div>

                <span class="block sm:inline text-sm ml-4 mr-8 max-sm:ml-0 max-sm:mt-2"> {{ session('message_fail') }}</span>

                <svg xmlns="http://www.w3.org/2000/svg"
                  class="w-7 hover:bg-yellow-200 rounded-lg transition-all p-2 cursor-pointer fill-yellow-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">
                  <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000" />
                  <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000" />
                </svg>
              </div>

            @endif

            <img src="{{ asset('loginSlider/icon.png') }}" class="h-20 w-auto">
            <h1 class="mt-4 text-3xl font-bold tracking-tight  sm:text-5xl" style="color: #F6AE42; "> {{ $status }} Account  </h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we cannot let you in because your account is {{ $status }}.</p>
             <p class=" flex text-center bg-[#F6AE42] rounded-full p-2 justify-center item-center  text-gray-600 text-base" style="color: #10488d; " >reach us  +255678763743/+255678763743   </p>

            <form action=" {{ route('user-feedback') }}" method="POST">
                @csrf

                <div class="mb-4">
                    @error('message')
                        <div class="text-red-500 text-xs">  {{ $message }} </div>
                    @enderror
                    <textarea  name="message" rows="4" class="mt-4 @error('message')
                        border-red-500
                    @else  border-gray-300 @enderror  block w-full border rounded-md shadow-sm focus:ring-gray focus:ring-opacity-75" required></textarea>
                </div>





            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('user-logout') }}"
                    class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    style="background-color: #2759A9; ">Go back home</a>

                    <button
                    class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600"
                    style="background-color: #aaaaaa; ">Message Us  <span
                    aria-hidden="true">&rarr;</span></button>
            </div>

        </form>
        </div>
    </main>


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
