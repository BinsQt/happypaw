<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HappyPaws') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500;900&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-serif text-gray-600 antialiased bg-gray-100">
        <div class="border bg-blue-700 w-full h-20 px-3 md:px-24">

            @if (Route::has('login'))
                <div class="text-xl text-gray-300 float-right mt-6">
                    
                    <div>
                        @auth
                        <a href="{{ url('/dashboard') }}" class="border ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="mx-1 md:mx-2    
                            {{ request()->is('login') ? 'text-gray-300':'' }}
                            {{ request()->is('login') ? 'font-bold':'' }}
                            {{ request()->is('login') ? 'underline':'' }}">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mx-1 md:mx-2 transition ease-linear 
                            {{ request()->is('register') ? 'text-gray-300':'' }}
                            {{ request()->is('register') ? 'font-bold':'' }}
                            {{ request()->is('register') ? 'underline':'' }}">
                            Signup
                        </a>
                        @endif
                    @endauth
                    </div>
                </div>
            @endif
        </div>


        <div class="border rounded-sm w-10/12 md:w-1/2 m-auto flex flex-col md:flex-row items-center justify-evenly mt-5 p-3 bg-gray-50 shadow-md">
            <div class="w-44 h-44 md:w-80 md:h-80">
                <a href="/" class="cursor-auto">
                    <x-application-logo class="fill-current" />
                </a>
            </div>

            <div class="px-6 py-4 bg-blue-600 shadow-md rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
