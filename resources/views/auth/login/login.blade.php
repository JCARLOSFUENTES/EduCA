@extends('layouts.app')

@section('title', 'EduCA - Iniciar Sesión')

@section('content')


    <style style="">
        :root {
            --background: 0 0% 100%;
            --foreground: 240 10% 3.9%;
            --card: 0 0% 100%;
            --card-foreground: 240 10% 3.9%;
            --popover: 0 0% 100%;
            --popover-foreground: 240 10% 3.9%;
            --primary: 240 5.9% 10%;
            --primary-foreground: 0 0% 98%;
            --secondary: 240 4.8% 95.9%;
            --secondary-foreground: 240 5.9% 10%;
            --muted: 240 4.8% 95.9%;
            --muted-foreground: 240 3.8% 45%;
            --accent: 240 4.8% 95.9%;
            --accent-foreground: 240 5.9% 10%;
            --destructive: 0 72% 51%;
            --destructive-foreground: 0 0% 98%;
            --border: 240 5.9% 90%;
            --input: 240 5.9% 90%;
            --ring: 240 5.9% 10%;
            --chart-1: 173 58% 39%;
            --chart-2: 12 76% 61%;
            --chart-3: 197 37% 24%;
            --chart-4: 43 74% 66%;
            --chart-5: 27 87% 67%;

            --radius:0.5rem;}img[src="/placeholder.svg"],
            img[src="/placeholder-user.jpg"] {
                filter: sepia(.3) hue-rotate(-60deg) saturate(.5) opacity(0.8)
            }
    </style>

    <style style="">
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Inter', sans-serif;
            --font-sans-serif: 'Inter';
        }
    </style>

    <style style="">
        body {
            font-family: 'Inter', sans-serif;
            --font-sans-serif: 'Inter';
        }
    </style>

    <div class="flex h-screen w-full items-center justify-center bg-gradient-to-br from-[#4b6cb7] to-[#182848]">
        <div class="relative w-full max-w-md overflow-hidden rounded-2xl bg-white p-6 shadow-lg md:p-8">
            <div
                class="absolute -left-20 -top-20 h-48 w-48 animate-float-left rounded-full bg-[#ffa500] opacity-50 blur-3xl">
            </div>
            <div
                class="absolute -right-20 -bottom-20 h-48 w-48 animate-float-right rounded-full bg-[#00d4ff] opacity-50 blur-3xl">
            </div>
            <div class="relative z-10 grid gap-6">
                <div class="flex items-center justify-center">
                    <div class="relative h-12 w-60">
                        <img class="h-28 w-auto object-contain pb-10" src="{{ asset('img/Logo.png') }}" alt="EduCA">
                    </div>
                </div>
                <form action="{{route('login.store')}}" class="grid gap-4" method="POST" novalidate>
                    @csrf
                    @method('POST')
                    <div class="relative">
                        <label
                            class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium text-[#182848]"
                            for="email">
                            Correo Electronico
                        </label>
                        <input
                            class="flex h-10 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 w-full rounded-md border border-[#4b6cb7] bg-transparent px-3 py-2 text-sm text-[#182848] focus:border-[#00d4ff] focus:outline-none focus:ring-1 focus:ring-[#00d4ff]"
                            id="email" placeholder="example@domain.com" type="email" name="email"/>
                        @error('email')
                            <p class="message-error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="relative">
                        <label
                            class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium text-[#182848]"
                            for="password">
                            Contraseña
                        </label>
                        <input
                            class="flex h-10 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 w-full rounded-md border border-[#4b6cb7] bg-transparent px-3 py-2 text-sm text-[#182848] focus:border-[#00d4ff] focus:outline-none focus:ring-1 focus:ring-[#00d4ff] pb-3"
                            id="password" placeholder="••••••••" type="password" name="password"/>
                        @error('password')
                            <p class="message-error">{{$message}}</p>
                        @enderror
                    </div>
                    <button
                        class="whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 py-2 relative flex h-10 w-full items-center justify-center rounded-md bg-[#4b6cb7] px-4 text-sm font-medium text-white transition-colors duration-300 hover:bg-[#00d4ff] focus:outline-none focus:ring-2 focus:ring-[#4b6cb7] focus:ring-offset-2"
                        type="submit">
                        Entrar
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
