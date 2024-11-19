@extends('layouts.home')
<!--<link rel="stylesheet" href="{{ asset('style/style2.css')}}">-->
@section('content')
    <style>
        button.active {
            background-color: #52D0F8;
            color: #ffffff;
        }
    </style>

    <h1 class="text-3xl md:text-5xl text-[#252850] bg-[#52D0F8] w-full p-4 font-bold">Mencion Lengua y Literatura</h1>

    <section class="max-w-[1050px] flex flex-col mx-auto p-5 md:px-0">
        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-[#252850] bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>

            <button
                class="btn-nav bg-[#252850] bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="perfil">
                Perfiles
            </button>

            <button
                class="btn-nav bg-[#252850] bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="campo">
                Campo Ocupacional
            </button>

            <button
                class="btn-nav bg-[#252850] bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="plan-estudios">
                Plan de Estudios
            </button>

            <button
                class="btn-nav bg-[#252850] bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
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

                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14" class="text-[#252850]" >
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-[#252850] mb-4">
                                Misión
                            </h3>

                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                            “Somos una unidad académica que forma profesionales en educación con Mención en
                            Lengua y Literatura, y contribuye al desarrollo cognitivo de los estudiantes de otras carreras,
                            con capacidades científicas, tecnológicas y cualidades humanísticas, que responden a las
                            necesidades sociales de nuestra comunidad; impulsando el desarrollo local, regional y
                            nacional en el marco de las funciones universitarias: docencia, investigación y proyección
                            social.
                            ”.
                        </p>
                    </div>

                    <div class="flex-1">
                        <div class="flex text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14" class="text-[#252850]">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-[#252850] mb-4">Visión</h3>
                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                            “En el 2025 somos una carrera líder, acreditada, que forma profesionales en educación
                            secundaria, con mención en, Lengua y Literatura y Comunicación con conocimientos
                            científicos, humanísticos y tecnológicos, con cualidades morales y estéticas; que responden
                            con pertinencia, equidad y calidad al desarrollo integral del hombre en el marco local,
                            regional y nacional.”
                        </p>
                    </div>
            </section>

            <section class="contenido active" id="campo" style="display:none;">
                <h2 class="text-xl text-[#252850] font-semibold mb-4">Campo Ocupacional</h2>

                <div class="container">

                    <p class="text-black">Las salidas profesionales para un Licenciado en Educación con Mención en
                        Lengua y Literatura, abarcan diversas áreas:</p>
                    <ul class=" list-inside text-black ml-8">

                        <li class="flex mt-2">
                            <i class="text-[#52D0F8]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Docencia en Educación Secundaria: </span> Imparte clases en
                                instituciones de Educación Básica Regular y Educación Básica Alternativa, tanto en
                                el sector público como privado, especializándose en las áreas de Lengua y Literatura.
                                Contribuye al desarrollo integral de los adolescentes, promoviendo el análisis
                                crítico y
                                la comprensión de aspectos fundamentales de la sociedad y la mente humana.
                            </p>

                        </li>
                        <li class="flex mt-2">
                            <i class="text-[#52D0F8]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </i>
                            <p class="ml-2 ">
                                <span class="font-bold "> Docencia en Educación Superior: </span>Imparte clases en
                                institutos superiores tecnológicos, pedagógicos y universidades, tanto en el
                                ámbito público como privado. Comparte su experiencia y conocimientos especializados en
                                Lengua y Literatura, guiando a estudiantes en su formación académica y
                                profesional.
                            </p>

                        </li>
                    </ul>
                </div>

            </section>

            <section class="contenido flex" id="perfil" style="display: none;">
                <h2 class="text-lg md:text-xl text-color font-bold">Perfil de Ingresante</h2>
                <ul class="list-none flex flex-col gap-1 p-4">
                <li><b>CONOCIMIENTOS MATEMATICOS</b><ul class="list-disc ml-5">
                    <li>Razonamiento Verbal.</li>
                    <li>Razonamiento Matematico.</li>
                    <li>Ciencia, Tecnologia y Ambiente.</li>
                    <li>Bioologia, Fisica y Quimica.</li>
                </ul></li>
                <li><b>CAPACIDADES</b><ul class="list-disc ml-5">
                    <li>Capacidad de analisis y sintesis.</li>
                    <li>Capacidad de argumentacion.</li>
                    <li>Capacidad basica en el manejo de TICS.</li>
                    <li>Capacidad para la comprension de textos.</li> 
                </ul></li>
                <li><b>ACTITUDES</b><ul class="list-disc ml-5">
                <li>Tener vocación y motivacion</li>
                    <li>Trabajar dentro de las normas establecidas</li>
                    <li>Respeto a su persona y hacia los demas</li>
                    <li>Actitud para trabajar en equipo.</li>
                    <li>Capacidad para tomar decisiones frente a nuevas situaciones.</li>
                    <li>Ser pereseverante para alcanzar sus metas.</li>
                    <li>Habilidad en comunicacion oral y ecrita.</li>
                    <li>Capacidad de liderazgo.</li>
                    <li>Demostrar responsabilidad, honestidad y amabilidad.</li>
                </ul></li>
            </ul>
                <br>
                <h2 class="text-lg md:text-xl text-color font-bold">Perfil Profesional de Egresado</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Gestiona procesos de diseño y planificación curricular a partir de la comprensión de
                        teorías psicopedagógicas utilizando soportes tecnológicos considerando la diversidad
                        cultural, la inclusión, las necesidades educativas de los estudiantes y actuando con
                        responsabilidad social.</li>

                    <li>Investiga a partir de la reflexión e identificación de situaciones problemáticas de diversos
                        hechos pedagógicos, lingüísticos y/o literarios para aportar en el desarrollo educativo y
                        social.</li>

                    <li>Comprende y utiliza las teorías, técnicas, métodos y modelos del análisis de las ciencias
                        del Lenguaje y la literatura como fundamento para promover procesos de reflexión,
                        comprensión y producción textuales aportando en el desarrollo de la cultura y sociedad.</li>

                    <li>Reflexiona sobre su desempeño personal y profesional desarrollando acciones de
                        capacitación y autocapacitación para convertirse en una persona y profesional crítico
                        reflexivo</li>
                </ul>
            </section>
            <section class="contenido text-center" id="plan-estudios" style="display: none;">
                <div
                    class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center [&>div]:py-5">
                    <div class="bg-white lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">10</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Semestres académicos</h2>
                    </div>
                    <div class="bg-[#52D0F8] lg:col-span-4">
                        <h3 class="text-white">Grado Académico</h3>
                        <img src="{{ asset('icons/graduation.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-white text-lg">Bachiller en Educación Secundaria – Mención:
                            Lengua y Literatura.</h2>
                    </div>
                    <div class="bg-[#52D0F8] lg:col-span-4">
                        <h3 class="text-white">Titulo</h3>
                        <img src="{{ asset('icons/diploma.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-white text-lg">Licenciado en Educación Secundaria – Mención:
                            Lengua y Literatura</h2>
                    </div>
                    <div class="bg-white lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">220</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Créditos</h2>
                    </div>
                </div>
                <a class="px-8 rounded-lg py-4 mt-10 bg-[#fee346] hover:shadow-xl transition-all ease-linear duration-300 hover:text-[#F0F0F2]"
                    href="https://drive.google.com/file/d/1UXWQXr8XhNUk9aMeV_rIP_OisnCu6IGH/view"
                    target="_blank">Ver Malla Curricular</a>
            </section>

            <section class="contenido text-center" id="contactanos" style="display: none;">
            <section class="lg:flex p-5 md:px-20 justify-center max-h-[px]">

<form action="" method="POST"
    class="border-2 border-[#52D0F8] gap-3 shadow-xl mx-auto rounded-lg p-5 grid md:grid-cols-2 [&>section>img]:bg-[#52D0F8] [&>section]:flex [&>section>img]:p-2 [&>section]:rounded-md [&>section]:border [&>section]:border-[#52D0F8] [&>section>img]:rounded-l-[5px] [&>section>input]:w-full [&>section>input]:rounded-r-md [&>section>input]:px-2 [&>section>input]:bg-transparent ">
    {{-- Predeterminado la escuela desde donde va --}}
    <section class="entrada-uno">
        <img src="{{ asset('icons/user.svg') }}" alt="">
        <input type="text" placeholder="Escriba su nombre" id="Nombres" name="Nombres">
    </section>
    <section class="entrada-uno">
        <img src="{{ asset('icons/user.svg') }}" alt="">
        <input type="text" placeholder="Escriba su apellido" id="Apellidos" name="Apellidos">
    </section>
    <section class="entrada-uno">
        <img src="{{ asset('icons/email.svg') }}" alt="">
        <input type="text" placeholder="Ingrese su correo" id="Correo" name="Correo">
    </section>
    <section class="entrada-uno">
        <img src="{{ asset('icons/phone.svg') }}" alt="">
        <input type="text" placeholder="Escriba su N° celular" id="Celular" name="Celular">
    </section>
    <section class="md:col-span-2 flex ">
        <img src="{{ asset('icons/setting.svg') }}" alt="">
        <select id="opciones" name="Opciones" class="w-full rounded-r-md bg-transparent">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Docente">Docente</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Egresado">Egresado</option>
            <option value="Administrativo">Administrativo</option>
            <option value="Otros">Otros</option>
        </select>
    </section>
    <textarea name="Comentarios" id="Comentarios" placeholder="Escribe Tu Mensaje Aquí"
        class="md:col-span-2 rounded-md p-3 border border-[#52D0F8] bg-transparent"></textarea>
    <input class="py-2 bg-[#52D0F8] rounded-md text-white font-bold cursor-pointer" type="submit"
        id="enviar" name="enviar" value="Enviar">
    <input class="py-2 border-2 border-[#52D0F8] rounded-md text-[#52D0F8] font-bold cursor-pointer"
        type="reset" id="borrar" name="borrar" value="Borrar">
</form>
</section>
            </section>

        </section>

        <section class="datos order-first max-w-6xl px-5 md:px-20 mx-auto my-6 flex flex-col lg:flex-row justify-center gap-6 ">
            <!-- Primera columna: Bienvenida -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center flex flex-col justify-center lg:w-1/3">
                <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-[#52D0F8] mb-2">Bienvenida</h3>
                <p class="">"Bienvenidos a la Escuela Profesional de Educación Secundaria Mención Lengua
                    y Literatura, un espacio donde la excelencia académica se encuentra con la innovación y la pasión
                    por el aprendizaje."</p>
            </div>

            <div class="flex flex-col justify-between lg:w-1/3">
                <img src="{{ asset('imagenes/index/director-secundaria.png')}}" class="rounded-t-lg lg:h-2/4 w-full " alt=""><!-- Icono personalizado -->
                <div class="bg-white h-1/2 p-6 rounded-b-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold text-[#52D0F8] mb-2">Dr. Carlos Oswaldo Caballero Alayo</h3>
                    <p class="text-black">Director de la Escuela Profesional de Secundaria</p>
                    <a href="mailto:inicial@unitru.edu.pe"
                    class="text-md font-bold text-black mb-2 text-wrap">secundaria@unitru.edu.pe</a>
                </div>
            </div>

            <div class="flex flex-col lg:w-1/3">
                <img src="{{ asset('imagenes/index/asistente-secundaria.png')}}" class="rounded-t-lg lg lg:h-2/4 w-full" alt=""> <!-- Icono personalizado -->
                <div class="bg-white h-1/2 p-6 rounded-b-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold text-[#52D0F8] mb-2">Sra. Mercedes Pilar Chuica Flores</h3>
                    <p class="">Asistente administrativa</p>
                </div>
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
