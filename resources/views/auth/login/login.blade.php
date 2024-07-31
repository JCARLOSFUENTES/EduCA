@extends('layouts.app')

@section('title', 'EduCA - Iniciar Sesión')

@section('content')
<div class="flex flex-col justify-center sm:h-screen p-4">
    <div class="max-w-md w-full mx-auto rounded-2xl p-8 shadow-lg border border-slate-300">
        <div class="text-center mb-12">
            <a href="{{route('welcome')}}">
                <x-logo></x-logo>
            </a>
        </div>

        <form method="POST" action="{{route('login.store')}}" novalidate>
            @csrf
            @method('POST')
            <div class="space-y-3">

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
                @endif


                <div>
                    <label for="email" class="text-gray-800 text-sm mb-2 block font-semibold">Correo Electronico</label>
                    <input id="email" name="email" type="email" class="form-inputs @error('email') border-red-500 @enderror" placeholder="juca@example.com" value="{{old('email')}}"/>
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="text-gray-800 text-sm mb-2 block font-semibold">Contraseña</label>
                    <input id="password" name="password" type="password" class="form-inputs @error('password') border-red-500 @enderror" placeholder="*******" />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="!mt-12">
                    <input type="submit" value="Iniciar Sesión" class="form-button">
                    </input>
                </div>

                <p class="text-gray-800 text-sm mt-6 text-center">No tienes cuenta? <a href="{{route('register.index')}}" class="text-secondary font-semibold hover:underline ml-1">Registrate aquí</a></p>

            </div>

        </form>
    </div>
</div>
@endsection
