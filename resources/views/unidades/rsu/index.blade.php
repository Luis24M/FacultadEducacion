@extends('layouts.home')

@section('content')

<!-- Imagen principal con texto -->
<div class="relative">
    <img src="{{ asset('imagenes/facedu.jpg') }}" alt="Imagen principal" class="w-full opacity-140">
    <div class="absolute inset-0 flex items-center justify-center">
        <span class="bg-black bg-opacity-50 text-yellow-500 md:text-5xl font-bold rounded">Unidad de Responsabilidad Social</span>
    </div>
</div>

<!-- Sección de información -->
<div class="bg-blue-950 w-full min-h-screen gap-4 flex-wrap flex justify-center items-center">
    <!-- Tarjeta de la directora -->
    <div class="w-60 p-2 bg-yellow-500 rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
        <img class="w-[250px] h-60 object-cover rounded-xl" src="{{ asset('imagenes/WhatsApp Image 2024-11-09 at 22.37.48.jpeg') }}" alt="Directora">
        <div class="p-2">
            <h2 class="font-bold text-lg mb-2">Dra. Liliana Marcela Mendoza Montoya</h2>
            <p class="text-sm text-black">Directora de la Dirección de Responsabilidad Social Universitaria y Extensión Cultural</p>
        </div>
    </div>

    <!-- Texto sobre los carruseles -->
    <div class="relative w-full text-center mt-6">
        <div class="absolute inset-x-0 top-0 bg-black bg-opacity-50 text-yellow-500 p-4 text-xl font-bold">
            Proyectos realizados por la Unidad de Responsabilidad Social
        </div>
    </div>

    <!-- Carruseles -->
    @php
        $imagenesCarrusel1 = [
            [
                'url' => asset('imagenes/2021/38f5143f-976d-48f2-aa56-2129e1a5ab98.jfif'),
                'texto' => 'Liderazgo pedagogico 2021'
            ],
            [
                'url' => asset('imagenes/2021/4fb34a5b-f4c3-4af1-9218-b9fb59988725.jfif'),
                'texto' => 'Liderazgo pedagogico 2021'
            ],
            [
                'url' => asset('imagenes/2021/WhatsApp Image 2024-11-08 at 22.08.41.jpeg'),
                'texto' => 'Liderazgo pedagogico 2021'
            ]
        ];

        $imagenesCarrusel2 = [
            [
                'url' => 'imagenes/2022/4fcc2362-f9ef-4dfe-9baa-b345efe01b74.jfif',
                'texto' => ' Acciones educomunicativas de violencia contra mujer 2022'
            ],
            [
                'url' => 'imagenes/2022/37553a8d-51e1-4084-919d-c7429a2760b6.jfif',
                'texto' => 'Acciones educomunicativas de violencia contra mujer 2022'
            ],
            [
                'url' => 'imagenes/2022/b112d15b-fcfe-4610-a19a-50586e7ba751.jfif',
                'texto' => 'Acciones educomunicativas de violencia contra mujer 2022'
            ]
        ];

        $imagenesCarrusel3 = [
            [
                'url' => 'imagenes/2023/b8c7df39-2a52-46f6-abb1-52a84284de92.jfif',
                'texto' => 'Violencia de genero 2023'
            ],
            [
                'url' => 'imagenes/2023/367b993f-04d6-43a4-9a11-1a5443e03ee8.jfif',
                'texto' => 'Violencia de genero 2023'
            ],
            [
                'url' => 'imagenes/2023/cf715e9e-6936-4845-8b58-ede4cdc7b258.jfif',
                'texto' => 'Violencia de genero 2023'
            ]
        ];
        $imagenesCarrusel4 = [
            [
                'url' => 'imagenes/2024/20469462-5417-498a-bf75-a7bba54c27e5.jfif',
                'texto' => 'Proyecto de reciclaje 2024'
            ],
            [
                'url' => 'imagenes/2024/2d59437c-8c9a-485f-a42e-0c55cece4361.jfif',
                'texto' => 'Proyecto de reciclaje 2024'
            ],
            [
                'url' => 'imagenes/2024/9ecf6958-2943-4164-83d5-a3b1b9bc388a.jfif',
                'texto' => 'Proyecto de reciclaje 2024'
            ]
        ];

        $carruseles = [
            $imagenesCarrusel1,
            $imagenesCarrusel2,
            $imagenesCarrusel3,
            $imagenesCarrusel4,
        ];
    @endphp

    <!-- Estructura de los carruseles -->
    @for ($i = 1; $i <= 4; $i++)
        <div class="relative w-full overflow-hidden mt-4">
            <div class="carousel flex transition-transform duration-500 ease-out" data-carousel-id="carousel-{{ $i }}">
                @foreach ($carruseles[$i - 1] as $imagen)
                    <div class="w-full flex-shrink-0 relative">
                        <!-- Contenedor para la imagen y el texto -->
                        <img src="{{ $imagen['url'] }}" class="w-full object-cover carousel-img" alt="Slide {{ $loop->index + 1 }}">
                        <div class="absolute inset-0 flex items-center justify-center  bg-opacity-50">
                            <span class="bg-black bg-opacity-50 text-yellow-600 font-bold text-3xl rounded">{{ $imagen['texto'] }}</span>
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
            background-color: #f0f0f0; /* Color de fondo si queda espacio vacío */
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
            height: 600px; /* Alto fijo para todas las imágenes */
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
                    }, 3500); // Cambia de imagen cada 3.5 segundos
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

@endsection
