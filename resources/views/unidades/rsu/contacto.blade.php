@extends('layouts.home')

@section('content')

<div class="flex items-center justify-center   ">
  <span class="bg-blue-950 text-yellow-500 md:text-5xl font-bold w-full items-center px-8 py-4 rounded">
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
    class="flex gap-4 overflow-x-hidden scroll-smooth snap-x snap-mandatory"
  >
    <!-- Tarjeta 1 -->
    <div class="flex-shrink-0 w-60 p-4 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-40 object-cover rounded" src="/img/card1.jpg" alt="Card 1" />
      <h2 class="mt-4 font-bold text-lg text-center">Título 1</h2>
      <p class="text-gray-700 text-sm text-center">Descripción breve de la tarjeta 1.</p>
    </div>

    <!-- Tarjeta 2 -->
    <div class="flex-shrink-0 w-60 p-4 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-40 object-cover rounded" src="/img/card2.jpg" alt="Card 2" />
      <h2 class="mt-4 font-bold text-lg text-center">Título 2</h2>
      <p class="text-gray-700 text-sm text-center">Descripción breve de la tarjeta 2.</p>
    </div>

    <!-- Tarjeta 3 -->
    <div class="flex-shrink-0 w-60 p-4 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-40 object-cover rounded" src="/img/card3.jpg" alt="Card 3" />
      <h2 class="mt-4 font-bold text-lg text-center">Título 3</h2>
      <p class="text-gray-700 text-sm text-center">Descripción breve de la tarjeta 3.</p>
    </div>

    <!-- Tarjeta 4 -->
    <div class="flex-shrink-0 w-60 p-4 bg-white rounded-lg shadow-md snap-start">
      <img class="w-full h-40 object-cover rounded" src="/img/card4.jpg" alt="Card 4" />
      <h2 class="mt-4 font-bold text-lg text-center">Título 4</h2>
      <p class="text-gray-700 text-sm text-center">Descripción breve de la tarjeta 4.</p>
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

  // Ancho de desplazamiento por tarjeta
  const cardWidth = carousel.querySelector(".w-60").offsetWidth + 16; // Ancho más margen

  prevButton.addEventListener("click", () => {
    carousel.scrollBy({ left: -cardWidth, behavior: "smooth" });
  });

  nextButton.addEventListener("click", () => {
    carousel.scrollBy({ left: cardWidth, behavior: "smooth" });
  });
</script>



@endsection