@guest

<nav class="w-full flex items-center justify-between p-4 fixed bg-background border-b-2 border-black z-20">

    <div>
        <a href="{{ route('welcome') }}" class="text-3xl font-bold text-gray-800">EduCA</a>
    </div>

    <div class="hidden md:flex space-x-6">
        <a href="{{ route('register.index') }}" class="button-primary">Regístrate</a>
        <a href="{{ route('login.index') }}" class="button-primary">Iniciar Sesión</a>
    </div>

    <!-- Menú móvil -->
    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-gray-800 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

</nav>

<!-- Menú desplegable móvil -->
<div id="mobile-menu" class="hidden md:hidden bg-background border-b-2 border-black">
    <a href="{{ route('register.index') }}" class="block text-gray-800 hover:text-blue-600 p-4 border-t-2 border-gray-300">Regístrate</a>
    <a href="{{ route('login.index') }}" class="block text-gray-800 hover:text-blue-600 p-4 border-t-2 border-gray-300">Iniciar Sesión</a>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

@endguest
