@extends('layouts.app')

@section('title', 'EduCA - Registro')

@section('content')
    <div class="flex flex-col justify-center sm:h-screen p-4">
        <div class="max-w-md w-full mx-auto rounded-2xl p-8 shadow-lg border border-slate-300">
            <div class="text-center mb-12">
                <a href="{{route('welcome')}}">
                    <x-logo></x-logo>
                </a>
            </div>

            <form action="{{route('register.store')}}" method="POST" novalidate>
                @csrf
                @method('POST')
                <div class="space-y-3">

                    <div>
                        <label for="name" class="text-gray-800 text-sm mb-2 block font-semibold">Nombre</label>
                        <input id="name" name="name" type="text" class="form-inputs @error('name') border-red-500 @enderror" placeholder="Juan Carlos Rodriguez" value="{{old('name')}}"/>
                        @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{$message}}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="username" class="text-gray-800 text-sm mb-2 block font-semibold">Usuario</label>
                        <input id="username" name="username" type="text" class="form-inputs @error('username') border-red-500 @enderror" placeholder="@JuanCa" value="{{old('username')}}"/>
                        @error('username')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

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

                    <div>
                        <label for="password_confirmation" class="text-gray-800 text-sm mb-2 block font-semibold">Repetir Contraseña</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-inputs @error('password_confirmation') border-red-500 @enderror" placeholder="*******" />
                        @error('password_confirmation')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="!mt-12">
                        <input type="submit" value="Crear Cuenta" class="form-button">
                        </input>
                    </div>

                    <p class="text-gray-800 text-sm mt-6 text-center">Ya tienes una cuenta <a href="#" class="text-secondary font-semibold hover:underline ml-1">Inicia Sesión aquí</a></p>

                </div>

            </form>
        </div>
    </div>
@endsection
