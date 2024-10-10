@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-[#000080] to-[#000080] text-white py-8 flex items-center justify-center">
  <div class="text-center">
    <h1 class="text-4xl font-extrabold">Unidad de Calidad</h1>
  </div>
</section>

  <section id="master-list" class="bg-gray-100">
    <br>
  <p class="text-lg leading-relaxed text-justify mx-auto max-w-7xl">
    La Facultad de Educación de la Universidad Nacional de Trujillo busca asegurar que sus programas académicos cumplan con altos estándares de calidad y respondan a las necesidades del contexto educativo. A través del proceso de estandarización que abarca una autoevaluación y mejora continua, se logrará un entorno que impulse el desarrollo integral de sus estudiantes.
    </p>
    <br>
  <div class="container mx-auto max-w-screen-xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
      @for ($i = 1; $i <= 34; $i++)
        <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
          <h3 class="text-2xl font-semibold mb-4"></h3>
          <h4 class="text-2xl font-semibold mb-4">
            <a href="estándar/{{ $i }}" class="text-blue-600 hover:underline text-3xl">Estándar {{ sprintf('%02d', $i) }}</a>
          </h4>
        </div>
      @endfor
    </div>
  </div>
</section>
@endsection