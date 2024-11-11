@extends('layouts.app')

@section('content')
    <style>
        button.active {
            background-color: #FFD700;
            color: #8B0000
        }
    </style>
    
    <h1 class="text-3xl md:text-5xl text-[#8B0000] bg-[#FFD700] w-full p-4 font-bold">Filosofía, Psicología y CCSS</h1>

    <section class="max-w-[1050px] mx-auto p-5 md:px-0">
        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-gray-50 bg-opacity-15 text-[#dac134] flex-1  font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>
            <button
                class="btn-nav bg-gray-50 bg-opacity-15 text-[#dac134] flex-1 font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="perfil">
                Perfiles
            </button>
            <button
                class="btn-nav bg-gray-50 bg-opacity-15 text-[#dac134] flex-1 font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="campo">
                Campo Ocupacional
            </button>
            <button
                class="btn-nav bg-gray-50 bg-opacity-15 text-[#dac134] flex-1 font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="plan-estudios">
                Plan de Estudios
            </button>
        </section>

        <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">
            <section class="contenido active" id="nosotros">
                <p id="nosotros">
                    <strong class="text-lg md:text-xl">
                        Misión
                    </strong>
                    <br>
                    El Programa de Estudios de Filosofía, Psicología y Ciencias Sociales tiene la
                    misión de contribuir al desarrollo económico, político y cultural de la localidad, la
                    región y el país, formando profesionales competentes para desarrollar procesos
                    de investigación científica, administración gestión educativa y de
                    responsabilidad social para una mejor convivencia humana.
                    social.
                    <br>
                    <br>
                    <strong class="text-lg md:text-xl">
                        Visión
                    </strong>
                    <br>
                    La carrera profesional de Filosofía, Psicología y Ciencias Sociales, inspirada en los
                    más altos valores científicos y espirituales de la cultura occidental y del mundo andino y amazónico,
                    aspira a ser reconocida nacional e internacionalmente por: estar conformada por un grupo humano
                    capacitado, creativo, solidario y participativo, dinámico y dinamizador del cambio permanente que
                    ofrece servicios educativos de calidad, promueve la formación integral de sus estudiantes que den
                    respuesta a las demandas de la sociedad.
                    Así mismo, promueve una cultura abierta y democrática, en la que predomine el debate académico,
                    la tolerancia y la creatividad orientada a la transformación social, establece vínculos con otras
                    instituciones educativas, locales, nacionales e internacionales para promover el mejoramiento de
                    sus docentes y experiencias curriculares y ejerce una administración académica, que promueve el
                    desarrollo del talento humano y el logro de los objetivos institucionales.
                </p>
            </section>

            <section class="contenido" id="campo" style="display: none;">
                <h2 class="text-lg md:text-xl font-bold">Campo Ocupacional</h2>
                <br>
                <ul class="list-disc flex flex-col gap-1 px-4">
                    <li>
                        <strong>
                            Docencia en Educación Secundaria:
                            </strong>
                        Imparte clases en instituciones de Educación Básica Regular y Educación Básica Alternativa, tanto en el sector público como privado, especializándose en las áreas de Filosofía, Psicología y Ciencias Sociales. Contribuye al desarrollo integral de los adolescentes, promoviendo el análisis crítico y la comprensión de aspectos fundamentales de la sociedad y la mente humana.</li>
                    <li>
                        <strong>
                            Docencia en Educación Superior:
                            </strong>
                        Imparte clases en institutos superiores tecnológicos, pedagógicos y universidades, tanto en el ámbito público como privado. Comparte su experiencia y conocimientos especializados en Filosofía, Psicología y Ciencias Sociales, guiando a estudiantes en su formación académica y profesional.</li>
                    <li>
                        <strong>
                            Gerencia y Gestión Educativa:
                            </strong>
                        Lidera y gestiona instituciones educativas, tanto públicas como privadas, desempeñando roles gerenciales. Contribuye al desarrollo de políticas educativas, implementa mejoras y promueve un ambiente educativo eficiente y participativo.</li>
                    <li>
                        <strong>
                            Asesoramiento y Gestión en Proyectos Educativos:
                            </strong>
                        Brinda asesoramiento y gestiona proyectos educativos orientados al desarrollo social. Participa en iniciativas que buscan mejorar la calidad de la educación y su impacto en la sociedad, abordando aspectos relacionados con la filosofía, psicología y ciencias sociales.</li>
                    <li>
                        <strong>
                            Promoción Social, Cultural y Comunal:
                            </strong>
                        Participa en actividades y programas que promueven el desarrollo social, cultural y comunal. Colabora en iniciativas que buscan fortalecer el tejido social, fomentar la cultura y contribuir al bienestar de la comunidad en diversos aspectos.</li>
                </ul>
            </section>
            <section class="contenido flex" id="perfil" style="display: none;">
                <h2 class="text-lg md:text-xl font-bold">Perfil de Ingresante</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Utiliza conocimientos del área de Ciencias Sociales, Ciudadanía y de Ciencia y ambiente, en
                        diversas situaciones para mejorar la calidad de vida y cuidado de la biodiversidad.</li>
                    <li>Evidencia habilidades personales y sociales identificándose con su carrera profesional y con su
                        cultura en diferentes contextos.</li>
                    <li>Evidencia vocación de servicio y motivación para la enseñanza.</li>
                </ul>
                <br>
                <h2 class="text-lg md:text-xl font-bold">Perfil Profesional de Egresado</h2>
                <ul class="list-disc flex flex-col gap-1 p-4">
                    <li>Elabora trabajos de investigación básicos, a partir del uso de
                        la epistemología, con actitud crítica para conocer la realidad y
                        los problemas naturales, sociales, culturales y humanos de la
                        región y el país.</li>
                    <li>Aplica el instrumental teórico de la Lógica formal y dialéctica
                        (Teoría concepto, del juicio, del raciocinio, de la
                        demostración, de la refutación) para desarrollar los procesos
                        de la investigación científica y, la comprensión adecuada,
                        racional</li>
                    <li>Resuelve con sentido crítico y creativo problemas cotidianos,
                        científicos y tecnológicos usando el pensamiento matemático</li>
                    <li>Emplea con criticidad, creatividad y originalidad los
                        procedimientos, técnicas y herramientas básicas de la
                        informática y las TIC para la producción de material
                        académico y seguridad de la información digital que
                        coadyuve al desarrollo de la investigación.</li>
                    <li>Emplea, con criterio, sentido lógico, originalidad, creatividad y
                        criticidad, los fundamentos, técnicas y recursos de la
                        comunicación oral y escrita, al analizar, comprender y
                        sistematizar información y textos, preferentemente
                        académicos, sobre su realidad.</li>
                    <li>Emplea, con sentido lógico, originalidad, creatividad y
                        criticidad, los fundamentos, técnicas y recursos de la lectura y
                        la redacción académica al analizar, comprender y
                        sistematizar información y textos, preferentemente
                        académicos, sobre su realidad.</li>
                    <li>Argumenta con sentido crítico y fundamentado los aspectos
                        más relevantes de la problemática regional y nacional dentro
                        del contexto global, proponiendo y sustentando alternativas
                        creativas y viables de solución.</li>
                    <li>Demuestra control y manejo de su inteligencia emocional,
                        actitud crítica, propositiva, asertiva, de resiliencia y
                        habilidades sociales, reconociendo y valorando la diversidad
                        social</li>
                    <li>Practica actividades deportivas, artísticas y recreacionales
                        con disciplina, responsabilidad y respeto para el cuidado y
                        desarrollo integral de su salud física y mental en el contexto
                        socio</li>
                    <li>Elabora propuestas emprendedoras demostrando iniciativa,
                        creatividad, criticidad y liderazgo ante problemas de su
                        entorno que contribuyan a fomentar el desarrollo local y
                        regional</li>
                    <li>Realiza acciones de respeto a la vida y a la cultura, de
                        responsabilidad, compromiso institucional, honestidad,
                        veracidad, justicia, libertad, solidaridad para la construcción
                        de una sociedad inclusiva, justa y democrática.</li>
                    <li>Realiza actividades de respeto por la naturaleza como
                        condición básica para el desarrollo sostenible, teniendo en
                        cuenta los fundamentos y aportes de la Geografía y la
                        Ecología</li>
                    <li>Demuestra capacidad de asertividad, comunicación eficaz,
                        trabajo en equipo, creatividad, empatía e iniciativa, para
                        comprender y resolver situaciones y problemas de su entorno
                        social,</li>
                    <li>Desarrolla su aprendizaje de manera autónoma, en
                        equipo, con iniciativa, creatividad y liderazgo, teniendo
                        en cuenta los fundamentos y aportes de las teorías y
                        estrategias del aprendizaje para lograr su desarrollo
                        personal, social y profesional dentro de un contexto
                        diverso y globalizado.</li>
                    <li>Desarrolla una concepción filosófica del mundo, con
                        un enfoque situado en la realidad peruana,
                        latinoamericana y mundial, teniendo en cuenta los
                        aportes de la filosofía universal y del saber popular
                        que</li>
                    <li>Expresa su identidad cultural valorando el proceso de
                        desarrollo de la cultura peruana dentro del contexto de
                        desarrollo de la cultura universal, en base a los
                        aportes de la Historia crítica para el desarrollo regional
                        y</li>
                </ul>
            </section>
            <section class="contenido text-center" id="plan-estudios" style="display: none;">
                <div class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center">
                    <div class="bg-yellow-300 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">10</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Semestres académicos</h2>
                    </div>
                    <div class="bg-red-300 lg:col-span-4">
                        <h3>Grado Académico</h3>
                        <img src="{{ asset('icons/graduation.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-neutral-600 text-lg">Bachiller en Educación Secundaria – Mención: Filosofía, Psicología y Ciencias Sociales</h2>
                    </div>
                    <div class="bg-red-300 lg:col-span-4">
                        <h3>Titulo</h3>
                        <img src="{{ asset('icons/diploma.svg') }}" alt="" class="w-16">
                        <h2 class="font-semibold text-neutral-600 text-lg">Licenciado en Educación Secundaria – Mención: Filosofía, Psicología y Ciencias Sociales</h2>
                    </div>
                    <div class="bg-yellow-300 lg:col-span-2">
                        <p class="text-xl md:text-4xl font-bold">220</p>
                        <h2 class="font-semibold text-neutral-600 text-lg">Créditos</h2>
                    </div>
                </div>
                <a class="px-8 rounded-lg py-4 mt-10 bg-[#fee346] hover:shadow-xl transition-all ease-linear duration-300 hover:text-[#8B0000]" href="https://drive.google.com/file/d/1shqj_BwTjKnXLqsNh5ROTwFSyR09yOb-/view?usp=sharing" target="_blank">Ver Malla Curricular</a>
            </section>
        </section>
    </section>

    <script src="{{ asset('js/main.js') }}" ></script> 
@endsection
