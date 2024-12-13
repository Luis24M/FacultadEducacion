@extends('layouts.home')

@section('content')
    <div class="flex flex-col w-full min-h-[calc(100dvh-230px)] bg-blue-950 text-white shadow-xl p-5">
        
        <div class="flex flex-col text-center items-center justify-center py-5">
          <h1 class="text-4xl font-bold text-center mb-5 text-yellow-500 text-2xl">Responsabilidad Social Universitaria</h1>
          <div class="mx-auto h-1 w-24 bg-[#ffd54f]"></div>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-10 min-h-[calc(100dvh-230px)]">
            <!-- Información de la directora -->
            <div class="flex flex-col items-center bg-white text-black p-5 rounded-lg shadow-lg w-96 max-w-full ">
                <div class="w-40 h-40 rounded-full border-4 border-yellow-400 flex justify-center items-center overflow-hidden mb-5">
                    <img src="{{ asset('imagenes/WhatsApp Image 2024-11-09 at 22.37.48.jpeg') }}" alt="Foto de la directora" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-bold text-center">Dra. Liliana Marcela Mendoza Montoya</h2>
                <p class="text-center mt-2">Directora de la Dirección de Responsabilidad Social Universitaria y Extensión Cultural</p>
            </div>

            <!-- Repositorio documental -->
            <div class="flex flex-col items-center bg-white text-black p-5 rounded-lg shadow-lg w-96 max-w-full">
                <div class="w-full h-40 flex justify-center items-center bg-gray-200 rounded-lg mb-5">
                    <img src="https://media.istockphoto.com/id/1299662462/es/vector/firma-de-contrato-documento-con-sello-firma-y-bol%C3%ADgrafo-acuerdo-formulario-de-solicitud.jpg?s=612x612&w=0&k=20&c=kfVy3SuVB38v_c8617U8DKlFHKk48qF6rIckep7p9Gg=" alt="Documento" class="w-20 h-20">
                </div>
                <p class="text-center mb-3">OFICIO N° 416-2024-UNT-RECTORADO-DRSU</p>
                <a href="#" class="bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg hover:bg-yellow-500">Ver Documento</a>
            </div>
          </div>

    </div>
@endsection
