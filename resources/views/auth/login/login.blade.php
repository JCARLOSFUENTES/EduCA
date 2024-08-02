@extends('layouts.app')

@section('title', 'EduCA - Iniciar Sesión')

@section('content')
    <section class="h-screen flex">

        <div class="grid grid-cols-5 h-full w-full flex-1">

            <div class="col-span-2 bg-login hidden md:block">
                {{-- Background image --}}
            </div>

            <main class="col-span-5 md:col-span-3 bg-background h-full p-10">

                <header class="mb-4 w-full text-center flex justify-between items-center p-6">
                    <a href="{{route('welcome')}}" class="text-4xl font-bold text-gray-800">EduCA</a>
                    <div class="mt-4">
                        <a href="{{route('register.index')}}" class="underline text-gray-800">Registrarse</a>
                    </div>
                </header>

                <form action="{{route('login.store')}}" method="POST" novalidate class="w-full max-w-m p-6">
                    @csrf
                    @method('POST')

                    <h1 class="text-2xl font-extrabold text-gray-900 mb-8">Iniciar Sesión</h1>

                    @if (session('mensaje'))
                        <p class="message-error">{{session('mensaje')}}</p>
                    @endif

                    <div class="mb-6 w-full">
                        <label for="email" class="block text-gray-800 text-lg font-medium mb-2">Correo Electrónico</label>
                        <input type="email" name="email" id="email" placeholder="email@example.com" class="form-inputs !w-full" value="{{old('email')}}">
                        @error('email')
                            <p class="message-error mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-800 text-lg font-medium mb-2">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="********" class="form-inputs !w-full">
                        @error('password')
                            <p class="message-error mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div>
                        <input type="submit" value="Iniciar Sesión" class="button-primary !w-full">
                    </div>
                </form>

            </main>

        </div>

    </section>
@endsection
