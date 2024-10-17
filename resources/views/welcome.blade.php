@extends('layouts.app')

@section('content')
    <h2 class="text-5xl text-center my-8 font-bold">Nuestras Escuelas</h2>
    <section class="p-4 flex lg:flex-row flex-col flex-wrap justify-around gap-4">
        <x-card-escuelas name="Educación Inicial" url="/pregrado/inicial" img="{{ asset('imagenes/index/inicial.jpg') }}" />
        <x-card-escuelas name="Educación Primaria" url="/pregrado/primaria" img="{{ asset('imagenes/index/primaria.jpg') }}" />
        <x-card-escuelas name="Educación Secundaria" url="/pregrado/secundaria"
            img="{{ asset('imagenes/index/secundaria.jpg') }}" />
        <x-card-escuelas name="Ciencias de la Comunicación" url="/pregrado/cdlc"
            img="{{ asset('imagenes/index/ciencias.jpg') }}" />
    </section>

    <h2 class="text-5xl text-center my-8 font-bold">Eventos</h2>
    <div class="flex flex-col gap-5 items-center mx-auto lg:flex-row justify-around p-4">
        <img src="{{ asset('imagenes/index/auditorio.jpg') }}" class="rounded float lg:w-[40%] shadow-lg" alt="...">
        <img src="{{ asset('imagenes/index/juegos.jpg') }}" class="rounded float lg:w-[30%] shadow-lg" alt="...">
    </div>

    <h2 class="text-5xl text-center my-8 font-bold">Noticias</h2>
    <section class="flex lg:flex-row flex-col p-4 gap-4 justify-around mx-auto max-w-7xl">
        <x-card-noticias titulo="Título de la noticia" fecha="09 Octubre 2024"
            imagen="{{ asset('imagenes/index/noticia1.png') }}" descripcion="Descripcion de prueba" />
        <x-card-noticias titulo="Título de la noticia" fecha="09 Octubre 2024"
            imagen="{{ asset('imagenes/index/noticia1.png') }}" descripcion="Descripcion de prueba" />
        <x-card-noticias titulo="Título de la noticia" fecha="09 Octubre 2024"
            imagen="{{ asset('imagenes/index/noticia1.png') }}" descripcion="Descripcion de prueba" />
    </section>
    <div class="w-full text-center py-4">
        <a href="/noticias" class="text-xl bg-neutral-950 text-white p-3 hover:shadow-2xl">Ver todas las noticias</a>
    </div>
@endsection
