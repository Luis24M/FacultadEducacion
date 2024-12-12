@extends('layouts.home')

@section('content')
    <style>
        button.active {
            background-color: #FFD700;
            color: #8B0000
        }
    </style>

    <h1 class="text-3xl md:text-5xl text-[#8B0000] bg-[#FFD700] w-full p-7 font-bold">Mención Filosofía, Psicología y CCSS</h1>

    <section class="max-w-[1050px] flex flex-col mx-auto p-5 md:px-0">
        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-red-500 bg-opacity-20 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>

            <button
                class="btn-nav bg-red-500 bg-opacity-20 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="perfil">
                Perfiles
            </button>

            <button
                class="btn-nav bg-red-500 bg-opacity-20 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="campo">
                Campo Ocupacional
            </button>

            <button
                class="btn-nav bg-red-500 bg-opacity-20 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="plan-estudios">
                Plan de Estudios
            </button>
            <button
                class="btn-nav bg-red-500 bg-opacity-20 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
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

                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-[#8B0000] mb-4">
                                Misión
                            </h3>

                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                            El Programa de Estudios de Filosofía, Psicología y Ciencias Sociales tiene la
                            misión de contribuir al desarrollo económico, político y cultural de la localidad, la
                            región y el país, formando profesionales competentes para desarrollar procesos
                            de investigación científica, administración gestión educativa y de
                            responsabilidad social para una mejor convivencia humana.
                        </p>
                    </div>

                    <div class="flex-1">
                        <div class="flex text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-[#8B0000] mb-4">Visión</h3>
                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                            La carrera profesional de Filosofía, Psicología y Ciencias Sociales, en el año 2022, inspirada
                            en los
                            más altos valores científicos y espirituales de la cultura occidental y del mundo andino y
                            amazónico,
                            aspira a ser reconocida nacional e internacionalmente por: estar conformada por un grupo humano
                            capacitado, creativo, solidario y participativo, dinámico y dinamizador del cambio permanente
                            que
                            ofrece servicios educativos de calidad, promueve la formación integral de sus estudiantes que
                            den
                            respuesta a las demandas de la sociedad.
                            Así mismo, promueve una cultura abierta y democrática, en la que predomine el debate académico,
                            la tolerancia y la creatividad orientada a la transformación social, establece vínculos con
                            otras
                            instituciones educativas, locales, nacionales e internacionales para promover el mejoramiento de
                            sus docentes y experiencias curriculares y ejerce una administración académica, que promueve el
                            desarrollo del talento humano y el logro de los objetivos institucionales.</br>
                            <b class="text-sm italic">Currículo del Programa de Estudios de Educacion Secundaria Mencion
                                Filosofia, Psicologia y CCSS(2018)</b>
                        </p>
                    </div>
            </section>

            <section class="contenido active" id="campo" style="display:none;">
                <h2 class="text-xl text-[#8B0000] font-semibold mb-4">Campo Ocupacional</h2>

                <div class="container">

                    <p class="text-black">Las salidas profesionales para un Licenciado en Educación con Mención en
                        Filosofía, Psicología y CCSS, abarcan diversas áreas:</p>
                    <ul class=" list-inside text-black ml-8">

                        <li class="flex mt-2">
                            <i class="text-[#8B0000]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Docencia en Educación Secundaria: </span> Imparte clases en
                                instituciones de Educación Básica Regular y Educación Básica Alternativa, tanto en
                                el sector público como privado, especializándose en las áreas de Filosofía, Psicología y
                                Ciencias
                                Sociales. Contribuye al desarrollo integral de los adolescentes, promoviendo el análisis
                                crítico y
                                la comprensión de aspectos fundamentales de la sociedad y la mente humana.
                            </p>

                        </li>
                        <li class="flex mt-2">
                            <i class="text-[#8B0000]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Docencia en Educación Superior: </span>Imparte clases en
                                institutos superiores tecnológicos, pedagógicos y universidades, tanto en el
                                ámbito público como privado. Comparte su experiencia y conocimientos especializados en
                                Filosofía,
                                Psicología y Ciencias Sociales, guiando a estudiantes en su formación académica y
                                profesional.
                            </p>

                        </li>
                        <li class="flex mt-2">
                            <i class="text-[#8B0000]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Gerencia y Gestión Educativa: </span> Lidera y gestiona
                                instituciones educativas, tanto públicas como privadas, desempeñando roles
                                gerenciales. Contribuye al desarrollo de políticas educativas, implementa mejoras y promueve
                                un
                                ambiente educativo eficiente y participativo.
                            </p>

                        </li>
                        <li class="flex mt-2">
                            <i class="text-[#8B0000]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Asesoramiento y Gestión en Proyectos Educativos: </span> Brinda
                                asesoramiento y gestiona proyectos educativos orientados al desarrollo social. Participa en
                                iniciativas que buscan mejorar la calidad de la educación y su impacto en la sociedad,
                                abordando
                                aspectos relacionados con la filosofía, psicología y ciencias sociales.
                            </p>

                        </li>

                        <li class="flex mt-2">
                            <i class="text-[#8B0000]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold ">Promoción Social, Cultural y Comunal: </span>Participa en
                                actividades y programas que promueven el desarrollo social, cultural y comunal.
                                Colabora en iniciativas que buscan fortalecer el tejido social, fomentar la cultura y
                                contribuir al
                                bienestar de la comunidad en diversos aspectos.
                            </p>

                        </li>

                    </ul>
                </div>

            </section>

            <section class="contenido flex" id="perfil" style="display: none;">
                <h2 class="text-lg md:text-xl text-[#8B0000] font-bold">Perfil de Ingresante</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Utiliza conocimientos del área de Ciencias Sociales, Ciudadanía y de Ciencia y ambiente, en
                        diversas situaciones para mejorar la calidad de vida y cuidado de la biodiversidad.</li>
                    <li>Evidencia habilidades personales y sociales identificándose con su carrera profesional y con su
                        cultura en diferentes contextos.</li>
                    <li>Evidencia vocación de servicio y motivación para la enseñanza.</li>
                </ul>
                <br>
                <h2 class="text-lg md:text-xl text-[#8B0000] font-bold">Perfil Profesional de Egresado</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Realiza investigaciones básicas con un enfoque crítico, utilizando principios de epistemología para
                        comprender problemas naturales, sociales, culturales y humanos, tanto a nivel regional como
                        nacional.</li>

                    <li>Aplica lógica formal y dialéctica (concepto, juicio, raciocinio, demostración, y refutación) en
                        investigaciones científicas, abordando problemas cotidianos y científicos con pensamiento matemático
                        y creatividad.</li>

                    <li>Emplea herramientas de informática y TIC para la producción de materiales académicos y seguridad de
                        la información, fomentando la investigación y el pensamiento crítico en entornos digitales.</li>

                    <li>Usa técnicas de comunicación y redacción académica con lógica y originalidad para analizar y
                        organizar información, desarrollando habilidades de análisis y argumentación sobre temas relevantes
                        de la realidad nacional y regional.</li>

                    <li>Fomenta la participación activa y crítica en su entorno mediante habilidades de comunicación,
                        trabajo en equipo, empatía, y creatividad, valorando la diversidad y desarrollando proyectos de
                        impacto social.</li>

                    <li>Promueve una perspectiva integral sobre el cuidado de la salud física y mental, el respeto a la
                        naturaleza, y el desarrollo sostenible, abordando estos temas a través de actividades deportivas,
                        artísticas, y ecológicas.</li>
                </ul>
            </section>
            <section class="contenido text-center" id="plan-estudios" style="display: none;">
                <div
                    class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center [&>div]:py-5">
                    <div class="bg-yellow-300 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">10</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Semestres académicos</h2>
                    </div>
                    <div class="bg-red-300 lg:col-span-4">
                        <h3>Grado Académico</h3>
                        <img src="{{ asset('icons/graduation.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-neutral-600 text-lg">Bachiller en Educación Secundaria – Mención:
                            Filosofía, Psicología y Ciencias Sociales</h2>
                    </div>
                    <div class="bg-red-300 lg:col-span-4">
                        <h3>Titulo</h3>
                        <img src="{{ asset('icons/diploma.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-neutral-600 text-lg">Licenciado en Educación Secundaria – Mención:
                            Filosofía, Psicología y Ciencias Sociales</h2>
                    </div>
                    <div class="bg-yellow-300 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">220</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Créditos</h2>
                    </div>
                </div>
                <a class="px-8 rounded-lg py-4 mt-10 bg-[#fee346] hover:shadow-xl transition-all ease-linear duration-300 hover:text-[#8B0000]"
                    href="https://drive.google.com/file/d/1shqj_BwTjKnXLqsNh5ROTwFSyR09yOb-/view?usp=sharing"
                    target="_blank">Ver Malla Curricular</a>
            </section>
        </section>

        <section class="contenido text-center" id="contactanos" style="display: none;">
            <x-form-programa color="[#8B0000]" programa="Filosofía, Psicología y CCSS"/>
        </section>

        <section class="datos order-first p-5 md:px-20 mx-auto my-6 grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            <!-- Primera columna: Bienvenida -->
            <div class="bg-[#fee346] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text- mb-2">Bienvenida</h3>
                <p class="text-">"Bienvenidos a la Escuela Profesional de Educación Secundaria Mención Filosofía,
                    Psicología y CCSS, un espacio donde la excelencia académica se encuentra con la innovación y la pasión
                    por el aprendizaje.</p>
            </div>

            <!-- Segunda columna: Dr. Manuel Quipuscoa Silvestre -->
            <div class="bg-[#8B0000] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👨‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-white mb-2">Dr. Carlos Oswaldo Caballero Alayo</h3>
                <p class="text-white">Director de la Escuela Profesional de Secundaria<br>Universidad Nacional de Trujillo
                </p>
                <a href="mailto:inicial@unitru.edu.pe"
                    class="text-md font-bold text-white mb-2">secundaria@unitru.edu.pe</a>
            </div>

            <!-- Tercera columna: Mg. Patricia Roxana Vela Gálvez -->
            <div class="bg-[#fee346] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text- mb-2">Sra. Mercedes Pilar Chuica Flores</h3>
                <p class="text-">Asistente Administrativa.</p>
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
