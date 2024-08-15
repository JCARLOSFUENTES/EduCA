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
    <!-- Sección de cursos recomendados con scroll horizontal -->
    <section id="cursos-recomendados" class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Cursos Recomendados</h2>
        <div class="flex space-x-6 overflow-x-auto scrollbar-hide py-4">
            @foreach($courses as $course)
                <div class="bg-gray-100 min-w-[300px] flex-shrink-0 p-6 rounded-lg border-2 border-black hover:shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                    <img class="w-full h-48 object-cover rounded border-2 border-black" src="{{ $course->image_url ?? 'https://via.placeholder.com/400x200' }}" alt="{{ $course->name }}">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">{{ $course->name }}</h3>
                    <p class="text-gray-600 mt-2">{{ $course->description }}</p>
                    <a href="{{ route('course.index', $course->slug) }}" class="inline-block mt-4 px-4 py-2 button-primary">Ver Curso</a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Sección de nuevos cursos -->
    {{-- <section id="nuevos-cursos" class="container mx-auto px-6 mt-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Nuevos Cursos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($featuredCourses as $course)
                <div class="bg-gray-100 p-6 rounded-lg border-2 border-black hover:shadow-[8px_8px_0px_rgba(0,0,0,1)]">
                    <img class="w-full h-48 object-cover rounded border-2 border-black" src="{{ $course->image_url ?? 'https://via.placeholder.com/400x200' }}" alt="{{ $course->name }}">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">{{ $course->name }}</h3>
                    <p class="text-gray-600 mt-2">{{ $course->description }}</p>
                    <a href="{{ route('courses.show', $course->slug) }}" class="inline-block mt-4 px-4 py-2 button-primary">Ver Curso</a>
                </div>
            @endforeach
        </div>
    </section> --}}
</main>
@endsection
