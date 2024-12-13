@extends('layouts.home')

@section('content')
<!-- Imagen principal con texto -->
<div class="flex items-center justify-center">
  <span class="bg-blue-950 text-yellow-500 text-2xl md:text-5xl font-bold w-full text-center px-4 md:px-8 py-4 rounded">
    Responsabilidad Social Universitaria 
</div>

<!-- Sección de información -->
<div class="bg-blue-950 w-full min-h-screen flex flex-wrap gap-4 justify-center items-center py-8 px-4">
  <!-- Tarjeta de la directora -->
  <div class="w-full sm:w-60 p-4 bg-yellow-500 rounded-xl transform transition-transform hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
    <img
      class="w-full h-60 object-cover rounded-xl"
      src="{{ asset('imagenes/WhatsApp Image 2024-11-09 at 22.37.48.jpeg') }}"
      alt="Directora"
    />
    <div class="mt-4">
      <h2 class="font-bold text-lg text-center mb-2">Dra. Liliana Marcela Mendoza Montoya</h2>
      <p class="text-sm text-black text-center">
        Directora de la Dirección de Responsabilidad Social Universitaria y Extensión Cultural
      </p>
    </div>
  </div>

  <!-- Texto adicional -->
  <div class="flex items-center justify-center w-full">
    <span class="bg-blue-950 text-yellow-500 text-2xl md:text-5xl font-bold w-full text-center px-4 md:px-8 py-4 rounded">
      Repositorio documental de R.S.U 
    </span>
  </div>

  <!-- Tarjeta de ejemplo -->
  <div class="w-full sm:max-w-sm bg-white rounded overflow-hidden shadow-lg">
    <img class="w-full" src="https://media.istockphoto.com/id/1299662462/es/vector/firma-de-contrato-documento-con-sello-firma-y-bol%C3%ADgrafo-acuerdo-formulario-de-solicitud.jpg?s=612x612&w=0&k=20&c=kfVy3SuVB38v_c8617U8DKlFHKk48qF6rIckep7p9Gg=" alt="Documento" />
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Documento de RSU. Repositorio</div>
      <p class="text-gray-700 text-base">
        OFICIO N° 415-2024-UNT-RECTORADO-DIRSU
      </p>
    </div>
    <div class="px-6 py-4">
      <a
        href="https://drive.google.com/file/d/1THvT6VtRuTPTrt_FDYFZTfaW_kRsF58f/view"
        target="_blank"
        class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
      >
        Ver Documento
      </a>
    </div>
  </div>
</div>

@endsection
