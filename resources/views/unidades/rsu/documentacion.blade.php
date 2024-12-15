@extends('layouts.home')

@section('content')
@php
    // Lista de proyectos para mostrar en el informe
    $proyectos2021 = [
        'PROYECTO INICIAL biblioteca infantil' => [
            'titulo' => 'PROYECTO INICIAL biblioteca infantil',
            'enlace' => 'https://drive.google.com/file/d/1ymbbiOjZp7EytZSpEEL6GOUxHi6TPt5j/view'
        ],
        'PROYECTO DE LENGUA Y LITERATURA' => [
            'titulo' => 'PROYECTO DE LENGUA Y LITERATURA - PROF. ZORÁN',
            'enlace' => 'https://drive.google.com/file/d/1x3W26LHHhjMZSBqxbk1zHEgFJlr-TjzA/view'
        ],
        'PROYECTO DE LENGUA Y LITERATURA - PROF. MARTHA PAREDES' => [
            'titulo' => 'PROYECTO DE LENGUA Y LITERATURA - PROF. MARTHA PAREDES',
            'enlace' => 'https://drive.google.com/file/d/1N5YeVWVZIoWqlqLyuAvDvHPUrD4oqyw-/view'
        ],
        'PROYECTO DE HISTORIA Y GEOGRAFÍA' => [
            'titulo' => 'PROYECTO DE HISTORIA Y GEOGRAFÍA',
            'enlace' => 'https://drive.google.com/file/d/1rF5JLC8Oe8juabeJhgQzOblZhSm-oYbg/view'
        ],
        'PROYECTO DE CIENCIAS PSICOLÓGICAS' => [
            'titulo' => 'PROYECTO DE CIENCIAS PSICOLÓGICAS',
            'enlace' => 'https://drive.google.com/file/d/1S9v75y9yaRfiCUfRctB4LTp3OFFP-GSl/view'
        ],
        'PROYECTO DE FILOSOFÍA Y ARTE' => [
            'titulo' => 'PROYECTO DE FILOSOFÍA Y ARTE',
            'enlace' => 'https://drive.google.com/file/d/1IQDYLsy6nOebeWjrAAIOzLwd8SXCivDr/view'
        ],
        'FORMATO DE PROYECTO DE RESPONSABILIDAD SOCIAL UNIVERSITARIA' => [
            'titulo' => 'FORMATO DE PROYECTO DE RESPONSABILIDAD SOCIAL UNIVERSITARIA',
            'enlace' => 'https://drive.google.com/file/d/1rQ6O_JACQ1Mvl_q6nq7RI-MlkNxCpZm1/view'
        ]
    ];

    $proyectos2022 = [
        'X Congreso Regional de Filosofía del Norte del Perú-CON CARTAS DE INTENCIÓN' => [
            'titulo' => 'X Congreso Regional de Filosofía del Norte del Perú-CON CARTAS DE INTENCIÓN',
            'enlace' => 'https://drive.google.com/file/d/18woyuLQF7jrcfVNlvQNkq4fTcaAr2FPO/view'
        ],
        'TRABAJANDO JUNTOS PARAFORTALECER NUESTRAS CAPACIDADES' => [
            'titulo' => 'TRABAJANDO JUNTOS PARAFORTALECER NUESTRAS CAPACIDADES',
            'enlace' => 'https://drive.google.com/file/d/1aUiQAh9GSHFfll4aMRgaNc5aV7TdgJl4/view'
        ],
        'PROYECTO RSU 2022' => [
            'titulo' => 'PROYECTO RSU 2022',
            'enlace' => 'https://drive.google.com/file/d/1br88nqNinKhBm1jXG-T7K_BvdmpS_Rks/view'
        ],
        'Proyecto Promoviendo la identidad' => [
            'titulo' => 'Proyecto Promoviendo la identidad',
            'enlace' => 'https://drive.google.com/file/d/1MoBCblZ4kP5jVeOQI6C-AbXhCPW94aLc/view'
        ],
        'Proyecto de RS Cultura de la responsabilidad tributaria - 2022' => [
            'titulo' => 'Proyecto de RS Cultura de la responsabilidad tributaria- 2022',
            'enlace' => 'https://drive.google.com/file/d/1Myl9jjDQB5Lv7uTCQ8rvR0HC_VRLxxbd/view'
        ],
        'Plan estrategico multidisciplinario para la atención integral infantil completo' => [
            'titulo' => 'Plan estrategico multidisciplinario para la atención integral infantil completo',
            'enlace' => 'https://drive.google.com/file/d/16Dt5N3YWZUIjcatmDa0Nz0jDPqzKbLFl/view'
        ],
        'ACCIONES EDUCOMUNICATIVAS PARA PREVENIR LA VIOLENCIA' => [
            'titulo' => 'ACCIONES EDUCOMUNICATIVAS PARA PREVENIR LA VIOLENCIA',
            'enlace' => 'https://drive.google.com/file/d/12PC8nEnkOUrUMa9ewUveHV5LeqY5AM7d/view'
        ],
        '1134-ALCANZA PROYECTOS DE RSU 2022' => [
            'titulo' => '1134-ALCANZA PROYECTOS DE RSU 2022',
            'enlace' => 'https://drive.google.com/file/d/1u2Ybh8eYcJ5ZtqYWRWzXHRBbBUQC5aBw/view'
        ],
        '643-ENVÍO PROYECTOS DE RESPONSABILIDAD SOCIAL 2022. - CON OBSERVACIONES LEVANTADASOK' => [
            'titulo' => '643-ENVÍO PROYECTOS DE RESPONSABILIDAD SOCIAL 2022. - CON OBSERVACIONES LEVANTADASOK',
            'enlace' => 'https://drive.google.com/file/d/1VaWkEuPX5AiRqectFVZVbegKhGsxoq8S/view'
        ]
    ];

    $proyectos2023=[
          'XI-COREFIL23'=>[
            'titulo'=>'XI-COREFIL23 ',
            'enlace'=>'https://drive.google.com/file/d/108TD4pwqZlOI1R_Tjh9ulEfNDdMJwPWm/view'
            ],
            'RSU 2023PROGRAMA EDUCACIÓN EMOCIONAL'=>[
                'titulo'=>'RSU 2023PROGRAMA EDUCACIÓN EMOCIONAL',
                'enlace'=>'https://drive.google.com/file/d/1y12o_qe__wpbV9j1x9nmDdZv5zm4AUBZ/view'
            ],
            'PROYECTO RSU 2023'=>[
                'titulo'=>'PROYECTO RSU 2023',
                'enlace'=>'https://drive.google.com/file/d/1mvbvYSsUCI8cUtlE1zo-5xehpNAaCy79/view'
            ],
            'PROYECTO RSU 2023-2 YACKELINE SILVA'=>[
                'titulo'=>'PROYECTO RSU 2023-2 YACKELINE SILVA',
                'enlace'=>'https://drive.google.com/file/d/1Ws2S1SdacsstavW0zcDHyM3WY_x-VSEr/view'
            ],
            'PROYECTO RSU 2023 idiomas'=>[
                'titulo'=>'PROYECTO RSU 2023 idiomas',
                'enlace'=>'https://drive.google.com/file/d/1-CeLySyeAMJjEyrLsxY6VgL-JrFi6wce/view'
            ],
            'PROYECTO DE RSU- PROGRAMA DE EDUCACIÓN PRIMARIA'=>[
                'titulo'=>'PROYECTO DE RSU- PROGRAMA DE EDUCACIÓN PRIMARIA',
                'enlace'=>'https://drive.google.com/file/d/1i1hiwXqkZlueS6BpxlsV9hOINnn6Qmkb/view'
            ],
            'PROYECTO DE RESPONSABILIDAD SOCIAL 2023 - V4'=>[
                'titulo'=>'PROYECTO DE RESPONSABILIDAD SOCIAL 2023 - V4',
                'enlace'=>'https://drive.google.com/file/d/1dGsqsdBnYFEpQVgOMhZdk1UrSN3m7fk7/view'    
            ],
            'OFICIO Nº 042- 2023 RSU - proyecto 2023' => [
                'titulo'=>'OFICIO Nº 042- 2023 RSU - proyecto 2023',
                'enlace'=>'https://drive.google.com/file/d/19fv80K_IBueE-VV6kR1zdPBt14BwVcsL/view'    
            ],
            'I CONGRESO INTERNACIONAL HÍBRIDO DE EDUCACIÓN MATEMÁTICA 2023 '=>[
                'titulo'=>'I CONGRESO INTERNACIONAL HÍBRIDO DE EDUCACIÓN MATEMÁTICA 2023 ',
                'enlace'=>'https://drive.google.com/file/d/1YPTCJO0zKmF9mBlD_PaaD8GvkFPH_uQa/view'   
            ]
        ]
@endphp

<div class="w-full min-h-[calc(100dvh-230px)] bg-[#091846] text-white">
    {{-- Sección Principal --}}
    <section class="bg-[#091846] py-12 text-center">
        <h1 class="text-4xl font-bold text-yellow-500 mb-2">INFORMES DE R.S.U</h1>
        <div class="mx-auto h-1 w-24 bg-[#ffd54f]"></div>
        <p class="my-4">
            ¡Bienvenido a los informes de R.S.U ! Aquí podrás explorar todo lo que necesitas
            conocer acerca de nuestra unidad de Responsabilidad Social Universitaria.
        </p>
        <a href="#informes" 
           class="bg-[#FFCE00] text-black px-6 py-2 rounded-md font-semibold hover:bg-[#e6b800]">
            Explorar Informes
        </a>
    </section>

    {{-- Sección de Informes --}}
    <section id="informes" class="p-8">
        <div class="bg-[#1E2A5A] rounded-lg p-4 shadow-lg">
            <h2 class="text-xl font-bold mb-4 flex items-center">
                <span class="mr-2">📅</span> INFORMES DE R.S.U
            </h2>

            {{-- Año 2021 --}}
<div class="border-b border-gray-600 mb-4">
    <button onclick="toggleSection('year-2021')" 
            class="w-full text-left flex justify-between py-2 font-semibold hover:text-[#FFCE00]">
        Año 2021
        <span>⏷</span>
    </button>
    <div id="year-2021" class="hidden grid md:grid-cols-2 gap-4 p-2">
        @foreach($proyectos2021 as $proyecto)
            <a href="{{ $proyecto['enlace'] }}" target="_blank" 
               class="bg-[#2F3D7E] p-4 rounded-md flex items-center justify-between hover:bg-[#3A4A90] transition-colors">
                <span class="text-sm font-semibold">{{ $proyecto['titulo'] }}</span>
                <span class="text-[#FFCE00] text-lg">⬇</span>
            </a>
        @endforeach
    </div>
</div>

{{-- Año 2022 --}}
<div class="border-b border-gray-600 mb-4">
    <button onclick="toggleSection('year-2022')" 
            class="w-full text-left flex justify-between py-2 font-semibold hover:text-[#FFCE00]">
        Año 2022
        <span>⏷</span>
    </button>
    <div id="year-2022" class="hidden grid md:grid-cols-2 gap-4 p-2">
        @foreach($proyectos2022 as $proyecto)
            <a href="{{ $proyecto['enlace'] }}" target="_blank" 
               class="bg-[#2F3D7E] p-4 rounded-md flex items-center justify-between hover:bg-[#3A4A90] transition-colors">
                <span class="text-sm font-semibold">{{ $proyecto['titulo'] }}</span>
                <span class="text-[#FFCE00] text-lg">⬇</span>
            </a>
        @endforeach
    </div>
</div>

{{-- Año 2023 --}}
<div>
    <button onclick="toggleSection('year-2023')" 
            class="w-full text-left flex justify-between py-2 font-semibold hover:text-[#FFCE00]">
        Año 2023
        <span>⏷</span>
    </button>
    <div id="year-2023" class="hidden grid md:grid-cols-2 gap-4 p-2">
        @foreach($proyectos2023 as $proyecto)
            <a href="{{ $proyecto['enlace'] }}" target="_blank" 
               class="bg-[#2F3D7E] p-4 rounded-md flex items-center justify-between hover:bg-[#3A4A90] transition-colors">
                <span class="text-sm font-semibold">{{ $proyecto['titulo'] }}</span>
                <span class="text-[#FFCE00] text-lg">⬇</span>
            </a>
        @endforeach
    </div>
</div>

        </div>
    </section>
</div>

{{-- Script para ocultar/mostrar secciones --}}
<script>
    function toggleSection(id) {
        const section = document.getElementById(id);
        section.classList.toggle('hidden');
    }
</script>
@endsection
