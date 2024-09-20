@extends('layouts.app')

@section('title', 'EduCA - Home')

@section('content')
    <!--
        // v0 by Vercel.
        // https://v0.dev/t/APGOLLZaDFk
        -->

    <style>
        :root {
            --background: 210 100% 97%;
            --foreground: 339 20% 20%;
            --primary: 308 56% 85%;
            --primary-foreground: 210 22% 22%;
            --secondary: 196 75% 88%;
            --secondary-foreground: 210 22% 22%;
            --accent: 211 86% 70%;
            --accent-foreground: 210 22% 22%;
            --destructive: 0 93% 73%;
            --destructive-foreground: 210 22% 22%;
            --muted: 210 100% 95%;
            --muted-foreground: 210 22% 22%;
            --card: 210 100% 97%;
            --card-foreground: 210 22% 22%;
            --popover: 0 0% 100%;
            --popover-foreground: 341 20% 22%;
            --border: 210 40% 80%;
            --input: 210 40% 56%;
            --ring: 210 40% 60%;
            --chart-1: 308 56% 85%;
            --chart-2: 211 96% 70%;
            --chart-3: 45 100% 80%;
            --chart-4: 180 60% 85%;
            --chart-5: 120 50% 80%;
            --radius: 1rem;
        }
    </style>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Manrope', sans-serif;
            --font-sans-serif: 'Manrope';
        }
    </style>
    <style>
        body {
            font-family: 'Manrope', sans-serif;
            --font-sans-serif: 'Manrope';
        }
    </style>

    <div class="flex flex-col min-h-screen bg-[#f5f5f5]">
        <header class="sticky top-0 z-20 bg-white shadow-md">
            <div class="container mx-auto px-4 py-4 flex items-center justify-between">
                <div class="flex items-center gap-4"><a class="text-2xl font-bold text-[#4a4a4a]" href="#">
                    <img class="w-32 h-10 mr-2 inline-block " src="{{ asset('img/Logo.png') }}" alt="EduCA">
                    <nav class="hidden md:flex items-center gap-6">
                        <a class="text-[#4a4a4a] hover:text-[#7c7c7c]"
                            href="#">
                            Cursos
                        </a>
                        <a class="text-[#4a4a4a] hover:text-[#7c7c7c]"
                            href="#">
                            Sobre nosotros
                        </a>
                        <a class="text-[#4a4a4a] hover:text-[#7c7c7c]"
                            href="#">
                            Contacto
                        </a>
                    </nav>
                </div>
                <div class="flex items-center gap-4"><button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 px-4 py-2 text-[#4a4a4a] hover:bg-[#f5f5f5]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5 mr-2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>Search</button>
                        <a href="{{route('profile.index', auth()->user())}}"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 bg-[#4a4a4a] text-white hover:bg-[#7c7c7c]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5 mr-2">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>Perfil</a></div>
            </div>
        </header>
        <main class="flex-1 py-8">
            <div class="container mx-auto px-4">
                <section class="mb-12">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-[#4a4a4a]">Recommended for You</h2><a
                            class="text-[#4a4a4a] hover:text-[#7c7c7c]" href="#">View All<svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 ml-2 inline-block">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                        @foreach ($courses as $course)
                            <div class="border text-card-foreground bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105"
                                data-v0-t="card">
                                <img src="{{ $course->image_url ?? 'https://via.placeholder.com/400x200' }}" width="400" height="225" alt="{{$course->name}}"
                                    class="w-full h-40 object-cover" style="aspect-ratio:400/225;object-fit:cover" />
                                <div class="p-4">
                                    <h3 class="text-xl font-bold text-[#4a4a4a] mb-2">
                                        {{$course->name}}
                                    </h3>
                                    <p class="text-[#7c7c7c] line-clamp-2">
                                        {{Str::substr($course->description, 0, 28)}}...
                                    </p>
                                </div>
                            </div>
                        @endforeach

                </section>
                <section class="mb-12">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-[#4a4a4a]">Most Watched</h2><a
                            class="text-[#4a4a4a] hover:text-[#7c7c7c]" href="#">View All<svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 ml-2 inline-block">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                    <div aria-roledescription="carousel" class="relative w-full" role="region">
                        <div aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4" role="group">
                            <div class="border text-card-foreground bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105"
                                data-v0-t="card"><img src="/placeholder.svg" width="400" height="225"
                                    alt="Course 1" class="w-full h-40 object-cover"
                                    style="aspect-ratio:400/225;object-fit:cover" />
                                <div class="p-4">
                                    <h3 class="text-xl font-bold text-[#4a4a4a] mb-2">Course <!-- -->1<!-- -->: Advanced
                                        Data Structures</h3>
                                    <p class="text-[#7c7c7c] line-clamp-2">Dive deep into the world of data structures and
                                        algorithms.</p>
                                </div>
                            </div>
                        </div>
                        <div aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4" role="group">
                            <div class="border text-card-foreground bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105"
                                data-v0-t="card"><img src="/placeholder.svg" width="400" height="225"
                                    alt="Course 2" class="w-full h-40 object-cover"
                                    style="aspect-ratio:400/225;object-fit:cover" />
                                <div class="p-4">
                                    <h3 class="text-xl font-bold text-[#4a4a4a] mb-2">Course <!-- -->2<!-- -->: Advanced
                                        Data Structures</h3>
                                    <p class="text-[#7c7c7c] line-clamp-2">Dive deep into the world of data structures and
                                        algorithms.</p>
                                </div>
                            </div>
                        </div>
                        <div aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4" role="group">
                            <div class="border text-card-foreground bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105"
                                data-v0-t="card"><img src="/placeholder.svg" width="400" height="225"
                                    alt="Course 3" class="w-full h-40 object-cover"
                                    style="aspect-ratio:400/225;object-fit:cover" />
                                <div class="p-4">
                                    <h3 class="text-xl font-bold text-[#4a4a4a] mb-2">Course <!-- -->3<!-- -->: Advanced
                                        Data Structures</h3>
                                    <p class="text-[#7c7c7c] line-clamp-2">Dive deep into the world of data structures and
                                        algorithms.</p>
                                </div>
                            </div>
                        </div>
                        <div aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4" role="group">
                            <div class="border text-card-foreground bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105"
                                data-v0-t="card"><img src="/placeholder.svg" width="400" height="225"
                                    alt="Course 4" class="w-full h-40 object-cover"
                                    style="aspect-ratio:400/225;object-fit:cover" />
                                <div class="p-4">
                                    <h3 class="text-xl font-bold text-[#4a4a4a] mb-2">Course <!-- -->4<!-- -->: Advanced
                                        Data Structures</h3>
                                    <p class="text-[#7c7c7c] line-clamp-2">Dive deep into the world of data structures and
                                        algorithms.</p>
                                </div>
                            </div>
                        </div>
                        <div aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4" role="group">
                            <div class="border text-card-foreground bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105"
                                data-v0-t="card"><img src="/placeholder.svg" width="400" height="225"
                                    alt="Course 5" class="w-full h-40 object-cover"
                                    style="aspect-ratio:400/225;object-fit:cover" />
                                <div class="p-4">
                                    <h3 class="text-xl font-bold text-[#4a4a4a] mb-2">Course <!-- -->5<!-- -->: Advanced
                                        Data Structures</h3>
                                    <p class="text-[#7c7c7c] line-clamp-2">Dive deep into the world of data structures and
                                        algorithms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer class="bg-[#4a4a4a] text-white py-6">
            <div class="container mx-auto px-4 flex items-center justify-between">
                <div class="flex items-center gap-4"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg><span class="text-lg font-bold">Educa</span></div>
                <nav class="hidden md:flex items-center gap-6"><a class="text-white hover:text-[#f5f5f5]"
                        href="#">Courses</a><a class="text-white hover:text-[#f5f5f5]"
                        href="#">Instructors</a><a class="text-white hover:text-[#f5f5f5]"
                        href="#">About</a><a class="text-white hover:text-[#f5f5f5]" href="#">Contact</a>
                </nav>
                <p class="text-sm">© 2024 Educa. All rights reserved.</p>
            </div>
        </footer>
    </div>
@endsection
