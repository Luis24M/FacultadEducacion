@extends('layouts.app')

@section('content')

    <!-- Carruseles -->
    @php
        $imagenesCarrusel1 = [
            [
                'url' => asset('imagenes/2023/b8c7df39-2a52-46f6-abb1-52a84284de92.jfif'),
                'texto' => ' RESPONSABILIDAD SOCIAL UNIVERSITARIA'
            ],
            [
                'url' => asset('imagenes/2023/cf715e9e-6936-4845-8b58-ede4cdc7b258.jfif'),
                'texto' => 'BIENVENIDO A LA SECCION DE PROYECTOS DE RSU'
            ],
            [
                'url' => asset('imagenes/2021/WhatsApp Image 2024-11-08 at 22.08.41.jpeg'),
                'texto' => ' 2021-2022-2023-2024'
            ]
        ];

     

     

        $carruseles = [
            $imagenesCarrusel1,
           
           
        ];
    @endphp

    <!-- Estructura de los carruseles -->
    @for ($i = 1; $i <= 1; $i++)
        <div class="relative w-full overflow-hidden mt-4">
            <div class="carousel flex transition-transform duration-500 ease-out" data-carousel-id="carousel-{{ $i }}">
                @foreach ($carruseles[$i - 1] as $imagen)
                    <div class="w-full flex-shrink-0 relative">
                        <!-- Contenedor para la imagen y el texto -->
                        <img src="{{ $imagen['url'] }}" class="w-full object-cover carousel-img" alt="Slide {{ $loop->index + 1 }}">
                        <div class="absolute inset-0 flex items-center justify-center  bg-opacity-50">
                            <span class="bg-black  text-yellow-600 font-bold text-3xl rounded">{{ $imagen['texto'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Botones de control -->
            <button class="prev absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2" data-carousel-id="carousel-{{ $i }}">
                &#10094;
            </button>
            <button class="next absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2" data-carousel-id="carousel-{{ $i }}">
                &#10095;
            </button>
        </div>
    @endfor
    <!-- Estilos adicionales para márgenes y textos sobre las imágenes -->
    <style>
        .carousel-img {
            width: 1500px; /* Ancho fijo para todas las imágenes */
            height: 600px; /* Alto fijo para todas las imágenes */
            object-fit: cover; /* Ajusta la imagen dentro del contenedor sin dejar espacios vacíos */
            background-color: #87CEEB; /* Color de fondo si queda espacio vacío */
        }

        .relative {
            margin-bottom: 20px; /* Espacio entre los carruseles */
        }

        /* Estilo para el texto sobre las imágenes */
        .carousel-img-container {
            position: relative;
        }

        /* Botones de control para el carrusel */
        .prev, .next {
            cursor: pointer;
        }

        .prev, .next {
            z-index: 10;
        }
        .carousel-img {
            width: 1500px; /* Ancho fijo para todas las imágenes */
            height: 700px; /* Alto fijo para todas las imágenes */
            object-fit: contain; /* Ajusta la imagen dentro del contenedor sin recortarla */
            background-color: #f0f0f0; /* Color de fondo si queda espacio vacío */
        }

    </style>

    <!-- Script para manejo del carrusel con desplazamiento automático y pausa al hacer clic -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousels = document.querySelectorAll('.carousel');

            carousels.forEach(carousel => {
                let currentIndex = 0;
                const totalItems = carousel.children.length;
                const prevButton = document.querySelector(`.prev[data-carousel-id="${carousel.dataset.carouselId}"]`);
                const nextButton = document.querySelector(`.next[data-carousel-id="${carousel.dataset.carouselId}"]`);
                let autoScroll;

                // Función para actualizar la posición del carrusel
                function updateCarousel(carousel, currentIndex) {
                    const offset = -currentIndex * 100; // Mueve las diapositivas al 100% del ancho
                    carousel.style.transform = `translateX(${offset}%)`;
                }

                // Función para iniciar el desplazamiento automático
                function startAutoScroll() {
                    autoScroll = setInterval(() => {
                        currentIndex = (currentIndex + 1) % totalItems;
                        updateCarousel(carousel, currentIndex);
                    }, 5500); // Cambia de imagen cada 3.5 segundos
                }

                // Función para detener el desplazamiento automático
                function stopAutoScroll() {
                    clearInterval(autoScroll);
                }

                // Iniciar el desplazamiento automático
                startAutoScroll();

                // Control manual con botones
                nextButton.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % totalItems;
                    updateCarousel(carousel, currentIndex);
                    stopAutoScroll(); // Detener el desplazamiento automático al hacer clic
                });

                prevButton.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                    updateCarousel(carousel, currentIndex);
                    stopAutoScroll(); // Detener el desplazamiento automático al hacer clic
                });

                // Detener el desplazamiento automático al hacer clic en una imagen
                carousel.addEventListener('click', (event) => {
                    if (event.target.tagName === 'IMG') {
                        stopAutoScroll(); // Detener el desplazamiento automático al hacer clic en una imagen
                    }
                });
            });
        });
    </script>

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