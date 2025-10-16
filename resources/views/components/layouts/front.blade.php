@props([
    'title' => null
])

<!doctype html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="lofi2">
    <head>
        <meta charset="UTF-8"/>
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />

        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{{ __($title) }}</title>

        @vite('resources/js/app.js')

        <link rel="stylesheet" href="{{ asset('font/front.css') }}" />

        @vite('resources/css/front.css')
        @livewireStyles
    </head>
    <body class="h-full font-sans">
        {{ $slot }}

        @stack('scripts')
        @livewireScripts
    </body>
</html>
