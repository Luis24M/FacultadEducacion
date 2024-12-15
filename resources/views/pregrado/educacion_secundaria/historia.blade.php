@extends('layouts.home')

@section('content')
    <style>
        button.active {
            background-color: #A54332;
            color: #22520479
        }
    </style>

    <h1 class="text-3xl md:text-5xl text-[#F0F0F2] bg-[#A54332] w-full p-4 font-bold">Mencion Historia y Geografia</h1>

    <section class="max-w-[1050px] flex flex-col mx-auto p-5 md:px-0">
        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-[#E1DFD1] bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>

            <button
                class="btn-nav bg-pink-100 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="perfil">
                Perfiles
            </button>

            <button
                class="btn-nav bg-pink-100 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="campo">
                Campo Ocupacional
            </button>

            <button
                class="btn-nav bg-pink-100 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="plan-estudios">
                Plan de Estudios
            </button>

            <button
                class="btn-nav bg-pink-100 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="contactanos">
                Contactanos
            </button>

        </section>

        <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">

            <section class="contenido active" id="nosotros">

                <div class="lg:flex lg:space-x-10">

                    <!-- Columna de Misión -->
                    <div class="flex-1 mb-5 md:mb-0">

                        <div class="flex text-gray-700">

                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14"
                                class="text-[#A54332]">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-[#A54332] mb-4">
                                Misión
                            </h3>

                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                            Formar profesionales en Educación, en la especialidad de Historia y Geografía, con capacidades
                            científicas y cualidades humanísticas que responden a las necesidades sociales de nuestra
                            comunidad; contribuyendo al desarrollo sostenible local, regional y nacional.
                        </p>
                    </div>

                    <div class="flex-1">
                        <div class="flex text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14"
                                class="text-[#A54332]">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-[#A54332] mb-4">Visión</h3>
                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                            Al 2025 seremos un programa académico líder reconocido a nivel regional y nacional en la
                            formación
                            de docentes de Historia y Geografía con sólidos conocimientos humanísticos, científicos y
                            tecnológicos; con ética, vocación de servicio, equidad y justicia que contribuyan a fortalecer
                            la
                            identidad cultural y ciudadanía para la solución de los problemas de su entorno en un ambiente
                            democrático.</br>
                            <b class="text-sm italic">Currículo del Programa de Estudios de Educación Secundaria Mencion
                                Historia y Geografia(2021)</b>.
                        </p>
                    </div>
            </section>

            <section class="contenido active" id="campo" style="display:none;">
                <h2 class="text-xl text-[#A54332] font-semibold mb-4">Campo Ocupacional</h2>

                <div class="container">

                    <p class="text-black">Las salidas profesionales para un Licenciado en Educación con Mención en
                        Historia y Geografia, abarcan diversas áreas:</p>
                    <ul class=" list-inside text-black ml-8">

                        <li class="flex mt-2">
                            <i class="text-[#A54332]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Docencia en Educación Secundaria: </span> Imparte clases en
                                instituciones de Educación Básica Regular y Educación Básica Alternativa, tanto en
                                el sector público como privado, especializándose en las áreas de Historia
                                y geografia.
                                Contribuye al desarrollo integral de los adolescentes, promoviendo el análisis
                                crítico y
                                la comprensión de aspectos fundamentales de la sociedad y la mente humana.
                            </p>

                        </li>
                        <li class="flex mt-2">
                            <i class="text-[#A54332]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Docencia en Educación Superior: </span>Imparte clases en
                                institutos superiores tecnológicos, pedagógicos y universidades, tanto en el
                                ámbito público como privado. Comparte su experiencia y conocimientos especializados en
                                Historia y geoografia, guiando a estudiantes en su formación académica y
                                profesional.
                            </p>

                        </li>
                        <li class="flex mt-2">
                            <i class="text-[#A54332]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Gerencia y Gestión Educativa: </span> Lidera y gestiona
                                instituciones educativas, tanto públicas como privadas, donde desarrollen labores
                                de educacion ligadas a la formacion y construccion de la identidad local y regional: ONG,
                                Departamento de educacion en las cooperativas de ahorro y credito y similares
                            </p>

                        </li>
                    </ul>
                </div>

            </section>

            <section class="contenido flex" id="perfil" style="display: none;">
                <h2 class="text-lg md:text-xl text-color font-bold">Perfil de Ingresante</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Comprende, analiza y explica textos ligados al área de Ciencias Sociales.</li>
                    <li>Posee una actitud crítica frente a los problemas de su entorno y asume un compromiso ante el
                        cambio social.</li>
                    <li>Posee y maneja procedimientos intermedios de informática aplicada a la educación.</li>
                    <li>Posee conocimientos, aptitudes y actitud que le permite profundizar los contenidos en Historia
                        y geografía.</li>
                    <li>Argumenta críticamente en forma coherente y objetiva los hechos, procesos y fenómenos
                        histórico-geográficos.</li>
                    <li>Aprecia y cultiva manifestaciones artísticas.</li>
                    <li>Respeta y tolera la diversidad socio-cultural.</li>
                    <li>Respeta y conserva el medio ambiente.</li>
                    <li>Capacidad de observación y problematización de los hechos y fenómenos sociales.</li>
                    <li>Disposición hacia el trabajo grupal para el aprendizaje.</li>
                    <li>Cualidades de asertividad, responsabilidad y empatía.</li>
                </ul>
                <br>
                <h2 class="text-lg md:text-xl text-color font-bold">Perfil Profesional de Egresado</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Promueve conductas basadas en el respeto, tolerancia, autonomía y la responsabilidad como ejes
                        éticos del ser humano mostrando un compromiso personal en su desempeño profesional y social.</li>

                    <li>Desarrolla procesos de diseño, planificación, ejecución y evaluación curricular en la especialidad
                        de Historia y Geografía a partir de la comprensión de teorías psicopedagógicas utilizando soportes
                        tecnológicos y la investigación científica; y considerando la diversidad cultural, la inclusión y
                        actuando con responsabilidad social.</li>

                    <li>Comprende los procesos y hechos históricos - geográficos y utiliza las teorías, métodos y técnicas
                        de la Historia y la Geografía, para contribuir al desarrollo de la cultura, la sociedad y la
                        preservación
                        del medio ambiente regional, nacional y mundial, promoviendo el espíritu crítico y una conciencia
                        histórica.</li>

                    <li>Investiga a partir de la reflexión diversos fenómenos y hechos pedagógicos relacionados a la
                        Historia y Geografía para aportar y fortalecer el desarrollo educativo y social con responsabilidad
                        y ética profesional.</li>
                </ul>
            </section>
            <section class="contenido text-center" id="plan-estudios" style="display: none;">
                <div
                    class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center [&>div]:py-5">
                    <div class="bg-[#E1DFD1] lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">10</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Semestres académicos</h2>
                    </div>
                    <div class="bg-[#A54332] lg:col-span-4">
                        <h3>Grado Académico</h3>
                        <img src="{{ asset('icons/graduation.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-black text-lg">Bachiller en Educación Secundaria – Mención:
                            Historia y geografia</h2>
                    </div>
                    <div class="bg-[#A54332] lg:col-span-4">
                        <h3>Titulo</h3>
                        <img src="{{ asset('icons/diploma.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-black text-lg">Licenciado en Educación Secundaria – Mención:
                            Historia y geografia</h2>
                    </div>
                    <div class="bg-[#E1DFD1] lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">220</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Créditos</h2>
                    </div>
                </div>
                <a class="px-8 rounded-lg py-4 mt-10 bg-[#fee346] hover:shadow-xl transition-all ease-linear duration-300 hover:text-[#F0F0F2]"
                    href="https://drive.google.com/file/d/1GEr1Ozk4sdpm_9papTzElEYKv6_vYpbe/view" target="_blank">Ver
                    Malla Curricular</a>
            </section>

            <section class="contenido text-center" id="contactanos" style="display: none;">
                <x-form-programa color="[#A54332]" programa="Historia y geografia"/>
            </section>

        </section>

        <section class="datos order-first p-5 md:px-20 mx-auto my-6 grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            <!-- Primera columna: Bienvenida -->
            <div class="bg-[#E1DFD1] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Bienvenida</h3>
                <p class="text-black">"Bienvenidos a la Escuela Profesional de Educación Secundaria Mención Historia y
                    geografia,
                    un espacio donde la excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."
                </p>
            </div>

            <!-- Segunda columna: Dr. Manuel Quipuscoa Silvestre -->
            <div class="bg-[#F0F0F2] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👨‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Dr. Carlos Oswaldo Caballero Alayo</h3>
                <p class="text-black">Director de la Escuela Profesional de Secundaria<br>Universidad Nacional de Trujillo
                </p>
                <a href="mailto:inicial@unitru.edu.pe"
                    class="text-md font-bold text-black mb-2">secundaria@unitru.edu.pe</a>
            </div>

            <!-- Tercera columna: Mg. Patricia Roxana Vela Gálvez -->
            <div class="bg-[#E1DFD1] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Sra. Mercedes Pilar Chuica Flores</h3>
                <p class="text-black">Asistente Administrativa.</p>
            </div>
        </section>
    </section>

    <style>
        @media(max-width:1100px) {
            .datos {
                flex-direction: column;
            }

            .datos>div {
                width: 100%;
            }

            .datos>div>img {
                height: 350px;
            }
        }
    </style>

    <script src="{{ asset('js/main.js') }}"></script>
@endsection
