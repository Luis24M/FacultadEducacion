@extends('layouts.home')

@section('content')
<style>
    button.active {
        background-color: #1e40af;
        color: white;
    }
</style>

<h1 class="text-3xl md:text-5xl text-white bg-blue-800 w-full p-4 font-bold">Mención Idiomas: Inglés-Francés / Inglés-Alemán</h1>

<section class="max-w-[1050px] mx-auto p-5 md:px-0">

    <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
        <button
            class="btn-nav active bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
            data-target="nosotros">
            Nosotros
        </button>

        <button
            class="btn-nav bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
            data-target="perfil">
            Perfiles
        </button>

        <button
            class="btn-nav bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
            data-target="campo">
            Campo Ocupacional
        </button>

        <button
            class="btn-nav bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
            data-target="plan-estudios">
            Plan de Estudios
        </button>

    </section>

    <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">

        <section class="contenido active" id="nosotros">

            <div class="lg:flex lg:space-x-10">

                <!-- Columna de Misión -->
                <div class="flex-1 mb-5 md:mb-0">

                    <div class="flex text-gray-700">

                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                            <path fill="currentColor" fill-rule="evenodd" d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425" clip-rule="evenodd" />
                        </svg>

                        <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-blue-700 mb-4">
                            Misión
                        </h3>

                    </div>

                    <p class="text-md md:text-lg text-gray-700">
                        “Somos una unidad académica que forma profesionales con excelencia en el área de idiomas, que contribuye al desarrollo sustentable de la Región, del país y del Mundo, y a la formación integral del ser humano dentro del marco del quehacer universitario y con los valores éticos y estéticos”.
                    </p>
                </div>

                <!-- Columna de Visión -->
                <div class="flex-1">
                    <div class="flex text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                            <path fill="currentColor" fill-rule="evenodd" d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z" clip-rule="evenodd" />
                        </svg>

                        <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-blue-700 mb-4">Visión</h3>
                    </div>

                    <p class="text-md md:text-lg text-gray-700">
                        “En el año 2025, seremos una unidad académica acreditada, que contribuye al desarrollo sustentable de la región, del país y del mundo, sensible a las exigencias sociales, que forma profesionales con excelencia académica en idiomas, se proyecta a la comunidad con responsabilidad social, realiza investigación científica, respeta la diversidad cultural y la ecología, y contribuye a la formación integral del ser humano dentro del marco de los valores ético y estéticos”.
                    </p>
                </div>

            </div>

        </section>

        <section class="contenido lg:flex" id="perfil" style="display:none;">
            <div>
                <h2 class="text-lg md:text-xl font-bold text-blue-700 mb-4">Perfil de Ingresante</h2>

                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li class="text-gray-700">Tiene conocimientos básicos de inglés.</li>
                    <li class="text-gray-700">Posee aptitud para el procesamiento de sistemas lingüísticos, demostrando competencias básicas en la comprensión y producción de textos orales y escritos.</li>
                    <li class="text-gray-700">Tiene información básica de las Ciencias Naturales, Sociales y Formales; así como, de la cultura humanística en perspectiva histórica a niveles del Perú y el mundo. Tiene interés por la investigación científica.</li>
                    <li class="text-gray-700">Es crítico, reflexivo y actúa con coherencia y lógica.</li>
                    <li class="text-gray-700">Maneja herramientas básicas en TIC's.</li>
                    <li class="text-gray-700">Muestra capacidad de trabajo individual y en equipo.</li>
                    <li class="text-gray-700">Demuestra interés para el trabajo con jóvenes y adultos.</li>
                    <li class="text-gray-700">Posee un comportamiento sustentado en valores.</li>
                    <li class="text-gray-700">Tiene capacidad de liderazgo, vocación de servicio y sensibilidad social.</li>
                    <li class="text-gray-700">Es tolerante y conciliador.</li>
                    <li class="text-gray-700">Denota una conducta ética en lo personal y social.</li>
                </ul>
            </div>

            <br>

            <div>
                <h2 class="text-lg md:text-xl font-bold text-blue-700 mb-4">Perfil Profesional de Egresado</h2>

                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Un Licenciado en Educación Secundaria con Mención en Inglés-Francés o Inglés-Alemán es un profesional comprometido con la formación integral de estudiantes adolescentes.</li>
                    <li>Este educador posee sólidos conocimientos en pedagogía y didáctica, especializándose en la enseñanza de los idiomas inglés y, francés o alemán. Su enfoque abarca el desarrollo de habilidades lingüísticas, la promoción de la comunicación efectiva y la apertura a la diversidad cultural.</li>
                    <li>Con una pasión por inspirar el amor por los idiomas, este licenciado contribuye al crecimiento académico y personal de sus estudiantes, preparándolos para enfrentar un mundo globalizado con confianza y competencia lingüística.</li>
                </ul>
            </div>
            

        </section>

        <section class="contenido active" id="campo" style="display:none;">
            <h2 class="text-xl text-blue-700 font-semibold mb-4">Campo Ocupacional</h2>

            <div class="container">
                
                <p class="text-black">Las salidas profesionales para un Licenciado en Educación con Mención en Idiomas abarcan diversas áreas:</p>
                <ul class=" list-inside text-black ml-8">

                    <li class="flex mt-2">
                        <i class="text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg>
                        </i>
                        <p class="ml-2 ">
                            <span class="font-bold "> Enseñanza de idiomas: </span> Imparte clases de idiomas en diversos entornos educativos, guiando a los estudiantes en su aprendizaje y creando un ambiente dinámico.
                        </p>

                    </li>
                    <li class="flex mt-2">
                        <i class="text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg>
                        </i>
                        <p class="ml-2 ">
                            <span class="font-bold "> Gestión de instituciones educativas: </span> Lidera y administra instituciones, organizando recursos y tomando decisiones estratégicas para fomentar un entorno de aprendizaje óptimo.
                        </p>

                    </li>
                    <li class="flex mt-2">
                        <i class="text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg>
                        </i>
                        <p class="ml-2 ">
                            <span class="font-bold "> Asesoramiento y consultoría: </span> Ofrece orientación a otros educadores en programas de capacitación, mejorando la calidad pedagógica y el entorno educativo.
                        </p>

                    </li>

                    <li class="flex mt-2">
                        <i class="text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg>
                        </i>
                        <p class="ml-2 ">
                            <span class="font-bold ">Liderazgo de proyectos educativos: </span>Emprende iniciativas educativas innovadoras, liderando proyectos que transforman la educación con prácticas pedagógicas creativas y efectivas.
                        </p>

                    </li>

                </ul>
            </div>

        </section>

        <section class="contenido text-center text-white" id="plan-estudios" style="display:none;">
            <div class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center">
                <div class="bg-blue-600 lg:col-span-2">
                    <p class="text-xl md:text-4xl font-bold">10</p>
                    <h2 class="font-semibold text-lg">Semestres académicos</h2>
                </div>
                <div class="bg-blue-700 lg:col-span-4">
                    <h3>Grado Académico</h3>
                    <img src="{{ asset('icons/graduation.svg') }}" alt="grade-icon" class="w-16">
                    <h2 class="font-semibold text-lg">Bachiller en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán</h2>
                </div>
                <div class="bg-blue-900 lg:col-span-4">
                    <h3>Titulo</h3>
                    <img src="{{ asset('icons/diploma.svg') }}" alt="diploma-icon" class="w-16">
                    <h2 class="font-semibold  text-lg">Licenciado en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán</h2>
                </div>
                <div class="bg-blue-700 lg:col-span-2">
                    <p class="text-xl md:text-4xl font-bold">220</p>
                    <h2 class="font-semibold text-lg">Créditos</h2>
                </div>
            </div>

            <a href="https://drive.google.com/drive/folders/1jElAqShBgEWQAbPhCdqtx9zaF-ZQ3WRH" target="_blank" rel="nofollow"
                class="p-3 w-full mt-4 bg-yellow-400 text-black rounded-md font-semibold text-white hover:bg-yellow-500 block text-center">
                Ver Malla Curricular
            </a>

        </section>

    </section>
</section>

<script src="{{ asset('js/main.js') }}"></script>
@endsection