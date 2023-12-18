<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ollama</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen min-w-min bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="w-full sm:4/6 lg:3/6 sm:w-5/6 lg:w-4/6 xl:w-3/6 mx-auto p-12 min-h-screen">

               @include("prompt.top")

                <div class="mt-16">

                                @include('prompt.form')
                                @include('prompt.spinner')

                                @if(isset($response))
                                    @include('prompt.response')
                                @endif

                    </div>

                @if(isset($errorMessage))
                    @include('prompt.error')
                @endif

                @include('prompt.footer')
            </div>
        </div>
    </body>
</html>
