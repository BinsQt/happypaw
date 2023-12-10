<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Happy Paws</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500;900&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-serif text-gray-600 bg-gray-100">
        <div class="border bg-blue-700 w-full h-20 px-5 md:px-24">

            @if (Route::has('login'))
                <div class="text-xl text-gray-300 float-right mt-5">

                    <div>
                        @auth
                        <a href="{{ url('/dashboard') }}" class="border">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 ">Register</a>
                        @endif
                    @endauth
                    </div>
                </div>
            @endif
        </div>
        <div class="pt-10">
            <div class="w-60 h-60 md:w-96 md:h-96 m-auto">
                <a href="/" class="cursor-auto">
                    <x-application-logo class="fill-current" />
                </a>
                <div class="w-full text-center mt-10">
                    <p><span class="text-gray-600 font-mono">"Quotes"</span></p>
                </div>
            </div>
        </div>
    </body>
</html>
