@extends('layouts.home')

@section('content')
    <style>
        button.active {
            background-color: #ffd8f8;
            color: black;
        }
    </style>

    <h1 class="text-3xl md:text-5xl text-[#464646] bg-pink-100 w-full p-7 font-bold">Escuela Profesional de Educación Inicial</h1>

    <section class="max-w-[1050px] flex flex-col justify-between mx-auto p-5 md:px-0">
        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-gray-500 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>

            <button
                class="btn-nav bg-gray-500 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="perfil">
                Perfiles
            </button>

            <button
                class="btn-nav bg-gray-500 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="campo">
                Campo Ocupacional
            </button>

            <button
                class="btn-nav bg-gray-500 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="plan-estudios">
                Plan de Estudios
            </button>

            <button
                class="btn-nav bg-gray-500 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="contactanos">
                Contactanos
            </button>
        </section>

        <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">
            <section class="contenido active" id="nosotros">
                <div class="lg:flex lg:space-x-10">
                    <div class="flex-1 mb-5 md:mb-0">
                        <div class="flex text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425"
                                    clip-rule="evenodd" />
                            </svg>
                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-pink-300 mb-4">
                                Misión
                            </h3>
                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                        Somos una unidad académica profesional, formamos profesionales competentes en la
                        educación infantil, con calidad humana, con capacidades, habilidades y actitudes;
                        desarrollamos investigación científica, responsabilidad social y una adecuada gestión
                        educativa, para el desarrollo sostenible de la localidad, la región y el país.</br>
                        </p>
                    </div>
                    <div class="flex-1">
                        <div class="flex text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-pink-300 mb-4">Visión</h3>
                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                        Al 2024, líder y acreditada a nivel nacional e internacional, reconocida por su calidad, por
                        su vocación democrática, por la formación de profesionales en la educación infantil, la
                        investigación científica y responsabilidad social; manteniendo vínculos con los grupos de
                        interés y contribuyendo al desarrollo local, regional y nacional.</br>
                        <b class="text-sm italic">“Currículo del Programa de Estudios de Educación Inicial(2021)”.</b>
                        </p>
                    </div>
                </div>
            </section>
            <section class="contenido lg:flex" id="perfil" style="display:none;">
                <div>
                    <h2 class="text-lg md:text-xl font-bold text-pink-300 mb-4">Perfil de Ingresante</h2>

                    <ul class="list-disc flex flex-col gap-1 p-4 text-gray-700">
                        <li>Tiene una formación básica en las tecnologías de la información y la comunicación (TIC).</li>
                        <li>Se comunica oralmente, lee y escribe diversos tipos de textos.</li>
                        <li>Tiene un acervo cultural y científico básico que le permite comprender la realidad.</li>
                        <li>Identifica proyectos de emprendedurismo económico social.</li>
                        <li>Muestra una actitud de respeto a las normas de convivencia y del medioambiente.</li>
                        <li>Se desenvuelve demostrando equilibrio emocional y salud físicamental.</li>
                        <li>Organiza su aprendizaje y trabaja en equipo.</li>
                        <li>Aprecia las manifestaciones artístico-culturales.</li>
                        <li>Comprende, analiza y utiliza la lógica y las matemáticas de modo pertinente y creativo para
                            resolver
                            problemas del contexto real y de la vida académica.</li>
                        <li>Convive y participa en forma democrática y construye interpretaciones históricas.</li>
                    </ul>
                </div>
                <br>
                <div>
                    <h2 class="text-lg md:text-xl font-bold text-pink-300 mb-4">Perfil Profesional de Egresado</h2>
                    <ul class="list-disc flex flex-col gap-1 p-4">
                        <li>Gestiona habilidades investigativas usando razonamiento lógico, matemático, conocimientos
                            informáticos y científicos para solucionar problemas a nivel regional y nacional.</li>

                        <li>Gestiona su aprendizaje de forma autónoma y continua, adaptándose a nuevas situaciones con
                            creatividad, liderazgo y compromiso, promoviendo la convivencia y el desarrollo cultural y
                            nacional.</li>

                        <li>Reflexiona y demuestra en su práctica pedagógica confianza, emprendimiento, comunicación
                            asertiva, trabajo en equipo y responsabilidad ética, contribuyendo al desarrollo sostenible y
                            comprensión de la realidad.</li>

                        <li>Demuestra capacidad crítica e innovadora y compromiso ético y social para promover el desarrollo
                            sostenible, respetando la diversidad cultural.</li>

                        <li>Gestiona la formación integral de estudiantes de educación inicial, promoviendo aprendizajes
                            críticos y reflexivos en un contexto inclusivo y diverso.</li>

                        <li>Investiga su práctica pedagógica, desarrollando investigación científica e innovaciones para
                            mejorar la enseñanza, interactuando en comunidades virtuales.</li>

                        <li>Lidera la gestión educativa de forma democrática, colaborando con familias y comunidades, y
                            participando en proyectos sociales y educativos enfocados en la calidad del aprendizaje.</li>

                    </ul>
                </div>
            </section>
            <section class="contenido active" id="campo" style="display:none;">
                <h2 class="text-xl text-pink-300 font-semibold mb-4">Campo Ocupacional</h2>
                <div class="container">
                    <p class="text-black">Las salidas profesionales para un Licenciado en Educación Inicial
                        abarcan diversas áreas:</p>
                    <ul class=" list-inside text-black ml-8">
                        <li class="flex mt-2">
                            <i class="text-pink-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Gestión pedagógica: </span> Docentes de niños en Cunas o Jardines de infancia, Coordinación en PRONOEI
                                (Programas no Escolarizados en
                                Educación Inicial) o Programa Cuna Más.
                            </p>
                        </li>
                        <li class="flex mt-2">
                            <i class="text-pink-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Gestión institucional: </span>Promotor y gestor de Instituciones educativas (IE), Directores o subdirectores de
                                IE, Director de UGEL o jefe de gestión pedagógica, Especialista en educación.
                            </p>
                        </li>
                        <li class="flex mt-2">
                            <i class="text-pink-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold ">Formación docente: </span>Docencia en educación superior, acompañamiento pedagógico en programas de MINEDU,
                                Mentoría en IE.
                            </p>
                        </li>

                        <li class="flex mt-2">
                            <i class="text-pink-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold ">Innovación e investigación:</span>Diseño, implementación y evaluación de proyectos de innovación pedagógica e
                                investigación educativa, estudios y análisis sistemático de la pedagogía y proyectos pedagógicos,
                                científicos y tecnológicos.
                            </p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="contenido text-center " id="plan-estudios" style="display:none;">
                <div
                    class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center [&>div]:py-5">
                    <div class="bg-gray-200 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">10</p>
                        <h2 class="font-semibold text-lg">Semestres académicos</h2>
                    </div>
                    <div class="bg-pink-100 lg:col-span-4">
                        <h3>Grado Académico</h3>
                        <img src="{{ asset('icons/graduation.svg') }}" alt="grade-icon" class="w-16">
                        <h2 class="font-semibold text-lg">Bachiller en Educación Inicial</h2>
                    </div>
                    <div class="bg-pink-100 lg:col-span-4">
                        <h3>Titulo</h3>
                        <img src="{{ asset('icons/diploma.svg') }}" alt="diploma-icon" class="w-16">
                        <h2 class="font-semibold  text-lg">Licenciado en Educación Inicial</h2>
                    </div>
                    <div class="bg-gray-200 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">220</p>
                        <h2 class="font-semibold text-lg">Créditos</h2>
                    </div>
                </div>

                <a href="https://dpaunt.edu.pe/curriculos/19.pdf" target="_blank" rel="nofollow"
                    class="p-3 mt-4 bg-pink-300 text- rounded-md font-semibold text-black hover:bg-pink-500 transition-all ease-linear duration-300 hover:shadow-lg  text-center">
                    Ver Malla Curricular
                </a>

            </section>
        </section>
        <section class="contenido text-center" id="contactanos" style="display: none;">
            {{-- <section class="lg:flex p-5 md:px-20 justify-center"> --}}
                <x-form-programa color="pink-400" programa="Inicial"/>
        </section>
        
        <section class="datos order-first p-5 mx-auto my-6 grid grid-cols-1 lg:grid-cols-3 gap-6 text-black-100 ">
            <div class="bg-pink-200 p-6 rounded-lg shadow-lg text-center text-black">
                <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Bienvenida</h3>
                <p class="text-black">"Bienvenidos a la Escuela Profesional de Educación Inicial, un espacio donde la
                    excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."</p>
            </div>

            <!-- Segunda columna: Dr. Manuel Quipuscoa Silvestre -->
            <div class="bg-gray-300 p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Dra. Hilda Jara León</h3>
                <p class="text-gray-900">Directora de la Escuela Profesional de Educación Inicial</p>
                <a href="mailto:inicial@unitru.edu.pe" class="text-md font-bold text-gray-900 mb-2">inicial@unitru.edu.pe</a>
            </div>

            <!-- Tercera columna: Mg. Patricia Roxana Vela Gálvez -->
            <div class="bg-pink-200 p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Lic. Liliana Mercedes Polonio Chávez </h3>
                <p class="text-black">Asistente administrativa</p>
            </div>
        </section>
        

    </section>
    <style>
        @media(max-width: 1200px) {
            .datos{
                grid-template-columns: repeat(1, 1fr);
                padding: 15px 40px;
            }
        }
    </style>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
