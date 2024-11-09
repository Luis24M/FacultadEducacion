@extends('layouts.app')

@section('content')
<section class="bg-slate-200 p-5">
  <h1 class="text-5xl">Pregrado</h1>
</section>
  
<div class="mt-10">
  <section class="p-4 flex lg:flex-row flex-col flex-wrap justify-around gap-4 lg:gap-1">
      <x-card-escuelas name="Educación Inicial" url="/pregrado/inicial"
          img="https://via.placeholder.com/300x200?text=imagen+Prueba" />
      <x-card-escuelas name="Educación Primaria" url="/pregrado/primaria"
          img="https://via.placeholder.com/300x200?text=imagen+Prueba" />
      <x-card-escuelas name="Educación Secundaria" url="/pregrado/secundaria"
          img="https://via.placeholder.com/300x200?text=imagen+Prueba" />
      <x-card-escuelas name="Ciencias de la Comunicación" url="/pregrado/cdlc"
          img="https://via.placeholder.com/300x200?text=imagen+Prueba" />
  </section>
</div>

@endsection