@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-4">Unidad de Calidad ISO 9001</h1>
        <a href="#master-list" class="bg-white text-blue-600 py-3 px-8 rounded-lg shadow-lg hover:bg-gray-200 transition">Ver Lista Maestra</a>
    </div>
</section>

<section id="master-list" class="py-16 bg-gray-100">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-8 text-center">Lista Maestra de Estándares</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 34; $i++)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">Estándar {{ sprintf('%02d', $i) }}</h3>
                    <p class="text-gray-600 mb-2"><strong>Contextualización:</strong> Breve descripción del estándar {{ $i }}.</p>
                    <p class="text-gray-600 mb-4"><strong>Evidencias:</strong> Documentos y archivos relevantes.</p>
                    <div class="flex justify-between">
                        <a href="#self-evaluation-{{ $i }}" class="text-blue-600 hover:underline">Informe de Autoevaluación</a>
                        <a href="#improvement-plans-{{ $i }}" class="text-blue-600 hover:underline">Planes de Mejora</a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>


@endsection