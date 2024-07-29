<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-100">
        @guest
            <x-guest-nav-bar></x-guest-nav-bar>
        @endguest
        {{-- container mx-auto mt-5 --}}

        @yield('content')

        <x-footer></x-footer>
    </body>
</html>
