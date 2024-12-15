@extends('layouts.home')

@section('content')
<div class="flex flex-col w-full min-h-[calc(100dvh-230px)] bg-blue-950 text-white shadow-xl p-5">
    <!-- Título de la sección -->
    <div class="flex flex-col text-center items-center justify-center py-5">
        <h1 class="text-4xl font-bold text-center mb-2 text-yellow-500 sm:text-2xl">RESPONSABILIDAD SOCIAL UNIVERSITARIA</h1>
        <div class="mx-auto h-1 w-24 bg-[#ffd54f]"></div>
    </div>

    <!-- Contenedor de las tarjetas -->
    <div class="flex flex-wrap justify-center items-center gap-10 min-h-[calc(100dvh-230px)] mt-4">
        <!-- Información de la directora -->
        <div class="flex flex-col items-center bg-white text-black p-5 bg-yellow-300 rounded-lg shadow-lg w-96 max-w-full mb-4">
            <div class="w-40 h-40 rounded-full border-4 border-blue-950 flex justify-center items-center overflow-hidden mb-5">
                <img src="{{ asset('imagenes/WhatsApp Image 2024-11-09 at 22.37.48.jpeg') }}" alt="Foto de la directora" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-bold text-center">Dra. Liliana Marcela Mendoza Montoya</h2>
            <p class="text-center mt-2">Directora de la Dirección de Responsabilidad Social Universitaria y Extensión Cultural</p>
        </div>

        <!-- Repositorio documental -->
        <div class="flex flex-col items-center bg-white text-black p-5 bg-yellow-300 rounded-lg shadow-lg w-96 max-w-full mb-4">
            <div class="w-40 h-40 rounded-full border-4 border-blue-950 flex justify-center items-center bg-gray-200 overflow-hidden mb-5">
                <img src="https://media.istockphoto.com/id/1299662462/es/vector/firma-de-contrato-documento-con-sello-firma-y-bol%C3%ADgrafo-acuerdo-formulario-de-solicitud.jpg?s=612x612&w=0&k=20&c=kfVy3SuVB38v_c8617U8DKlFHKk48qF6rIckep7p9Gg=" alt="Documento" class="w-20 h-20">
            </div>
            <p class="text-center mt-2">OFICIO N° 416-2024-UNT-RECTORADO-DRSU</p>
            <div class="px-6 py-4">
                <a href="https://drive.google.com/file/d/1THvT6VtRuTPTrt_FDYFZTfaW_kRsF58f/view" target="_blank" class="inline-block bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver Documento
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

