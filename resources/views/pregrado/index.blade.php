@extends('layouts.app')

@section('content')
<section class="bg-slate-200 p-5">
  <h1 class="text-5xl">Pregrado</h1>
</section>
  
<div class="mt-10">
  <section class="p-4 flex lg:flex-row flex-col flex-wrap justify-around gap-4 lg:gap-1">
      <x-card-escuelas name="Educación Inicial" url="/pregrado/inicial"
          img="{{ asset('imagenes/index/inicial.jpg') }}" />
      <x-card-escuelas name="Educación Primaria" url="/pregrado/primaria"
          img="{{ asset('imagenes/index/primaria.jpg') }}" />
      <x-card-escuelas name="Educación Secundaria" url="/pregrado/secundaria"
          img="{{ asset('imagenes/index/secundaria.jpg') }}" />
      <x-card-escuelas name="Ciencias de la Comunicación" url="/pregrado/cdlc"
          img="{{ asset('imagenes/index/ciencias.jpg') }}" />
  </section>
</div>

@endsection