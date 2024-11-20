@extends('layouts.home')

@section('content')

<section class="bg-[#483D8B] text-white py-5 flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-extrabold">Unidades Académicas</h1>
    </div>
</section>

<div class="container py-12">
    <div class="bg-white p-4 rounded shadow mx-3">
        <h5 class="text-center font-bold">
            <span class="px-3 py-1 bg-light text-primary font-weight-bold border border-primary rounded text-3xl"
                style="display: inline-block; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                Nuestros Representantes
            </span>
        </h5>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px;">

            <div class="bg-light p-3 text-center rounded" style="background-color: #F0F6FE;">
                <div class="card shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/colaboradores/unidades/Cristian Raymound Gutiérrez Ulloa.jpg') }}"
                            class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                            alt="Director de Calidad">
                    </div>
                    <div class="p-3">
                        <h5 class="font-bold">Director de Investigación</h5>
                        <h5 class="font-bold">Dr. Cristian Raymound Gutiérrez Ulloa</h5>
                        <h5 class="font-bold">investigacion_educacion@unitru.edu.pe</h5>
                    </div>
                </div>
            </div>

            <div class="bg-light p-3 text-center rounded" style="background-color: #F0F6FE;">
                <div class="card shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/colaboradores/MUJER DEFAULT.jpg') }}"
                            class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                            alt="Director de Soporte">
                    </div>
                    <div class="p-3">
                        <h5 class="font-bold">Coordinadora de practicas preprofesionales</h5>
                    </div>
                </div>
            </div>

            <div class="bg-light p-3 text-center rounded" style="background-color: #F0F6FE;">
                <div class="card shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/colaboradores/unidades/Liliana Marcela Mendoza Montoya.jpg') }}"
                            class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                            alt="Director de Investigación">
                    </div>
                    <div class="p-3">
                        <h5 class="font-bold">Coordinadora de Responsabilidad Social Universitaria</h5>
                        <h5 class="font-bold">Dra. Liliana Marcela Mendoza Montoya</h5>
                    </div>
                </div>
            </div>

            <div class="bg-light p-3 text-center rounded" style="background-color: #F0F6FE;">
                <div class="card shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/colaboradores/unidades/Julio Hernán Luna Victoria Valdivia.jpg') }}"
                            class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                            alt="Coordinador de Prácticas"
                            style="object-position: center 30%;"
                            onerror="this.src='{{ asset('images/default-profile.jpg') }}'">
                    </div>
                    <div class="p-3">
                        <h5 class="font-bold">Responsable de Soporte</h5>
                        <h5 class="font-bold">Ing. Julio Hernán Luna Victoria Valdivia</h5>
                    </div>
                </div>
            </div>


            <div class="bg-light p-3 text-center rounded" style="background-color: #F0F6FE;">
                <div class="card shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/colaboradores/MUJER DEFAULT.jpg') }}"
                            class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                            alt="Coordinador de Tutoria"
                            onerror="this.src='{{ asset('images/default-profile.jpg') }}'">
                    </div>
                    <div class="p-3">
                        <h5 class="font-bold">Coordinador de Tutoria</h5>
                    </div>
                </div>
            </div>

            <div class="bg-light p-3 text-center rounded" style="background-color: #F0F6FE;">
                <div class="card shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/colaboradores/unidades/Liz Maribel García Salirrosas.jpg') }}"
                            class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                            alt="Coordinador de Prácticas">
                    </div>
                    <div class="p-3">
                        <h5 class="font-bold">Presidenta de Calidad</h5>
                        <h5 class="font-bold">Dra. Liz Maribel García Salirrosas</h5>
                        <h5 class="font-bold">facedu_calidad@unitru.edu.pe</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>  
</div>
@endsection