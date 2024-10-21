@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Colaboradores</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tarjeta de Colaborador -->
            <div class="bg-white shadow-lg rounded-lg p-5">
                <h2 class="text-xl font-semibold text-center">IESTP "Trujillo"</h2>
                <p class="text-gray-700">Desarrollador</p>
                <p class="text-gray-700">Desarrollador</p>
                <p class="text-gray-700">Desarrollador</p>
                <button onclick="toggleSection('section1')" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 block mx-auto">Ver Más</button>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-5">
                <h2 class="text-xl font-semibold text-center">IESTP "Laredo"</h2>
                <p class="text-gray-700"> Diseñador</p>
                <p class="text-gray-700"> Diseñador</p>
                <p class="text-gray-700"> Diseñador</p>
                <button onclick="toggleSection('section2')" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 block mx-auto">Ver Más</button>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-5">
            <h2 class="text-xl font-semibold text-center">IESTP "Nueva Esperanza"</h2>
                <p class="text-gray-700">Diseñador</p>
                <p class="text-gray-700">Diseñador</p>
                <p class="text-gray-700">Diseñador</p>
                <button onclick="toggleSection('section3')" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 block mx-auto">Ver Más</button>

            </div>
        </div>

        <!-- Secciones de Imágenes -->
        <div id="section1" class="hidden mt-6">
            <h3 class="text-2xl font-bold mb-4">Instituto Superior Tecnologico Público "Trujillo"</h3>
            <img src="ruta/a/imagen1.jpg" alt="Imagen 1" class="w-full h-auto mb-4">
            <img src="ruta/a/imagen2.jpg" alt="Imagen 2" class="w-full h-auto mb-4">
        </div>

        <div id="section2" class="hidden mt-6">
            <h3 class="text-2xl font-bold mb-4">Instituto Superior Tecnologico Público "Laredo" </h3>
            <img src="ruta/a/imagen3.jpg" alt="Imagen 3" class="w-full h-auto mb-4">
            <img src="ruta/a/imagen4.jpg" alt="Imagen 4" class="w-full h-auto mb-4">
        </div>

        <div id="section3" class="hidden mt-6">
            <h3 class="text-2xl font-bold mb-4">Instituto Superior Tecnológico Nueva Esperanza</h3>
            <img src="ruta/a/imagen5.jpg" alt="Imagen 5" class="w-full h-auto mb-4">
            <img src="ruta/a/imagen6.jpg" alt="Imagen 6" class="w-full h-auto mb-4">
        </div>
    </div>

    <script>
        function toggleSection(sectionId) {
            const sections = document.querySelectorAll('[id^="section"]');
            sections.forEach(section => {
                if (section.id === sectionId) {
                    section.classList.toggle('hidden');
                } else {
                    section.classList.add('hidden');
                }
            });
        }
    </script>
@endsection