<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-background">

        @guest
            <x-guest-nav-bar></x-guest-nav-bar>
        @endguest


        <x-auth-nav-bar></x-auth-nav-bar>

        @yield('content')

    </body>
</html>
