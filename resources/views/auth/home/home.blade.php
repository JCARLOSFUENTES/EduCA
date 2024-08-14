@extends('layouts.app-with-navbar')

@section('title', 'EduCA - Home')

@section('content')
<header class="relative bg-home bg-cover bg-center h-screen flex items-center justify-center">
    <div class="absolute inset-0 bg-white bg-opacity-50"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-5xl font-bold text-gray-800">
            Bienvenido a EduCA
        </h1>
        <p class="text-lg mt-4 text-gray-800 max-w-2xl mx-auto">
            Plataforma educativa para aprender, crecer y alcanzar tus metas.
        </p>
        <a href="#cursos-recomendados" class="inline-block mt-6 px-8 py-4 button-primary">
            Explora Cursos
        </a>
    </div>
</header>

<main class="bg-white py-12">
    <!-- Sección de cursos recomendados -->
    <section id="cursos-recomendados" class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Cursos Recomendados</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Curso 1 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/400x200" alt="Curso 1">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Curso de Programación Web</h3>
                <p class="text-gray-600 mt-2">Aprende las bases del desarrollo web con HTML, CSS y JavaScript.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Ver Curso</a>
            </div>
            <!-- Curso 2 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/400x200" alt="Curso 2">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Introducción a Python</h3>
                <p class="text-gray-600 mt-2">Domina los conceptos básicos de Python y empieza a programar.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Ver Curso</a>
            </div>
            <!-- Curso 3 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/400x200" alt="Curso 3">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Diseño Gráfico para Principiantes</h3>
                <p class="text-gray-600 mt-2">Inicia tu carrera en diseño gráfico aprendiendo las herramientas esenciales.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Ver Curso</a>
            </div>
        </div>
    </section>

    <!-- Sección de nuevos cursos -->
    <section id="nuevos-cursos" class="container mx-auto px-6 mt-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Nuevos Cursos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Curso 4 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg border-2 border-black hover:shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/400x200" alt="Curso 4">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Marketing Digital Avanzado</h3>
                <p class="text-gray-600 mt-2">Explora estrategias avanzadas de marketing digital para hacer crecer tu negocio.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Ver Curso</a>
            </div>
            <!-- Curso 5 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/400x200" alt="Curso 5">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Desarrollo de Apps con React Native</h3>
                <p class="text-gray-600 mt-2">Aprende a crear aplicaciones móviles nativas con React Native.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Ver Curso</a>
            </div>
            <!-- Curso 6 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/400x200" alt="Curso 6">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Análisis de Datos con SQL</h3>
                <p class="text-gray-600 mt-2">Conviértete en un experto en análisis de datos usando SQL.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Ver Curso</a>
            </div>
        </div>
    </section>
</main>
@endsection

