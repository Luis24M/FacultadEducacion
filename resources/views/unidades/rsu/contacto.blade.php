@extends('layouts.home')

@section('content')

<div class="flex items-center justify-center">
  <span class="bg-blue-950 text-yellow-500 text-2xl md:text-5xl font-bold w-full text-center px-4 md:px-8 py-4 rounded">
    Proyectos actuales de R.S.U
  </span>
</div>

<!-- Carrusel de tarjetas con navegación -->
<div class="relative w-full bg-blue-950 py-8">
  <!-- Botón Izquierdo -->
  <button
    id="prevButton"
    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-yellow-500 text-white p-3 rounded-full shadow hover:bg-yellow-600 focus:outline-none"
  >
    &#9664;
  </button>

  <!-- Contenedor del carrusel -->
  <div
    id="carousel"
    class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory px-4 md:px-8"
  >
    <!-- Tarjeta 1 -->
    <div class="flex-shrink-0 w-72 md:w-80 p-4 md:p-6 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-48 md:h-60 object-cover rounded" src="{{ asset('imagenes/2021/f6193b7e-d2b0-40dc-a22f-6009acde4289.jfif') }}" alt="Card 1" />
      <h2 class="mt-4 font-bold text-lg md:text-xl text-center">2021</h2>
      <p class="text-gray-700 text-sm md:text-base text-center">Liderazgo pedagógico</p>
    </div>

    <!-- Tarjeta 2 -->
    <div class="flex-shrink-0 w-72 md:w-80 p-4 md:p-6 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-48 md:h-60 object-cover rounded" src="{{ asset('imagenes/2022/89a7bced-67f9-4bbe-9aeb-d5e00508f768.jfif') }}" alt="Card 2" />
      <h2 class="mt-4 font-bold text-lg md:text-xl text-center">2022</h2>
      <p class="text-gray-700 text-sm md:text-base text-center">acciones educomunicativas de violencia contra mujer</p>
    </div>

    <!-- Tarjeta 3 -->
    <div class="flex-shrink-0 w-72 md:w-80 p-4 md:p-6 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-48 md:h-60 object-cover rounded" src="{{ asset('imagenes/2023/6e194cea-5507-402e-b312-ebb0106f821d.jfif') }}" alt="Card 3" />
      <h2 class="mt-4 font-bold text-lg md:text-xl text-center">2023</h2>
      <p class="text-gray-700 text-sm md:text-base text-center">Violencia de género</p>
    </div>

    <!-- Tarjeta 4 -->
    <div class="flex-shrink-0 w-72 md:w-80 p-4 md:p-6 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-48 md:h-60 object-cover rounded" src="{{ asset('imagenes/2024/9ecf6958-2943-4164-83d5-a3b1b9bc388a.jfif') }}" alt="Card 4" />
      <h2 class="mt-4 font-bold text-lg md:text-xl text-center">2024</h2>
      <p class="text-gray-700 text-sm md:text-base text-center">Proyecto de reciclaje</p>
    </div>

    <!-- Tarjeta 5 -->
    <div class="flex-shrink-0 w-72 md:w-80 p-4 md:p-6 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-48 md:h-60 object-cover rounded" src="{{ asset('imagenes/fondo.avif') }}" alt="Card 5" />
      <h2 class="mt-4 font-bold text-lg md:text-xl text-center">2025</h2>
      <p class="text-gray-700 text-sm md:text-base text-center">PRONTO</p>
    </div>
  </div>

  <!-- Botón Derecho -->
  <button
    id="nextButton"
    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-yellow-500 text-white p-3 rounded-full shadow hover:bg-yellow-600 focus:outline-none"
  >
    &#9654;
  </button>
</div>

<!-- Script para funcionalidad -->
<script>
  const carousel = document.getElementById("carousel");
  const prevButton = document.getElementById("prevButton");
  const nextButton = document.getElementById("nextButton");

  const cardWidth = carousel.querySelector(".w-72").offsetWidth + 16; // Ajustar ancho más margen

  prevButton.addEventListener("click", () => {
    carousel.scrollBy({ left: -cardWidth, behavior: "smooth" });
  });

  nextButton.addEventListener("click", () => {
    carousel.scrollBy({ left: cardWidth, behavior: "smooth" });
  });
</script>



@endsection