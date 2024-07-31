<nav class="w-full h-16 hidden bg-white lg:flex p-4 justify-between items-center border-b shadow-md ">

    <div class="h-auto w-auto">
        <x-logo></x-logo>
    </div>

    <div class="flex items-center justify-around w-50 space-x-4">
        <a class="Primary-Button" href="{{route('login.index')}}">Iniciar Sesión</a>
        <a class="Primary-Button" href="{{route('register.index')}}">Registrarse</a>
    </div>

</nav>
