@auth
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Sección de inicio -->
        <div class="text-white">
            <a href="{{ route('home.index') }}" class="text-lg font-semibold">Inicio</a>
        </div>

        <!-- Sección de perfil y cerrar sesión -->
        <div class="flex items-center space-x-4">
            <!-- Nombre del usuario -->
                <div class="text-white">
                    {{ $user->username }}
                </div>

                <!-- Cerrar sesión -->
                <form method="POST" action="{{route('logout.store')}}">
                    @csrf
                    @method('POST')
                    <button type="submit" class="text-white hover:bg-gray-700 p-2 rounded">Cerrar sesión</button>
                </form>
        </div>
    </div>
</nav>

@endauth
