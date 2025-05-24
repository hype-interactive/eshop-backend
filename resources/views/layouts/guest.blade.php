<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-Shop') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        .form-container {
            background-color: #f9fafb;
        }
        
        .image-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(28, 112, 205, 0.8), rgba(28, 112, 205, 0.2), transparent);
            z-index: 1;
        }
        
        .content-area {
            z-index: 10;
            position: relative;
        }
        
        @media (max-width: 768px) {
            .mobile-bg {
                background-image: linear-gradient(to bottom, rgba(28, 112, 205, 0.9), rgba(28, 112, 205, 0.7)), url('{{ asset('social/login.png') }}');
                background-size: cover;
                background-position: center;
            }
        }
    </style>
</head>
<body class="antialiased font-sans text-gray-900">
    <div class="min-h-screen md:flex ">

     <!-- Right side: Image area with overlay -->
     <div class="relative w-full md:w-1/2 p-n4 hidden md:block image-overlay">
            <img src="{{ asset('social/login.png') }}" alt="E-Shop Background" class=" w-full object-cover">
            
            <!-- Content overlay -->
            <div class="absolute inset-0 flex flex-col justify-between p-8 z-10">
                <!-- Top section with logo -->
                <div>
                    <img src="{{ asset('/loginSlider/eshop-icon.png') }}" alt="Logo" class="h-10">
                </div>
                
                <!-- Middle section with text -->
                <div class="max-w-md">
                    <h2 class="text-4xl font-bold text-white mb-4">Grow Your Business with E-Shop</h2>
                    <p class="text-xl text-white opacity-90">Join thousands of vendors who are expanding their reach and increasing their sales.</p>
                </div>
                
                <!-- Bottom section with features -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-4">
                        <div class="text-white font-semibold mb-1">Expand Your Reach</div>
                        <div class="text-white text-sm opacity-90">Connect with customers across Tanzania</div>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-4">
                        <div class="text-white font-semibold mb-1">Secure Payments</div>
                        <div class="text-white text-sm opacity-90">Get paid quickly and reliably</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Left side: Form area -->
        <div class="form-container w-full bg-white md:w-1/2  flex flex-col">
            <!-- Mobile header with logo (visible only on mobile) -->
            <div class="md:hidden bg-[#1C70CD] p-4 flex items-center">
                <img src="{{ asset('/loginSlider/eshop-icon.png') }}" alt="Logo" class="h-10">
                <span class="ml-3 text-white font-bold text-xl">E-Shop</span>
            </div>
            
            <!-- Main content area with scrolling -->
            <div class="flex-1 bg-white  overflow-y-auto py-6 px-4 sm:px-6 lg:px-8 content-area">
                <div class="w-full max-w-md mx-auto">
                    {{ $slot }}
                </div>
            </div>
            
            <!-- Footer -->
            
        </div>

       


        
    </div>
</body>
</html>