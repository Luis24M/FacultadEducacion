@extends('layouts.home')

@section('content')
<div class="flex flex-col w-full min-h-[calc(100dvh-230px)] bg-blue-950 shadow-xl p-5">
    <div class="flex flex-col text-center items-center justify-center py-5 bg-blue-950">
        <h1 class="text-4xl font-bold text-center mb-5 text-yellow-500">PROYECTOS ACTUALES DE R.S.U</h1>
        <div class="mx-auto h-1 w-24 bg-[#ffd54f]"></div>

    </div>

    <section id="benefits-list" class="bg-blue-950 py-10 relative">
        <div class="mx-auto  lg:px-16 max-w-screen-2xl text-center">
            <div class="flex items-center justify-center">
                <button id="scroll-left" class="transition transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow" fill="none" viewBox="0 0 24 24" stroke="yellow">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4l-8 8 8 8" />
                    </svg>
                </button>

                <div class="scroll-container flex overflow-x-auto gap-6" id="card-wrapper">
                    @php
                        $estandares = [
                            ['anio' => '2021', 'descripcion' => 'LIDERASGO PEDAGÓGICO', 'imagen' => 'imagenes/2021/f6193b7e-d2b0-40dc-a22f-6009acde4289.jfif'],
                            ['anio' => '2022', 'descripcion' => 'ACCIONES EDUCOMUNICATIVAS DE VIOLENCIA CONTRA MUJER', 'imagen' => 'imagenes/2022/89a7bced-67f9-4bbe-9aeb-d5e00508f768.jfif'],
                            ['anio' => '2023', 'descripcion' => 'VIOLENCIA DE GÉNERO', 'imagen' => 'imagenes/2023/6e194cea-5507-402e-b312-ebb0106f821d.jfif'],
                            ['anio' => '2024', 'descripcion' => 'PROYECTO DE RECICLAJE', 'imagen' => 'imagenes/2024/86b9b5fe-01c9-473e-9f40-f97f75b5f0f9.jfif'],
                            ['anio' => '2025', 'descripcion' => 'PRONTO', 'imagen' => 'imagenes/fondo.avif'],
                        ];
                    @endphp
                    @foreach ($estandares as $estandar)
                        <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg max-w-[400px] max-h-[500px] flex-shrink-0 flex flex-col items-center">
                            <h4 class="text-2xl font-semibold mb-2 text-black">{{ $estandar['anio'] }}</h4>
                            <p class="text-wrap mb-6">{{ $estandar['descripcion'] }}</p>
                            <img src="{{ asset($estandar['imagen']) }}" alt="{{ $estandar['descripcion'] }}" class="w-full h-[350px] object-cover rounded-lg cursor-pointer" onclick="openModal('{{ asset($estandar['imagen']) }}')">
                        </div>
                    @endforeach
                </div>

                <button id="scroll-right" class="transition transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow" fill="none" viewBox="0 0 24 24" stroke="yellow">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4l8 8-8 8" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
</div>

<!-- Modal para mostrar la imagen más grande -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal(event)">
    <div class="bg-white p-8 rounded-lg w-[80%] h-[80%] overflow-auto relative" onclick="event.stopPropagation()">
        <img id="modalImage" src="" alt="Imagen ampliada" class="w-full h-auto">
        <button onclick="closeModal()" class="absolute top-5 right-5 text-white text-3xl">&times;</button>
    </div>

</div>

<script>

    // Función para abrir el modal con la imagen más grande
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modal.classList.remove('hidden');
        modalImage.src = imageSrc;
    }

    // Función para cerrar el modal
    function closeModal(event) {
        // Verificamos si el clic fue fuera de la imagen
        if (event.target.id === "imageModal") {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
        }
    }

    // Cerrar el modal al presionar la tecla Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal(event);
        }
    });

    // Funcionalidad de desplazamiento
    const scrollContainer = document.getElementById("card-wrapper");
    const scrollLeftButton = document.getElementById("scroll-left");
    const scrollRightButton = document.getElementById("scroll-right");
    const cards = document.querySelectorAll('#card-wrapper > div');
    const cardWidth = cards[0].offsetWidth + 16;
    let currentIndex = 0;

    scrollLeftButton.addEventListener("click", () => {
        currentIndex = Math.max(0, currentIndex - 1);
        scrollContainer.scrollTo({
            left: currentIndex * cardWidth,
            behavior: "smooth"
        });
    });

    scrollRightButton.addEventListener("click", () => {
        currentIndex = Math.min(cards.length - 1, currentIndex + 1);
        scrollContainer.scrollTo({
            left: currentIndex * cardWidth,
            behavior: "smooth"
        });
    });

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

<!-- CSS adicional -->
<style>
    .arrow {
        width: 80px;
        height: 80px;
        stroke-width: 4;
    }

    @media(max-width: 1200px) {
        .arrow {
            width: 60px;
            height: 60px;
            stroke-width: 3;
        }
    }
    @media(max-width: 768px) {
        .arrow {
            width: 30px;
            height: 30px;
            stroke-width: 2;
        }
    }
    #accessCodeModal {
        z-index: 1000;
    }

    #accessCodeInput:focus {
        outline: none;
        border-color: #4A90E2;
        box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
    }
</style>

@endsection