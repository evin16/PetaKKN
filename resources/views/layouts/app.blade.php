<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-primary-textdark ">



            @include('layouts.navigation')

            <!-- Page Heading -->
            <header >
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-[870px] font-inter">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class=" relative z-10 font-inter">
                {{ $slot }}
            </main>


        </div>
    </body>

</html>
