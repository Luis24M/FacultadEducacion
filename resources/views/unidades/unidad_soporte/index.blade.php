@extends('layouts.home')

@section('content')


<div class="flex justify-center items-center bg-yellow-300 w-full">
    <h2 class="text-3xl my-8 font-bold text-blue-500">UNIDAD DE SOPORTE</h2>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
    <div class="bg-white p-10 rounded-lg shadow-lg ml-8">
        <p class="text-gray-700 text-lg">
            La Unidad de Soporte de la Facultad de Educación y Ciencias de la Comunicación de la Universidad Nacional de Trujillo 
            es un equipo especializado dedicado a garantizar el óptimo funcionamiento de la infraestructura tecnológica y el 
            mantenimiento general de las instalaciones. Nuestro personal altamente calificado incluye ingenieros de sistemas, 
            técnicos especializados y personal de mantenimiento que trabajan en conjunto para dar soporte a la facultad de educación.
        </p>
    </div>
    
    <div class="bg-white p-10 rounded-lg shadow-lg mr-8 flex items-center justify-center">
        <ul class="list-disc text-gray-700">
            <li>Mantener y optimizar los laboratorios de cómputo</li>
            <li>Brindar soporte técnico a docentes y estudiantes</li>
            <li>Gestionar el mantenimiento de equipos audiovisuales</li>
            <li>Asegurar la limpieza y el orden de las instalaciones</li>
            <li>Supervisar la infraestructura de red y conectividad</li>
        </ul>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center ml-3 my-8">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/unidades/Julio Hernán Luna Victoria Valdivia.jpg') }}" alt="Ing. Julio Hernán Luna Victoria Valdivia" class="object-cover object-center w-40 h-40" style="object-position: center 0%;">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Julio Hernán Luna Victoria Valdivia</h3>
            <p class="text-gray-600 mt-2">"La tecnología al servicio de la educación"</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center ml-3 my-8">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Ana Martínez" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Victor Alberto Fernandez Paredes</h3>
            <p class="text-gray-600 mt-2">"Mantenimiento preventivo, éxito educativo"</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center ml-3 my-8">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Miguel Santos" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Tec. Joel cruz plasencia</h3>
            <p class="text-gray-600 mt-2">"Innovación y soporte continuo"</p>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. Laura Vega</h3>
            <p class="text-gray-600 mt-2">"Eficiencia en cada solución"</p>
        </div>
    </div>

</div>
@endsection