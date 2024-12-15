@extends('layouts.home')

@section('content')
    <h1 class="text-center text-xl md:text-4xl font-bold bg-white py-5">Galeria</h1>
    <hr>
    <section class="w-full flex flex-col gap-4 py-5">
        @if($galerias->isEmpty())
            <h1 class="text-center text-xl md:text-4xl font-bold bg-white py-5">No hay imagenes en la galeria</h1>
        @endif
        @foreach ($galerias as $post)
            <section class="bg-white noticia mx-auto border flex flex-col md:flex-row rounded-xl p-4 shadow-md">
                <div class="w-[350px]">
                    <img src="{{ asset($post->imgPublicacion) }}" width="300" class="imagen drop-shadow-lg justify-center  rounded-lg" alt="">
                </div>
            </section>
        @endforeach
    </section>
@endsection

<style>
  .noticia {
    width: 100%;
    max-width: 1024px;
  }
</style>
