@extends('layouts.app')

@section('content')
<h2 class="text-3xl my-8">Noticias</h2>
<div class="relative w-4/5 overflow-hidden m-4 mx-auto">
  <div class="carousel flex transition-transform ease-in-out duration-500" id="carousel">
      <div class="min-w-full h-auto flex justify-center items-center">
          <img src="/imagenes/home/juventud.jpg" class="object-contain max-w-full max-h-full" alt="Juventud">
      </div>
      <div class="min-w-full h-auto flex justify-center items-center">
          <img src="/imagenes/home/lideres.jpg" class="object-contain max-w-full max-h-full" alt="Lideres">
      </div>
      <div class="min-w-full h-auto flex justify-center items-center">
          <img src="/imagenes/home/permanencia.jpg" class="object-contain max-w-full max-h-full" alt="Permanencia">
      </div>
  </div>

  <!-- Controles -->
  <!-- Botones actualizados -->
<button class="absolute top-1/2 left-4 transform -translate-y-1/2 p-4 rounded-full shadow bg-gray-800 text-white z-10" id="prevBtn">
    &#10094;
</button>
<button class="absolute top-1/2 right-4 transform -translate-y-1/2 p-4 rounded-full shadow bg-gray-800 text-white z-10" id="nextBtn">
    &#10095;
</button>

</div>

<script>
  const carousel = document.getElementById('carousel');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  
  let index = 0;
  const totalSlides = carousel.children.length;
  
  // Función para mover el carrusel
  function updateCarousel() {
    carousel.style.transform = `translateX(-${index * 100}%)`;
  }
  
  // Botón siguiente
  nextBtn.addEventListener('click', () => {
    index = (index + 1) % totalSlides;
    updateCarousel();
  });
  
  // Botón previo
  prevBtn.addEventListener('click', () => {
    index = (index - 1 + totalSlides) % totalSlides;
    updateCarousel();
  });
  
  // Auto desplazamiento cada 3 segundos
  setInterval(() => {
    index = (index + 1) % totalSlides;
    updateCarousel();
  }, 3000);
</script>


<h2 class="text-3xl my-8">Eventos</h2>
<div class="flex flex-col items-center mx-auto lg:flex justify-around m-4">
  <img src="{{asset('imagenes/home/juegos.jpg')}}" class="rounded float" alt="..." height="15%" width="30%">
  <img src="{{asset('imagenes/home/colacion.jpg')}}" class="rounded float" alt="..." height="20%" width="40%">
</div>

<h2 class="text-3xl text-center my-8">Nuestras Escuelas</h2>
<section class="p-4 flex flex-wrap justify-around gap-4">
  <x-card-escuelas name="Educación Inicial" img="{{asset('imagenes/home/inicial.jpg')}}" />
  <x-card-escuelas name="Educación Primaria" img="{{asset('imagenes/home/primaria.jpg')}}" />
  <x-card-escuelas name="Educación Secundaria" img="{{asset('imagenes/home/secundaria.jpg')}}" />
  <x-card-escuelas name="Ciencias de la Comunicación" img="{{asset('imagenes/home/ciencias.jpg')}}" />
</section>
@endsection