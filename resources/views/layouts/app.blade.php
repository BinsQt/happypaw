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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script type="text/javascript">
            var auto_refresh = setInterval(
                function () {
                    $('#load_content').load('/likes').fadeIn("fast");
                }, 5000);

                var auto_refresh = setInterval(
                function () {
                    $('#load_content1').load('/temp').fadeIn("fast");
                }, 5000);

                var auto_refresh = setInterval(
                function () {
                    $('#load_content4').load('/normals').fadeIn("fast");
                }, 5000);

                var auto_refresh = setInterval(
                function () {
                    $('#load_content3').load('/move').fadeIn("fast");
                }, 5000);
            </script>


    </head>
    <body class="font-sansserif antialiased" x-cloak x-data="{openModal: false}"
    :class="openModal ? 'overflow-hidden' : 'overflow-visible'">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-blue-600 shadow ">
                    <div class="max-w-7xl mx-auto py-3 px-4 ">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


            {{-- bottom-navbar --}}
        @include('layouts.bottom-nav')
        </div>
    </body>
</html>
