@auth

    <nav class="hidden w-full md:flex items-center justify-between p-4 border-b-2 border-black fixed bg-background">
        <a href="{{ route('welcome') }}" class="text-4xl font-bold text-gray-800">EduCA</a>

        <div>
            <ul class="flex space-x-6">
                <li>
                    <a href="{{route('home.index')}}" class="button-navbar">Inicio</a>
                </li>
                <li>
                    <a href="#" class="button-navbar">Rutas</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center space-x-6">
            <a href="{{route('profile.index', auth()->user()->username)}}" class="text-lg text-gray-800 underline">{{ auth()->user()->username }}</a>

            <form action="{{ route('logout.store') }}" method="POST" class="inline">
                @csrf
                @method('POST')
                <input type="submit" value="Cerrar Sesión" class="button-primary">
            </form>
        </div>
    </nav>

@endauth
