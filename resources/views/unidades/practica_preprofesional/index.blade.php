@extends('layouts.home')

@section('content')
<div class="bg-gradient-to-r from-blue-900 to-orange-500 min-h-screen flex flex-col items-center justify-center text-white">
  <!-- Encabezado -->
  <h1 class="text-5xl font-bold mb-6">Unidad de Práctica Preprofesional</h1>
  
  <!-- Descripción -->
  <p class="text-lg text-center max-w-2xl mb-10">
    Bienvenido a la Unidad de Práctica Preprofesional de nuestra universidad. Aquí encontrarás las herramientas y recursos necesarios para comenzar tu carrera profesional a través de la práctica en empresas y organizaciones reconocidas.
  </p>

  <!-- Tarjetas de Servicios -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">
    
    <!-- Card 1 -->
    <div class="bg-white text-blue-900 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
      <h2 class="text-2xl font-semibold mb-4">Oportunidades de Prácticas</h2>
      <p>
        Conoce las oportunidades de prácticas disponibles en empresas líderes del sector. Da el primer paso en tu carrera profesional.
      </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white text-blue-900 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
      <h2 class="text-2xl font-semibold mb-4">Asesoría Profesional</h2>
      <p>
        Recibe orientación de nuestros asesores especializados para optimizar tu búsqueda de prácticas y mejorar tu perfil profesional.
      </p>
    </div>

    <!-- Card 3 -->
    <div class="bg-white text-blue-900 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
      <h2 class="text-2xl font-semibold mb-4">Convenios Internacionales</h2>
      <p>
        Participa en programas internacionales y adquiere experiencia global en empresas de renombre fuera del país.
      </p>
    </div>
  </div>

  <!-- Botón de más información -->
  <div class="mt-10">
    <a href="#more-info" class="bg-white text-blue-900 px-8 py-3 rounded-full shadow-lg font-bold transform hover:scale-105 transition-transform duration-300">
      Más información
    </a>
  </div>
</div>


@endsection