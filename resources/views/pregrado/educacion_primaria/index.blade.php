@extends('layouts.app')

@section('content')

<style>
        button.active {
            background-color: #F97316;
            color: white;
        }
    </style>

    <h1 class="text-3xl md:text-5xl text-orange-600 bg-blue-950 w-full p-7 font-bold">Escuela Profesional de Educación Primaria</h1>

    <section class="max-w-[1050px] flex flex-col justify-between mx-auto p-5 md:px-0">

        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-pink-100 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>

            <button
                class="btn-nav bg-orange-600 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="perfil">
                Perfiles
            </button>

            <button
                class="btn-nav bg-orange-600 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="campo">
                Campo Ocupacional
            </button>

            <button
                class="btn-nav bg-pink-100 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
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
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-orange-600 mb-4">
                                Misión
                            </h3>

                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                        Somos el primer programa de estudios de la Región que forma licenciados en Educación Primaria, competitivos, con una sólida formación científica, tecnológica, pedagógica y humanística, que busca
el mejoramiento de la calidad educativa a través de la innovación y
currículo por competencias, y contribuye al desarrollo y transformación
sostenible de la localidad, región y el país.
                        </p>
                    </div>

                    <!-- Columna de Visión -->
                    <div class="flex-1">
                        <div class="flex text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-orange-600 mb-4">Visión</h3>
                        </div>

                        <p class="text-md md:text-lg text-gray-700">
                        Al 2018 seremos un Programa de Estudios de Educación Primaria de
la UNT, acreditada que forma líderes de cambio altamente calificados
con conocimiento científico, tecnológico y humanístico capaces de
satisfacer la demanda de la Educación Básica de la localidad, la región
y el país.
                        </p>
                    </div>

                </div>

            </section>

            <section class="contenido lg:flex" id="perfil" style="display:none;">
                <div>
                    <h2 class="text-lg md:text-xl font-bold text-orange-600 mb-4">Perfil de Ingresante</h2>

                    <ul class="list-disc flex flex-col gap-1 p-4 text-gray-700">
                        <li>Conocimientos básicos en razonamiento verbal.</li>
                        <li>Conocimientos básicos razonamiento matemático.</li>
                        <li>Conocimientos básicos de cultura general..</li>
                        <li>Demuestra interés para el trabajo con niños y niñas</li>
                        <li>Posee capacidad de liderazgo y actitudes de servicio con niños y niñas</li>
                        <li>Muestra diversas habilidades cognitivas, artísticas, creativas, sociales y el control de emociones.</li>
                        <li>Demuestra ser crítico, reflexivo y actúa con coherencia y lógica.</li>
                        <li>Muestra capacidad para la comunicación horizontal, tolerancia y conciliación</li>
                        <li>Demuestra un pensamiento abierto y flexible frente a los cambios educativos y de nuestra sociedad.</li>
                        <li>Capacidad para identificar y actuar frente a situaciones educativas relevantes que promueven
                        aprendizajes significativos en los niños.</li>
                    </ul>
                </div>

                <br>

                <div>
                    <h2 class="text-lg md:text-xl font-bold text-orange-600 mb-4">Perfil Profesional de Egresado</h2>

                    <ul class="list-disc flex flex-col gap-1 p-4">
                        <li>1. GESTIONA la formación
integral enfatizando en los
procesos de enseñanza y
aprendizaje, para que los
estudiantes de educación
Primaria desarrollen
aprendizajes de calidad,
críticos, reflexivos y
significativos para la solución
de problemas en situaciones
retadoras y toma de
decisiones, teniendo en cuenta
la diversidad, la inclusión y los
contextos socioculturales.</li>

                        <li>2. INVESTIGA sobre su
práctica y experiencia
pedagógica, así como de la
Educación Primaria
desarrollando investigación
científica, propuestas
innovadoras e intervenciones
socioculturales para el
mejoramiento de los procesos
de enseñanza y aprendizaje
que respondan a la
problemática del contexto,
interactuando en comunidades
virtuales.</li>

                        <li>3. LIDERA la gestión de
organizaciones educativas, en
forma democrática, con las
familias y la comunidad, así
como también participa en
programas, proyectos
educativos y otros afines,
propios de la Educación
Primaria en atención al
contexto socio educativo para
generar aprendizajes de
calidad.</li>

                        <li>4. REFLEXIONA Y
DEMUESTRA acciones en su
práctica pedagógica, que
demuestren confianza en sí
mismo, espíritu emprendedor,
manejo de la comunicación
asertiva, trabajo en equipo,
gran capacidad de servicio y
actitud de mejora continua,
desarrollo sostenible de la
conciencia ética, estética,
ecológica, histórica, política y
de organización social, para
tener un mejor entendimiento
de la realidad y contribuir a su
transformación.</li>

                       

                    </ul>
                </div>


            </section>

            <section class="contenido active" id="campo" style="display:none;">
                <h2 class="text-xl text-orange-600 font-semibold mb-4">Campo Ocupacional</h2>

                <div class="container">

                    <p class="text-black">Las salidas profesionales para un Licenciado en Educación Inicial
                        abarcan diversas áreas:</p>
                    <ul class=" list-inside text-black ml-8">

                        <li class="flex mt-2">
                            <i class="text-orange-600">
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
                            <i class="text-orange-600">
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
                            <i class="text-orange-600">
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
                            <i class="text-orange-600">
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
                    <div class="bg-orange-600 lg:col-span-4">
                        <h3>Grado Académico</h3>
                        <img src="{{ asset('icons/graduation.svg') }}" alt="grade-icon" class="w-16">
                        <h2 class="font-semibold text-lg">Bachiller en Educación Inicial</h2>
                    </div>
                    <div class="bg-orange-600 lg:col-span-4">
                        <h3>Titulo</h3>
                        <img src="{{ asset('icons/diploma.svg') }}" alt="diploma-icon" class="w-16">
                        <h2 class="font-semibold  text-lg">Licenciado en Educación Primaria</h2>
                    </div>
                    <div class="bg-gray-200 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">220</p>
                        <h2 class="font-semibold text-lg">Créditos</h2>
                    </div>
                </div>

                <a href="https://dpaunt.edu.pe/curriculos/14.pdf" target="_blank" rel="nofollow"
                    class="p-3 mt-4 bg-pink-300 text- rounded-md font-semibold text-white hover:bg-pink-500 transition-all ease-linear duration-300 hover:shadow-lg  text-center">
                    Ver Malla Curricular
                </a>

            </section>
        </section>
        <script>
        const datos = document.querySelectorAll('.datos');

    </script>

    <script src="{{ asset('js/main.js') }}"></script>
    
        <section class="datos order-first p-5 md:px-20 mx-auto my-6 grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            <!-- Primera columna: Bienvenida -->
            <div class="bg-blue-950 p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-white mb-2">Bienvenida</h3>
                <p class="text-white">"Bienvenidos a la Escuela Profesional de Educación Primaria, un espacio donde la
                    excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."</p>
            </div>

            <!-- Segunda columna: Dr. Manuel Quipuscoa Silvestre -->
            <div class="bg-orange-600 p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👨‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-white mb-2">Dr. Manuel Quipuscoa Silvestre</h3>
                <p class="text-white">Director del Programa de Estudios de Educación Primaria<br>Universidad Nacional de Trujillo</p>
                <a href="mailto:inicial@unitru.edu.pe" class="text-md font-bold text-white mb-2">mquipuscoa@unitru.edu.pe</a>
            </div>

            <!-- Tercera columna: Mg. Patricia Roxana Vela Gálvez -->
            <div class="bg-blue-950 p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-white mb-2">Mg. Patricia Roxana Vela Gálvez </h3>
                <p class="text-white">Miembro Representante Administrativo del Programa de Estudios de Educación Primaria.</p>
            </div>
        </section>

        <section class="lg:flex p-5 md:px-20 justify-center">

            <img src="{{ asset('imagenes/index/inicial.jpg') }}" class="w-1/2 hidden lg:block" alt="">
            <form action="" method="POST"
                class="border-2 border-orange-600 gap-3 shadow-xl max-w-[600px] mx-auto rounded-lg p-5 grid md:grid-cols-2 [&>section>img]:bg-orange-600 [&>section]:flex [&>section>img]:p-2 [&>section]:rounded-md [&>section]:border [&>section]:border-orange-600 [&>section>img]:rounded-l-[5px] [&>section>input]:w-full [&>section>input]:rounded-r-md [&>section>input]:px-2 [&>section>input]:bg-transparent ">
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
                    class="md:col-span-2 rounded-md p-3 border border-orange-600 bg-transparent"></textarea>
                <input class="py-2 bg-orange-600 rounded-md text-white font-bold cursor-pointer" type="submit"
                    id="enviar" name="enviar" value="Enviar">
                <input class="py-2 border-2 border-orange-600 rounded-md text-orange-600 font-bold cursor-pointer"
                    type="reset" id="borrar" name="borrar" value="Borrar">
            </form>
        </section>
    </section>

    <script>
        const datos = document.querySelectorAll('.datos');

    </script>

    <script src="{{ asset('js/main.js') }}"></script>

<div class="relative w-full text-center mt-6">
    <div class="inset-x-0 top-0 bg-blue-950 text-orange-500 text-4xl font-bold p-4">
        Plana Docente
    </div>
</div>



<div class="bg-gray-100 gap-4 flex-wrap flex justify-center items-center my-5">

    <!-- Card -->
    <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl flex flex-col min-h-72">
        <!-- Image -->
        <img class="h-45 object-cover rounded-xl" src="{{ asset('imagenes/WhatsApp Image 2024-11-08 at 21.54.47.jpeg') }}" alt="">
        <div class="p-2 flex-grow flex flex-col">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2">CECILIA DEL PILAR VÁSQUEZ MONDRAGÓN</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600 flex-grow">Licenciada en INVESTIGACIÓN Y DOCENCIA UNIVERSITARIA Doctora en educación Segunda especialidad en Administración y planeamiento.</p>
        </div>
    </div>

    <!-- Card -->
    <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl flex flex-col min-h-72">
        <!-- Image -->
        <img class="h-45 object-cover rounded-xl" src="https://ctivitae.concytec.gob.pe/appDirectorioCTI/UploadFotoPath.do?tipo=visualizar_archivo&id_investigador=144862&ruta=/documents/docInvestigadores/144862/imagenes/OLGA%20TAMANO%20CARNET.jpg&content_type=image/jpeg" alt="">
        <div class="p-2 flex-grow flex flex-col">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2">OLGA ESTELA MENDOZA LEÓN</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600 flex-grow">Licenciada en educación Primaria Maestra Mención en Problemas de aprendizaje Doctora en educación Segunda especialidad en Neuropsicología infantil.</p>
        </div>
    </div>

    <!-- Card -->
    <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl flex flex-col min-h-72">
        <!-- Image -->
        <img class="h-80 object-cover rounded-xl" src="https://0.academia-photos.com/211772623/71041518/59477299/s200_anthony_joel.gonzales_pacheco.jpeg" alt="">
        <div class="p-2 flex-grow flex flex-col">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2">ANTHONY JOEL GONZALES PACHECO</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600 flex-grow">Licenciado en Educación Primaria Maestría en Educación con mención en Pedagogía Universitaria Doctorado en Educación.</p>
        </div>
    </div>
</div>

<div class="bg-gray-100 gap-4 flex-wrap flex justify-center items-center my-5">
    <!-- Card -->
    <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl flex flex-col min-h-72">
        <!-- Image -->
        <img class="h-50 object-cover rounded-xl" src="https://ctivitae.concytec.gob.pe/appDirectorioCTI/UploadFotoPath.do?tipo=visualizar_archivo&id_investigador=29777&ruta=/documents/docInvestigadores/29777/imagenes/Manuel.jpg&content_type=image/jpeg" alt="">
        <div class="p-2 flex-grow flex flex-col">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2">MANUEL QUIPUSCOA SILVESTRE</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600 flex-grow">Licenciado en Educación Primaria Maestría en Educación, Mención en Pedagogía Universitaria Segunda Especialidad en Tecnologías Educativa, Mención en Currículo y Estrategias de Enseñanza y Aprendizaje Licenciatura en Psicología Doctor en Ciencias de la Educación.</p>
        </div>
    </div>

    <!-- Card -->
    <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl flex flex-col min-h-72">
        <!-- Image -->
        <img class="h-50 object-cover rounded-xl" src="{{ asset('imagenes/FOTO JESY-ok (1).jpeg') }}" alt="">
        <div class="p-2 flex-grow flex flex-col">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2">JESSICA ISABEL ALVA CHÁVEZ</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600 flex-grow">Licenciado en Educación Primaria Maestría en Educación, Mención en Pedagogía Universitaria Segunda Especialidad en Didáctica en la Comunicación Doctora en Ciencias de la Educación.</p>
        </div>
    </div>

    <!-- Card -->
    <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl flex flex-col min-h-72">
        <!-- Image -->
        <img class="h-80 object-cover rounded-xl" src="https://ctivitae.concytec.gob.pe/appDirectorioCTI/UploadFotoPath.do?tipo=visualizar_archivo&id_investigador=935&ruta=/documents/docInvestigadores/935/imagenes/RUTH%202018.jpg&content_type=image/jpeg" alt="">
        <div class="p-2 flex-grow flex flex-col">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2">MAGNA RUTH MEREGILDO GOMEZ</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600 flex-grow">Licenciada en Educación Primaria Maestría en Educación, mención Gestión y Acreditación Educativa Especialista en Tecnología Educativa, mención Administración y planeamiento educativo Doctora en Ciencias de la Educación.</p>
        </div>
    </div>
</div>


@endsection