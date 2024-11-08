<div class="relative border-2 w-full mx-auto lg:w-[30%] group overflow-hidden h-96 lg:h-auto">
    <!-- Imagen y contenido inicial (fase 1) -->
    <div class="h-3/4 w-full">
        <img src="{{ $imagen }}" alt="" class="w-full h-full group-hover:hidden object-cover">
    </div>
    <div class="p-4 bg-white h-1/4 flex flex-col justify-between">
        <h2 class="text-2xl mb-4">{{ $titulo }}</h2>
        <p class="text-gray-600">{{ $fecha }}</p>
    </div>
    <div class="p-4 absolute top-0 left-0 w-full h-full flex flex-col justify-between bg-white opacity-0 group-hover:opacity-100 transition ease-in-out duration-300">
        <h2 class="text-2xl mb-4">{{ $titulo }}</h2>
        <p class="text-gray-600">Con motivo del Día Mundial de la Visión, hemos preguntado a los pacientes qué conocen acerca de la Degeneración Macular Asociada a la Edad (DMAE)</p>
        <p class="text-gray-600">{{ $fecha }}</p>
    </div>
</div>
