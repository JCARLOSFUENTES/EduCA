@extends('layouts.app')

@section('title', 'EduCA')

@section('content')
<!--
// v0 by Vercel.
// https://v0.dev/t/92PSCpURwI4
-->

<style>:root{--background:0 0% 100%;--foreground:222.2 84% 4.9%;--card:0 0% 100%;--card-foreground:222.2 84% 4.9%;--popover:0 0% 100%;--popover-foreground:222.2 84% 4.9%;--primary:221.2 83.2% 53.3%;--primary-foreground:210 40% 98%;--secondary:210 40% 96.1%;--secondary-foreground:222.2 47.4% 11.2%;--muted:210 40% 96.1%;--muted-foreground:215.4 16.3% 44%;--accent:210 40% 96.1%;--accent-foreground:222.2 47.4% 11.2%;--destructive:0 72% 51%;--destructive-foreground:210 40% 98%;--border:214.3 31.8% 91.4%;--input:214.3 31.8% 91.4%;--ring:221.2 83.2% 53.3%;--chart-1:221.2 83.2% 53.3%;--chart-2:216 92% 60%;--chart-3:212 95% 68%;--chart-4:210 98% 78%;--chart-5:212 97% 87%;--radius:0.5rem;}img[src="/placeholder.svg"],img[src="/placeholder-user.jpg"]{filter:sepia(.3) hue-rotate(-60deg) saturate(.5) opacity(0.8) }</style>
<style>h1, h2, h3, h4, h5, h6 { font-family: 'Inter', sans-serif; --font-sans-serif: 'Inter'; }
</style>
<style>body { font-family: 'Inter', sans-serif; --font-sans-serif: 'Inter'; }
</style>
<div class="flex flex-col min-h-[100dvh]">
  <header class="px-4 lg:px-6 h-14 flex items-center bg-[#f1f5f9]">
    <a class="flex items-center justify-center" href="#" rel="ugc">
      <img src="{{ asset('img/Logo.png') }}" alt="EduCA" class="h-16">
    </a>
    <nav class="ml-auto flex gap-4 sm:gap-6 items-center justify-evenly">
      <a class="text-sm font-medium text-[#0369a1] hover:underline underline-offset-4" href="#" rel="ugc">
        Contacto
      </a>
      <a class="text-sm font-medium text-[#0369a1] hover:underline underline-offset-4" href="#" rel="ugc">
        Sobre nosotros
      </a>
      <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background h-10 px-4 py-2 text-[#0369a1] hover:bg-[#0369a1] hover:text-white">
        Login
      </button>
      <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 bg-[#0369a1] text-white hover:bg-[#0284c7]">
        Register
      </button>
    </nav>
  </header>
  <main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48 bg-[#f1f5f9]">
      <div class="container px-4 md:px-6 mx-auto">
        <img
        src="{{ asset('img/banner.jpg') }}"
        alt="Hero"
        class="mx-auto aspect-video overflow-hidden rounded-xl object-cover sm:w-full lg:order-last lg:aspect-square h-52 mb-8"
      />
        <div class="grid gap-6 lg:grid-cols-[1fr_400px] lg:gap-12 xl:grid-cols-[1fr_600px]">
          <div class="flex flex-col justify-center space-y-4">
            <div class="space-y-2">
              <h1 class="text-3xl font-bold tracking-tighter text-[#0369a1] sm:text-5xl xl:text-6xl/none">
                Nuestro enfoque
              </h1>
              <p class="max-w-[600px] text-[#475569] text-justify">
                Ayudamos a cada estudiante a aprender de la mejor manera para él o ella. La plataforma usa tecnología que "aprende" cómo va cada estudiante y les da recomendaciones sobre qué hacer a continuación. EduCA te da ejercicios según tu nivel, y te permite aprender desde cualquier dispositivo con internet.
              </p>
            </div>
            <div class="flex flex-col gap-2 min-[400px]:flex-row">
              <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 bg-[#0369a1] text-white hover:bg-[#0284c7]">
                Únete
              </button>
              <a
                class="inline-flex h-10 items-center justify-center rounded-md border border-[#0369a1] bg-[#f1f5f9] px-8 text-sm font-medium text-[#0369a1] shadow-sm transition-colors hover:bg-[#e2e8f0] focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#0369a1] disabled:pointer-events-none disabled:opacity-50"
                href="#"
                rel="ugc"
              >
                Más información
              </a>
            </div>
          </div>
          {{-- <img
            src="{{ asset('img/header.jpg') }}"
            width="550"
            height="550"
            alt="Hero"
            class="mx-auto aspect-video overflow-hidden rounded-xl object-cover sm:w-full lg:order-last lg:aspect-square"
          /> --}}
        </div>
      </div>
    </section>
    <section class="w-full py-12 md:py-24 lg:py-32 bg-white">
      <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <div class="inline-block rounded-lg bg-[#e2e8f0] px-3 py-1 text-sm text-[#0369a1]">EduCA</div>
            <h2 class="text-3xl font-bold tracking-tighter text-[#0369a1] sm:text-5xl">Lo que aprenderás</h2>
            <p class="max-w-[900px] text-[#475569] md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                Al usar EduCA, los estudiantes desarrollarán competencias específicas a través de rutas de aprendizaje personalizadas que se adaptan a su nivel y progreso. Accederán a recursos interactivos.
                La plataforma les permitirá fortalecer habilidades clave en diversas materias y mejorar su desempeño académico, todo mientras aprenden de manera flexible y desde cualquier dispositivo con acceso a internet.
            </p>
          </div>
        </div>
        <div class="mx-auto grid max-w-5xl items-center gap-6 py-12 lg:grid-cols-2 lg:gap-12">
            <img src="{{ asset('img/landing.jpg') }}" alt="" class="rounded shadow-sm shadow-gray-400">
          <div class="flex flex-col justify-center space-y-4">
            <ul class="grid gap-6">
              <li>
                <div class="grid gap-1">
                  <h3 class="text-xl font-bold text-[#0369a1]">Español</h3>
                  <p class="text-[#475569]">
                    Comprensión lectora, redacción de textos, gramática y ortografía, habilidades de expresión oral y escrita, argumentos sólidos. Signos de puntuación, formación de y ampliación del vocabulario.
                  </p>
                </div>
              </li>
              <li>
                <div class="grid gap-1">
                  <h3 class="text-xl font-bold text-[#0369a1]">Arte</h3>
                  <p class="text-[#475569]">
                    Historia del arte, apreciación artística, técnicas de dibujo y pintura. Conceptos de composición, color, y formas de expresión artística.
                  </p>
                </div>
              </li>
              <li>
                <div class="grid gap-1">
                  <h3 class="text-xl font-bold text-[#0369a1]">Tecnología</h3>
                  <p class="text-[#475569]">
                    Fundamentos de informática, programación básica, y el uso de software y herramientas digitales. Conceptos de redes, hardware, y habilidades tecnológicas.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="w-full py-12 md:py-24 lg:py-32 bg-[#f1f5f9]">
      <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
        <div class="space-y-2">
          <h2 class="text-3xl font-bold tracking-tighter text-[#0369a1] md:text-4xl/tight">
            Beneficios
          </h2>
          <p class="max-w-[600px] text-[#475569] md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
            Personalización del aprendizaje, acceso flexible, contenido alineado al Currículo Nacional Mexicano, experiencia interactiva, evaluaciones en tiempo real y recomendaciones personalizadas.
          </p>
        </div>
        <div class="flex flex-col gap-2 min-[400px]:flex-row lg:justify-end">
          <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 bg-[#0369a1] text-white hover:bg-[#0284c7]">
            Únete
          </button>
          <a
            class="inline-flex h-10 items-center justify-center rounded-md border border-[#0369a1] bg-[#f1f5f9] px-8 text-sm font-medium text-[#0369a1] shadow-sm transition-colors hover:bg-[#e2e8f0] focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#0369a1] disabled:pointer-events-none disabled:opacity-50"
            href="#"
            rel="ugc"
          >
            Más información
          </a>
        </div>
      </div>
    </section>
  </main>
  <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t bg-[#f1f5f9]">
    <p class="text-xs text-[#475569]">© 2024 Web App Course. All rights reserved.</p>
    <nav class="sm:ml-auto flex gap-4 sm:gap-6">
      <a class="text-xs text-[#0369a1] hover:underline underline-offset-4" href="#" rel="ugc">
        Terms of Service
      </a>
      <a class="text-xs text-[#0369a1] hover:underline underline-offset-4" href="#" rel="ugc">
        Privacy
      </a>
    </nav>
  </footer>
</div>
@endsection
