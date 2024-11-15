@extends('layouts.home')

@section('content')
<div class="container py-12">
    <div style="display: grid; grid-template-columns: 3fr 1fr; gap: 20px;">

        <div class="bg-white p-4 rounded shadow mx-3">
            <h5 class="text-center font-bold">
                <span class="px-3 py-1 bg-light text-primary font-weight-bold border border-primary rounded text-3xl"
                    style="display: inline-block; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    Nuestros Representantes
                </span>
            </h5>
        <div style="display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 10px; margin-top: 20px;">

                <div class="bg-light p-3 text-center rounded" style= "background-color: #F0F6FE";>
                    
                <div class="card shadow-sm text-center">
                        <div class="p-3">
                            <img src="{{ asset('/colaboradores/unidades/Cristian Raymound Gutiérrez Ulloa.jpg') }}"
                                class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                                alt="Director de Calidad"
                                onerror="this.src='{{ asset('images/default-profile.jpg') }}'">
                        </div>
                        <div class="p-3">
                            <h5 class="font-bold">Director de Investigación</h5>
                            <h5 class="font-bold">Dr. Cristian Raymound Gutiérrez Ulloa</h5>
                            <h5 class="font-bold">investigacion_educacion@unitru.edu.pe</h5>
                        </div>
                </div>

                </div>

                <div class="bg-light p-3 text-center rounded" style= "background-color: #F0F6FE";>

                <div class="card shadow-sm text-center">
                        <div class="p-3">
                            <img src="{{ asset('/colaboradores/MUJER DEFAULT.jpg') }}"
                                class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                                alt="Director de Soporte"
                                onerror="this.src='{{ asset('images/default-profile.jpg') }}'">
                        </div>
                        <div class="p-3">
                            <h5 class="font-bold">Coordinador de practicas preprofesionales</h5>
                            <h5 class="font-bold">Falta coordinar</h5>
                            <h5 class="font-bold">Falta coordinar</h5>
                        </div>
                </div>
                
                </div>

                <div class="bg-light p-3 text-center rounded" style= "background-color: #F0F6FE";>
                    
                <div class="card shadow-sm text-center">
                        <div class="p-3">
                            <img src="{{ asset('/colaboradores/unidades/Liliana Marcela Mendoza Montoya.jpg') }}"
                                class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                                alt="Director de Investigación"
                                onerror="this.src='{{ asset('images/default-profile.jpg') }}'">
                        </div>
                        <div class="p-3">
                            <h5 class="font-bold">Coordinadora de Responsabilidad Social</h5>
                            <h5 class="font-bold">Dra. Liliana Marcela Mendoza Montoya</h5>
                        </div>
                </div>

                </div>

                <div class="bg-light p-3 text-center rounded" style= "background-color: #F0F6FE";>
                    
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

                <div class="bg-light p-3 text-center rounded" style= "background-color: #F0F6FE";>
                    
                <div class="card shadow-sm text-center">
                        <div class="p-3">
                            <img src="{{ asset('/colaboradores/unidades/Liz Maribel García Salirrosas.jpg') }}"
                                class="rounded-full mx-auto w-[220px] h-[220px] object-cover"
                                alt="Director de Responsabilidad Social"
                                onerror="this.src='{{ asset('images/default-profile.jpg') }}'">
                        </div>
                        <div class="p-3">
                            <h5 class="font-bold">Presidenta de Calidad</h5>
                            <h5 class="font-bold">Dra. Liz Maribel García Salirrosas</h5>
                            <h5 class="font-bold">facedu_calidad@unitru.edu.pe</h5>
                        </div>
                </div>


                </div>

                <div class="bg-light p-3 text-center rounded" style= "background-color: #F0F6FE";>
                    
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


            </div>
        </div>

        <!-- Columna derecha (3/4 de ancho) -->
        <div class="bg-white p-4 rounded shadow mx-3">

            <p class="text-center font-weight-bold mt-5" style="font-weight: bold; font-size: 1.25rem; color: #007BFF;">UNIDADES ACADÉMICAS</p>

            <p class="text-center mb-4 mt-5">Comprometidos con la excelencia académica y el desarrollo profesional</p>

            <p class="text-center font-weight-bold mt-5" style="font-weight: bold; font-size: 1.25rem; color: #007BFF;">NUESTRAS UNIDADES</p>

            <p class="text-center font-weight-bold mt-5">   
                <span class="d-inline-block px-4 py-2 border border-gray-600 bg-gray-300">
                    Unidad de Calidad
                </span>
            </p>

            <p class="text-center font-weight-bold mt-5">Garantizamos los más altos estándares educativos mediante procesos de evaluación y mejora continua</p>

            <p class="text-center font-weight-bold mt-5">   
                <span class="d-inline-block px-4 py-2 border border-gray-600 bg-gray-300">
                    Unidad de Soporte
                </span>
            </p>

            <p class="text-center font-weight-bold mt-5">Brindamos apoyo integral a estudiantes y docentes para optimizar el proceso de enseñanza-aprendizaje</p>

            <p class="text-center font-weight-bold mt-5">   
                <span class="d-inline-block px-4 py-2 border border-gray-600 bg-gray-300">
                    Unidad de Investigación
                </span>
            </p>

            <p class="text-center font-weight-bold mt-5">Promovemos la investigación académica y el desarrollo de proyectos innovadores</p>

            <p class="text-center font-weight-bold mt-5">   
                <span class="d-inline-block px-4 py-2 border border-gray-600 bg-gray-300">
                    Prácticas Preprofesionales
                </span>
            </p>

            <p class="text-center font-weight-bold mt-5">Facilitamos la inserción laboral mediante experiencias prácticas en entornos profesionales</p>

            <p class="text-center font-weight-bold mt-5">   
                <span class="d-inline-block px-4 py-2 border border-gray-600 bg-gray-300">
                    Unidad de Responsabilidad Social
                </span>
            </p>

            <p class="text-center font-weight-bold mt-5">Promovemos el compromiso social y la participación activa en proyectos comunitarios.</p>
            
        </div>
    </div>
</div>
@endsection