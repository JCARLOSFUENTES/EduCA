@extends('layouts.app-with-navbar')
@section('title', 'EduCA - ' . $course->name)

@section('content')



<main class="flex min-h-screen bg-gray-100">
    <div class="w-full min-h-screen flex items-center justify-center relative bg-gradient-to-br from-blue-500 to-green-500">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>

        <div class="w-full max-w-2xl h-auto p-6 bg-white rounded-lg shadow-md z-10 border-2 border-black overflow-hidden">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $course->name }}</h1>
            <p class="text-gray-800 mb-4">{{ $course->description }}</p>
            <p class="text-gray-800 mb-4">Categoría: {{ $course->category->name }}</p>

            <h2 class="text-2xl font-bold text-gray-800 mb-4">Lecciones</h2>
            <ul class="list-disc pl-5">
                @foreach($course->lessons as $lesson)
                    <li class="text-gray-800 mb-2">
                        <strong>{{ $lesson->title }}</strong> -
                        <a href="{{ $lesson->content }}" target="_blank" class="text-blue-500 underline">Ver Video</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>

@endsection
