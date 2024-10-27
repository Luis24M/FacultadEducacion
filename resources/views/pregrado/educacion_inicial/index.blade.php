@extends('layouts.app')

@section('content')
<section class="min-h-60 md:min-h-96 w-full bg-pink-100 flex items-center justify-center gap-5 p-10">
  <div class="flex flex-col justify-center gap-5 text-center">
    <h1 class="text-xl md:text-4xl text-gray-700 font-semibold">Educación Inicial</h1>
    <p class="text-sm md:text-base text-gray-500">Únete a nuestra Escuela Profesional de Educación Inicial y transforma vidas desde la primera infancia.</p>
  </div>
  {{-- <img src="{{ asset('imagenes/index/inicial.jpg') }}" alt="escuela de educación inicial"
    class="w-2/5 rotate-6 shadow-lg hidden lg:block"> --}}
</section>

@endsection