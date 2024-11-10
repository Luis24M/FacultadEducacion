@extends('layouts.app')

@section('content')


<div class="flex justify-center items-center">
    <h2 class="text-3xl my-8 font-bold text-blue-500">UNIDAD DE SOPORTE</h2>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
    <div class="bg-white p-10 rounded-lg shadow-lg ml-8">
        <p class="text-gray-700 text-lg">
            La Unidad de Soporte de la Facultad de Educación y Ciencias de la Comunicación de la Universidad Nacional de Trujillo 
            es un equipo especializado dedicado a garantizar el óptimo funcionamiento de la infraestructura tecnológica y el 
            mantenimiento general de las instalaciones. Nuestro personal altamente calificado incluye ingenieros de sistemas, 
            técnicos especializados y personal de mantenimiento que trabajan en conjunto para dar soporte a la facultad de educación
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
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Carlos Rodríguez" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Carlos Rodríguez</h3>
            <p class="text-gray-600 mt-2">"La tecnología al servicio de la educación"</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Ana Martínez" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. Ana Martínez</h3>
            <p class="text-gray-600 mt-2">"Mantenimiento preventivo, éxito educativo"</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Miguel Santos" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Miguel Santos</h3>
            <p class="text-gray-600 mt-2">"Innovación y soporte continuo"</p>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. Laura Vega</h3>
            <p class="text-gray-600 mt-2">"Eficiencia en cada solución"</p>
        </div>
    </div>

    <!-- Card 5 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Pedro Díaz" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Pedro Díaz</h3>
            <p class="text-gray-600 mt-2">"Tecnología que transforma"</p>
        </div>
    </div>

    <!-- Card 6 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. María Ruiz" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. María Ruiz</h3>
            <p class="text-gray-600 mt-2">"Compromiso con la excelencia"</p>
        </div>
    </div>

    <!-- Card 7 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Jorge Castro" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Jorge Castro</h3>
            <p class="text-gray-600 mt-2">"Soluciones inteligentes"</p>
        </div>
    </div>

    <!-- Card 8 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Diana Luna" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. Diana Luna</h3>
            <p class="text-gray-600 mt-2">"Calidad en cada servicio"</p>
        </div>
    </div>

    <!-- Card 9 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Roberto Paz" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Roberto Paz</h3>
            <p class="text-gray-600 mt-2">"Innovación constante"</p>
        </div>
    </div>

    <!-- Card 10 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Carmen Silva" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. Carmen Silva</h3>
            <p class="text-gray-600 mt-2">"Dedicación y profesionalismo"</p>
        </div>
    </div>

    <!-- Card 11 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Fernando Torres" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Ing. Fernando Torres</h3>
            <p class="text-gray-600 mt-2">"Tecnología que conecta"</p>
        </div>
    </div>

    <!-- Card 12 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center">
        <div class="flex justify-center items-center h-auto overflow-hidden">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Julia Mendoza" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold">Téc. Julia Mendoza</h3>
            <p class="text-gray-600 mt-2">"Excelencia en soporte técnico"</p>
        </div>
    </div>
</div>
@endsection