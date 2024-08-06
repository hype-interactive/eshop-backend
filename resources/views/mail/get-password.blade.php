
<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>

<div class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="{{ asset('loginSlider/eshop.png') }}" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi {{$user->first_name .' '.$user->middle_name }}</h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            Use the passowrd below to access our system  <span class="font-semibold ">Eshop </span>.
        </p>

        <div class="px-6 py-2 mt-4 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-100 rounded-lg hover:bg-blue-200 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            {{ $user->password2 }}
        </div>

        <p class="mt-8 text-gray-600 dark:text-gray-300">
            Thanks, <br>
            eshop team
        </p>
    </main>


    <footer class="mt-8">
        <p class="text-gray-500 dark:text-gray-400">
            This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400" target="_blank">contact@eshop.com</a>.
        </p>

        <p class="mt-3 text-gray-500 dark:text-gray-400">©2024 eshop . All Rights Reserved.</p>
    </footer>
</div>

    </body>
</html>

