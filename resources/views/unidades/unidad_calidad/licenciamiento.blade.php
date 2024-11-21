@extends('layouts.home')

@section('content')

<section class="bg-[#483D8B] text-white py-8 flex items-center justify-center">
        <div class="text-center">
        <h1 class="text-4xl font-extrabold">Licenciamiento</h1>
         </div>
</section>

<div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-1 gap-8">
            <!-- Licenciamiento Institucional -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-semibold">Licenciamiento Institucional</h2>
                </div>
                <div class="text-center">
                    <iframe src="{{ asset('/licenciamiento/RESOLUCION DEL CONSEJO DIRECTIVO 127-2018 ANEXO RESUELVE APROBAR EL LICENCIAMIENTO INSTITUCIONAL DE LA UNT-TRUJILLO.pdf') }}" width="100%" height="600px"></iframe>

                </div>
            </div>

            <!-- Licenciamiento por Escuelas -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-center mb-4">Licenciamiento de los Programas de Estudio</h2>
                <div class="flex items-center justify-center p-6 bg-yellow-50 rounded-lg border-2 border-yellow-200">
                    <div class="flex items-center space-x-3">
                        <svg class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <p class="text-lg text-yellow-700">El Proceso de Licenciamiento de los programas de estudio, actualmente se encuentra suspendido por la Sunedu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection