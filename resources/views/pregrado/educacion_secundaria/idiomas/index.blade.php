@extends('layouts.app')

@section('content')

    <section class="min-h-60 md:min-h-96 w-full bg-blue-800 flex items-center justify-center gap-5 p-10 ">
        <div class="flex flex-col justify-center gap-5 text-center ">
            <h1 class="text-xl md:text-4xl text-white font-semibold ">
                Mención Idiomas: Inglés-Francés / Inglés-Alemán
            </h1>
            <p class="text-md md:text-base text-white">
                Formando líderes en el aprendizaje de idiomas, para educar con excelencia en un mundo globalizado.
            </p>
        </div>

        <img src="https://via.placeholder.com/300x200?text=imagen+Prueba" alt="escuela de educación inicial"
            class="w-2/5 shadow-lg hidden lg:block">

    </section>

    <!-- perfil -->
    <section class="md:flex p-5" id="perfil">
        <div class="container mx-auto p-5">
            <h2 class="text-2xl text-red-900 font-semibold">Perfil Profesional</h2>
            <p class="text-gray-700">Un Licenciado en Educación Secundaria con Mención en Inglés-Frances o Inglés Alemán es un profesional comprometido con la formación integral de estudiantes adolescentes. 
            </p>
            <br>
            <p class="text-gray-700">
                Este educador posee sólidos conocimientos en pedagogía y didáctica, especializándose en la enseñanza de los idiomas inglés y, francés o alemán. Su enfoque abarca el desarrollo de habilidades lingüísticas, la promoción de la comunicación efectiva y la apertura a la diversidad cultural.
            </p>
            <br>
            <p class="text-gray-700">
                Con una pasión por inspirar el amor por los idiomas, este licenciado contribuye al crecimiento académico y personal de sus estudiantes, preparándolos para enfrentar un mundo globalizado con confianza y competencia lingüística.
            </p>    

        </div>

        <div class="container mx-auto p-5">
            <h2 class="text-2xl text-red-900 font-semibold">Campo Ocupacional</h2>
            <p class="text-gray-700">Las salidas profesionales para un Licenciado en Educación con Mención en Idiomas abarcan diversas áreas:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>
                    <span class="font-bold "> Enseñanza de idiomas: </span> Imparte clases de idiomas en diversos entornos educativos, guiando a los estudiantes en su aprendizaje y creando un ambiente dinámico.
                </li>
                <li>
                    <span class="font-bold "> Gestión de instituciones educativas: </span> Lidera y administra instituciones, organizando recursos y tomando decisiones estratégicas para fomentar un entorno de aprendizaje óptimo.
                </li>
                <li>
                <span class="font-bold "> Asesoramiento y consultoría: </span> Ofrece orientación a otros educadores en programas de capacitación, mejorando la calidad pedagógica y el entorno educativo.
                </li>
                <li>
                <span class="font-bold ">Liderazgo de proyectos educativos: </span>Emprende iniciativas educativas innovadoras, liderando proyectos que transforman la educación con prácticas pedagógicas creativas y efectivas.
                </li>              
                
            </ul>
    </section>

    <!-- plan de estudios -->
    <section class="p-5 md:flex" id="planEstudios">
        <div class="container mx-auto p-5 md:w-1/3">
            <h2 class="text-2xl text-red-900 font-semibold">Plan de Estudios</h2>

            <div class="pl-3">
                <ul class="list-disc list-inside text-gray-700">
                    <li>
                        <span class="font-bold"> Duración de Estudios: </span> 10 semestres académicos.
                    </li>
                    <li>
                    <span class="font-bold">Grado Académico: </span> Bachiller en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán.
                    </li>
                    <li>
                        <span class="font-bold">Título Profesional: </span>Licenciado en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán.
                    </li>
                </ul>
            </div>
        
            <a href="https://dpaunt.edu.pe/curriculos/19.pdf" target="_blank" rel="nofollow"
                class="p-3 w-full mt-4 bg-yellow-400 text-black rounded-md font-semibold text-white hover:bg-yellow-500 block text-center">
                Ver Malla Curricular
            </a>
        </div>

        <div class="container mx-auto rounded-lg">
            <iframe class="w-full h-56 md:h-80" src="https://youtu.be/LjBkM77MPlo" title="Video informativo"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </section>


    <!-- Personal Docente y Administrativo -->
    <section class="bg-gray-100 p-5 mb-8 rounded-lg" id="planaDocente">
        <div class="container p-5">
            <h3 class="text-2xl text-red-900 font-semibold"> Docentes </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-4 bg-white shadow rounded-lg">
                    <img src="https://via.placeholder.com/300x200?text=Juan+Pérez" alt="Juan Pérez" class="w-full h-48 object-cover rounded-lg">
                    <h4 class="font-semibold text-gray-800 mt-2">Dr. Juan Pérez</h4>
                    <p class="text-gray-600 mt-2">Profesor titular, especialista en traducción e interpretación.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg">
                    <img src="https://via.placeholder.com/300x200?text=Ana+García" alt="Ana García" class="w-full h-48 object-cover rounded-lg">
                    <h4 class="font-semibold text-gray-800 mt-2">Mgtr. Ana García</h4>
                    <p class="text-gray-600 mt-2">Coordinadora académica, con énfasis en la enseñanza del inglés como segunda lengua.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg">
                    <img src="https://via.placeholder.com/300x200?text=Ana+García" alt="Ana García" class="w-full h-48 object-cover rounded-lg">
                    <h4 class="font-semibold text-gray-800 mt-2">Mgtr. Ana García</h4>
                    <p class="text-gray-600 mt-2">Coordinadora académica, con énfasis en la enseñanza del inglés como segunda lengua.</p>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection