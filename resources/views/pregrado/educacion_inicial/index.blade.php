@extends('layouts.app')

@section('content')
    <main
        class=" inset-0 -z-10 h-full w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">
        <section
            class="min-h-60 w-full h-fit bg-[url({{ asset('imagenes/index/inicial.jpg') }})] md:bg-none bg-fixed bg-cover bg-center bg-blend-screen md:bg-pink-100 ">
            <section
                class="max-w-[1092px] mx-auto flex lg:flex-row flex-col items-center justify-center gap-10 lg:gap-5 p-10 bg-neutral-50 md:bg-transparent h-60 md:h-auto bg-opacity-75">
                <div class="flex flex-col justify-center gap-5 text-center ">
                    <h1 class="text-xl md:text-4xl text-gray-900 md:text-gray-700 font-semibold">Educación Inicial</h1>
                    <p class="text-sm md:text-base text-gray-700 md:text-gray-500">Únete a nuestra Escuela Profesional de
                        Educación Inicial y
                        transforma vidas desde la primera infancia.</p>
                </div>
                <img src="{{ asset('imagenes/index/inicial.jpg') }}" alt="escuela de educación inicial"
                    class="lg:w-2/5 lg:rotate-6 shadow-xl hidden md:block mx-auto">
            </section>
        </section>

        <section
            class="flex flex-col lg:flex-row [&>div>h2]:font-bold md:[&>div>h2]:text-2xl [&>div>h2]:text-lg [&>div>p]:text-sm md:[&>div>p]:text-base justify-around gap-5 lg:[&>div]:w-[40%] a[&>div]:bg-[#f577bc4d] [&>div]:bg-[#ededed8d] [&>div]:border-pink-100 [&>div]:border-2 [&>div]:rounded-lg [&>div]:shadow-lg [&>div]:p-5 [&>div>h2]:mb-2 [&>div]:h-fit md:[&>div]:min-h-[350px] [&>div]:min-h-[230px] [&>div]:flex [&>div]:flex-col [&>div]:justify-center max-w-[1092px] mx-auto p-5 py-10"
            id="mision-vision">
            <div class="text-center">
                <h2>MISIÓN</h2>
                <p>
                    Somos una unidad académica que forma profesionales en educación y ciencias de la
                    comunicación, con valores éticos y morales, con capacidades científicas, cualidades
                    humanísticas y conciencia ambiental, que responden a las necesidades sociales de nuestra
                    comunidad, contribuyendo al desarrollo local, regional y nacional en el marco de las
                    funciones universitarias: docencia, investigación y proyección social.
                </p>
            </div>
            <div class="text-center">
                <h2>VISIÓN</h2>
                <p>
                    En el año 2024, seremos una Facultad líder y reconocida, con carreras acreditadas que
                    forma profesionales competentes con cualidades éticas y estéticas, con conocimientos
                    humanísticos, científicos, tecnológicos y con conciencia ambiental que respondan con
                    pertinencia, equidad, calidad y compromiso al desarrollo integral del hombre y la sociedad.
                </p>
            </div>
        </section>

        

        <section id="perfil" class="p-10 lg:flex max-w-[1092px] mx-auto">
            <div>
                <h2 class="text-lg md:text-3xl font-semibold mb-4">Perfil de Ingresante</h2>
                <hr class="border border-pink-200 px-1">
                <div
                    class="flex flex-col lg:flex-rsow justify-center gap-3 [&>ul>li]:list-disc [&>ul]:px-5 [&>ul>li]:text-sm md:[&>ul>li]:text-base">
                    <ul>
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
            </div>
            <div>

                <h2 class="text-lg md:text-3xl font-semibold my-[26px]">Perfil de Egresado</h2>
                <hr class="border border-pink-200 px-1">
                <div
                    class="flex flex-col lg:flex-rsow justify-center gap-3 [&>ul>li]:list-disc [&>ul]:px-5 [&>ul>li]:my-2 [&>ul>li]:drop-shadow-lg [&>ul>li]:text-sm md:[&>ul>li]:text-base">
                    <ul>
                        <li>GESTIONA SUS HABILIDADES INVESTIGATIVAS utilizando el razonamiento lógico y matemático, la
                            habilidad
                            informática, lacomunicación efectiva, el saber popular y el conocimiento científico-tecnológico
                            para
                            aportar solución teórica y práctica a los problemas diversos de la región y del país.</li>

                        <li>GESTIONA SU APRENDIZAJE de modo integral, autónomo y continuo, adaptándose a situaciones nuevas
                            con
                            creatividad, trabajo en equipo, liderazgo y actitud emprendedora y comprometidos desde una
                            visión
                            filosófica para fomentar convivencia en diversidad cultural, la construcción de una identidad
                            cultural y el desarrollo del país.</li>
                        <li>REFLEXIONA Y DEMUESTRA acciones en su práctica pedagógica, que demuestren confianza en sí mismo,
                            espíritu emprendedor, manejo de la comunicación asertiva, trabajo en equipo, gran capacidad de
                            servicio y actitud de mejora continua, desarrollo sostenible de la conciencia ética, estética,
                            ecológica, histórica, política y de organización social, para tener un mejor entendimiento de la
                            realidad y contribuir a su transformación.</li>
                        <li>DEMUESTRA
                            CAPACIDAD CRÍTICA E INNOVADORA, habilidades interpersonales, cultura físico-mental y estética,
                            compromiso ético- ciudadano y responsabilidad social para promover el desarrollo sostenible
                            respetando la diversidad cultural a nivel local y global</li>
                        <li>GESTIONA la formación integral enfatizando en los procesos de enseñanza y aprendizaje, para que
                            los
                            estudiantes de educación inicial, desarrollen aprendizajes de calidad, críticos, reflexivos y
                            significativos para la solución de problemas en situaciones retadoras y toma de decisiones,
                            teniendo
                            en cuenta la diversidad, la inclusión y los contextos socioculturales.</li>
                        <li>INVESTIGA sobre su práctica y experiencia pedagógica en el nivel inicial, desarrollando
                            investigación científica, propuestas innovadoras e intervenciones socioculturales para el
                            mejoramiento de los procesos de enseñanza y aprendizaje que respondan a la problemática del
                            contexto, interactuando en comunidades virtuales.</li>
                        <li>LIDERA la gestión de organizaciones educativas, en forma democrática, con las familias y la
                            comunidad, así como también participa en programas, proyectos educativos, sociales, salud y
                            otros
                            afines, propios del nivel inicial, en atención al contexto socio educativo para generar
                            aprendizajes
                            de calidad.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="ocupacion" class="p-10  max-w-[1092px] mx-auto">
            <h2 class="text-lg md:text-3xl font-semibold my-4">Perspectiva Ocupacional</h2>
            <ul
                class="flex flex-col lg:flex-row justify-around gap-3 [&>li]:px-3 [&>li]:border-l-2 [&>li]:border-pink-200 [&>li]:text-sm md:[&>li]:text-base">
                <li>Gestión pedagógica: Docentes de niños en Cunas o Jardines de infancia, Coordinación en PRONOEI
                    (Programas no Escolarizados en
                    Educación Inicial) o Programa Cuna Más.</li>

                <li>Gestión institucional: Promotor y gestor de Instituciones educativas (IE), Directores o subdirectores de
                    IE, Director de UGEL o jefe de gestión pedagógica, Especialista en educación.</li>
                <li>Formación docente: Docencia en educación superior, acompañamiento pedagógico en programas de MINEDU,
                    Mentoría en IE.</li>
                <li>Innovación e investigación: Diseño, implementación y evaluación de proyectos de innovación pedagógica e
                    investigación educativa, estudios y análisis sistemático de la pedagogía y proyectos pedagógicos,
                    científicos y tecnológicos.</li>
            </ul>
        </section>

        <section id="datos"
            class="p-10 grid md:grid-cols-6 grid-cols-4 max-w-[1092px] mx-auto gap-4 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center [&>div]:rounded-lg [&>div]:py-9 drop-shadow-lg text-center">
            
            <div class="col-span-2 bg-neutral-50">
                <p>Duración</p>
                <h3 class="md:text-7xl text-4xl font-semibold">10</h3>
                <p class="font-medium text-lg md:text-xl">Semestres Académicos</p>
            </div>
            <div class="col-span-2 bg-neutral-50">
                <h3 class="md:text-7xl text-4xl font-semibold">220</h3>
                <p class="font-medium text-lg md:text-xl">Créditos</p>
            </div>
            <div class="col-span-4 row-start-1 bg-pink-50">
                <p>Grado académico</p>
                <img class="w-20 md:w-40" src="{{ asset('icons/graduation.svg') }}" alt="">
                <h3 class="font-medium text-lg md:text-xl">Bachiller en Educación Inicial</h3>
            </div>
            <div class="col-span-4 bg-pink-50">
                <p>Título Profesional</p>
                <img class="w-20 md:w-40" src="{{ asset('icons/diploma.svg') }}" alt="">
                <h3 class="font-medium text-lg md:text-xl">Licenciada de Educación Inicial</h3>
        </section>

        <section class="w-full text-center mb-10">
            <a href="https://drive.google.com/file/d/1FGgFQbR0b68jgFf2XkgsabrScrbgF3NE/view?usp=sharing" target="_blank" class="mx-auto py-2 px-4 bg-pink-400 rounded-lg text-white my-4 hover:saturate-150 hover:shadow-xl transition-all ease-linear duration-300">
                Descargar malla curricular
            </a>
        </section>
    </main>
@endsection
