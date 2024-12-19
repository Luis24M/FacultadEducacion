@extends('layouts.home')

@section('content')
<section class="bg-slate-200s p-5">
  <h1 class="text-5xl text-center drop-shadow-xl font-semibold">Pregrado</h1>
</section>
  
<div class="py-10 w-full ">
  <section class="p-4 grid md:grid-cols-2 justify-center mx-auto gap-4 lg:gap-10">
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