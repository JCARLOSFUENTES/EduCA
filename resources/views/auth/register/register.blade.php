@extends('layouts.app')
@section('title', 'EduCA - Registro')

@section('content')

<main class="flex min-h-screen bg-gray-100">

    <div class="w-full min-h-screen flex items-center justify-center relative bg-register">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div> <!-- Overlay oscuro -->

        <div class="w-full max-w-md h-auto p-6 bg-background md:rounded-lg shadow-md z-10 md:border-2 md:border-black overflow-hidden">
            <form action="{{route('register.store')}}" method="POST" class="w-full">

                @csrf
                @method('POST')

                <div class="flex justify-between items-center mb-6">
                    <a href="{{route('welcome')}}" class="text-4xl font-bold text-gray-800 text-center">EduCA</a>
                    <a href="{{route('login.index')}}" class="text-gray-800 underline">Iniciar Sesión</a>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-800 text-lg font-medium mb-2">Nombre</label>
                    <input type="text" name="name" id="name" class="!w-full form-inputs" placeholder="John Doe">
                    @error('name')
                        <p class="message-error mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="block text-gray-800 text-lg font-medium mb-2">Usuario</label>
                    <input type="text" name="username" id="username" class="!w-full form-inputs" placeholder="JohnD">
                    @error('username')
                        <p class="message-error mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-800 text-lg font-medium mb-2">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="!w-full form-inputs" placeholder="email@example.com">
                    @error('email')
                        <p class="message-error mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-800 text-lg font-medium mb-2">Contraseña</label>
                    <input type="password" name="password" id="password" class="!w-full form-inputs" placeholder="******">
                    @error('password')
                        <p class="message-error mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-800 text-lg font-medium mb-2">Repetir Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="!w-full form-inputs" placeholder="******">
                    @error('password_confirmation')
                        <p class="message-error mt-2">{{$message}}</p>
                    @enderror
                </div>

                <!-- Selección de categorías -->
                <div class="mb-4">
                    <label for="categories" class="block text-gray-800 text-lg font-medium mb-2">Intereses</label>
                    <div id="categories" class="flex flex-wrap">
                        @foreach($categories as $category)
                            <div class="w-1/2 md:w-1/3 lg:w-1/4 p-2">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-checkbox text-blue-600">
                                    <span class="text-gray-800">{{ $category->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('categories')
                        <p class="message-error mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="Registrarse" class="!w-full button-primary cursor-pointer">
                </div>
            </form>
        </div>
    </div>

</main>

@endsection
