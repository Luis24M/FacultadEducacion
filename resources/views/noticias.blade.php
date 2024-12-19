@extends('layouts.home')

@section('content')
    <h1 class="text-center text-xl md:text-4xl font-bold bg-white py-5">Noticias</h1>
    <hr>
    <section class="w-full flex flex-col gap-4 p-5">
        @foreach ($noticias as $noticia)
            <section class="bg-white noticia mx-auto border flex flex-col md:flex-row items-center rounded-xl p-4 shadow-md">
                <div class="w-[350px]">
                    <img src="{{ asset($noticia->imgPublicacion) }}" width="300" class="imagen mx-auto drop-shadow-lg justify-center  rounded-lg" alt="">
                </div>
                <div class="text-wrap p-4 w-full">
                    <div class="flex justify-between">
                        <h2 class="text-2xl font-semibold mb-4">{{ $noticia->nombrePublicacion }}</h2>
                        <p class="text-gray-700">{{ $noticia->fechaPublicacion }}</p>
                    </div>
                    <p class="text-wrap">{{ $noticia->desPublicacion }}</p>
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
