
@extends('layouts.app')

@section('content')
<section class="bg-[#483D8B] text-white py-8 flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-extrabold">Unidad de Calidad</h1>
    </div>
</section>

<section id="benefits-list" class="bg-gray-100 py-10 relative">
    <p class="text-lg leading-relaxed text-justify mx-auto max-w-7xl">
        La Facultad de Educación de la Universidad Nacional de Trujillo busca asegurar que sus programas académicos cumplan con altos estándares de calidad y respondan a las necesidades del contexto educativo. A través del proceso de estandarización que abarca una autoevaluación y mejora continua, se logrará un entorno que impulse el desarrollo integral de sus estudiantes.
    </p>
    <br>
    <div class="container mx-auto px-4 lg:px-16 max-w-screen-2xl text-center">
        <div class="flex items-center justify-center space-x-4">
            <button id="scroll-left" class="transition p-4 transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-21" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4l-8 8 8 8" />
                </svg>
            </button>

            <div class="scroll-container flex overflow-hidden space-x-4" id="card-wrapper">
                <!-- Tarjetas con los 34 estándares -->
                 <!-- Tarjetas actualizadas con la información de los 34 estándares -->
                 <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 1</h4>
                    <p class="text-wrap mb-6">Propósitos articulados: Los propósitos del programa de estudios están definidos, alineados con la misión y visión institucional, y han sido construidos participativamente.
                </p>
            </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center ">
                    <h4 class=" text-2xl font-semibold mb-2 text-[#0288D1] ">Estandar 2</h4>
                    <p class="text-wrap mb-6">Participación de los grupos de interés: El programa de estudios mantiene mecanismos que consideran la participación de los grupos de interés para asegurar que la oferta académica sea pertinente con la demanda social.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 3</h4>
                    <p class="text-wrap mb-6">Revisión periódica y participativa de las políticas y objetivos: El programa de estudios mantiene mecanismos de revisión periódica y participativa de las políticas y objetivos institucionales, que permiten reorientar sus metas, planes de acción y recursos.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 4</h4>
                    <p class="text-wrap mb-6">Sostenibilidad: El programa de estudios asegura la sostenibilidad mediante mecanismos de revisión periódica y participativa de sus políticas y objetivos institucionales.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 5</h4>
                    <p class="text-wrap mb-6">Pertinencia del perfil de egreso: El perfil de egreso es coherente con los propósitos del programa, su currículo y las expectativas de los grupos de interés y el entorno socioeconómico.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 6</h4>
                    <p class="text-wrap mb-6">Revisión del perfil de egreso: El perfil de egreso se revisa periódicamente y de forma participativa.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 7</h4>
                    <p class="text-wrap mb-6">Plan de estudios: El programa de estudios utiliza mecanismos que aseguran la evaluación y actualización periódica del plan de estudios.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 8</h4>
                    <p class="text-wrap mb-6">Características del plan de estudios: El plan de estudios es flexible y proporciona una sólida base científica y humanista, con sentido de ciudadanía y responsabilidad social, e incluye una práctica preprofesional.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 9</h4>
                    <p class="text-wrap mb-6">Enfoque por competencias: El programa de estudios garantiza que el proceso de enseñanza-aprendizaje incluya todos los elementos que aseguren el logro de las competencias a lo largo de la formación.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 10</h4>
                    <p class="text-wrap mb-6">Articulación con I+D+i y responsabilidad social: El programa de estudios articula el proceso de enseñanza aprendizaje con la I+D+i y responsabilidad social, en la que participan estudiantes y docentes.</p>
                </div>
                <!-- Continúan los estándares hasta el 34 -->
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 11</h4>
                    <p class="text-wrap mb-6">Movilidad: El programa de estudios mantiene convenios con universidades nacionales e internacionales para la movilidad de estudiantes y docentes, así como para el intercambio de experiencias.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 12</h4>
                    <p class="text-wrap mb-6">Selección, evaluación, capacitación y perfeccionamiento: El programa de estudios selecciona, evalúa y capacita al personal docente para asegurar su idoneidad con lo requerido en el documento curricular.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 13</h4>
                    <p class="text-wrap mb-6">Plana docente adecuada: El programa de estudios asegura que la plana docente sea adecuada en cuanto al número e idoneidad.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 14</h4>
                    <p class="text-wrap mb-6">Reconocimiento de las actividades de labor docente: El programa de estudios reconoce las actividades estructuradas y no estructuradas en la labor de los docentes.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 15</h4>
                    <p class="text-wrap mb-6">Plan de desarrollo académico: El programa de estudios debe ejecutar un plan que estimule el desarrollo de capacidades docentes.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 16</h4>
                    <p class="text-wrap mb-6">Reconocimiento de las actividades de labor docente: El programa de estudios reconoce las actividades estructuradas y no estructuradas en la labor de los docentes.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 17</h4>
                    <p class="text-wrap mb-6">Plan de desarrollo académico: El programa de estudios ejecuta un plan de desarrollo académico que estimula a los docentes a mejorar su desempeño universitario.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 18</h4>
                    <p class="text-wrap mb-6">Admisión al programa de estudios: El proceso de admisión establece criterios en concordancia con el perfil de ingreso, claramente especificados en los prospectos, de conocimiento público.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 19</h4>
                    <p class="text-wrap mb-6">Nivelación de ingresantes: El programa de estudios diseña, ejecuta y mantiene mecanismos que ayudan a nivelar las competencias necesarias para iniciar estudios universitarios.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 20</h4>
                    <p class="text-wrap mb-6">Seguimiento al desempeño de los estudiantes: El programa realiza un seguimiento continuo al desempeño de los estudiantes y les ofrece el apoyo necesario para avanzar según lo esperado.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 21</h4>
                    <p class="text-wrap mb-6">Actividades extracurriculares: El programa promueve y evalúa la participación de estudiantes en actividades extracurriculares que contribuyan a su formación integral.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 22</h4>
                    <p class="text-wrap mb-6">Gestión y calidad de la I+D+i realizada por docentes: El programa de estudios gestiona, regula y asegura la calidad de la I+D+i relacionada al área disciplinaria y en coherencia con la política universitaria.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 23</h4>
                    <p class="text-wrap mb-6">I+D+i para la obtención del grado y título: El programa asegura la rigurosidad y calidad de los trabajos de investigación realizados por los estudiantes para la obtención del grado y título profesional.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 24</h4>
                    <p class="text-wrap mb-6">Publicaciones de los resultados de I+D+i: El programa fomenta la publicación de los resultados de I+D+i realizados por docentes, y su incorporación a la docencia, de manera que sean de conocimiento público.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 25</h4>
                    <p class="text-wrap mb-6">Responsabilidad social: El programa de estudios identifica, define y desarrolla acciones de responsabilidad social articuladas con la formación integral de los estudiantes.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 26</h4>
                    <p class="text-wrap mb-6">Implementación de políticas ambientales: El programa de estudios implementa políticas ambientales y monitorea el cumplimiento de medidas de prevención en ese ámbito.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 27</h4>
                    <p class="text-wrap mb-6">Recursos Humanos para la gestión del programa: El grupo directivo está formado por profesionales calificados que gestionan su desarrollo y fortalecimiento, con soporte administrativo adecuado.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#0288D1]">Estandar 28</h4>
                    <p class="text-wrap mb-6">Logro de competencia: El programa utiliza mecanismos para evaluar que los egresados cuentan con las competencias definidas en el perfil de egreso.</p>
                </div>
                <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                    <h4 class="text-2xl font-semibold mb-2 text-[#4A148C]">Estandar 29</h4>
                    <p class="text-wrap mb-6">Seguimiento a egresados y objetivos educacionales: El programa mantiene un registro actualizado de sus egresados, monitoreando su inserción laboral y logro de los objetivos educacionales.</p>
                </div>
            </div>
            
            <button id="scroll-right" class="transition p-4 transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-21" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4l8 8-8 8" />
                </svg>
            </button>
        </div>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('inicial')">Educación Inicial</button>
        <div id="options-inicial" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('primaria')">Educación Primaria</button>
        <div id="options-primaria" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('filosofia')">Filosofía, Psicología, CCSS</button>
        <div id="options-filosofia" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('matematicas')">Ciencias Matemáticas</button>
        <div id="options-matematicas" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('idiomas')">Idiomas</button>
        <div id="options-idiomas" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('lengua')">Lengua y Literatura</button>
        <div id="options-lengua" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('historia')">Historia y Geografía</button>
        <div id="options-historia" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('naturales')">Ciencias Naturales</button>
        <div id="options-naturales" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>

    <div class="relative">
        <button class="bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 w-4/5 mx-auto" onclick="toggleOptions('comunicacion')">Ciencias de la Comunicación</button>
        <div id="options-comunicacion" class="hidden absolute left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-md z-20">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Contextualización</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Informe de Autoevaluación</li>
                <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Redacción de Hallazgos</li>
            </ul>
        </div>
    </div>
</div>

<script>
    function toggleOptions(selected) {
        // Oculta todas las opciones
        const allOptions = document.querySelectorAll('.absolute');
        allOptions.forEach(option => {
            option.classList.add('hidden');
        });

        // Muestra la opción correspondiente solo si no está ya visible
        const selectedOption = document.getElementById(`options-${selected}`);
        if (selectedOption.classList.contains('hidden')) {
            selectedOption.classList.remove('hidden');
        }
    }
</script>



</section>

<!-- Estilos para la sección de desplazamiento actualizados -->
<style>
    .scroll-container {
        width: calc(288px * 3 + 32px); /* Mostrar 3 tarjetas a la vez */

        white-space: nowrap; /* Mantener las tarjetas en una sola fila */
    }

    .scroll-container > div {
        width: 288px; /* Ancho de cada tarjeta */
        flex-shrink: 0; /* Evitar que las tarjetas se reduzcan de tamaño */
    }
</style>

<!-- Script para manejar el desplazamiento -->
<script>
    const scrollContainer = document.getElementById("card-wrapper");
    const scrollLeftButton = document.getElementById("scroll-left");
    const scrollRightButton = document.getElementById("scroll-right");
    const cardWidth = scrollContainer.querySelector('div').offsetWidth + 16; // Ancho de tarjeta más espacio
    let currentIndex = 0; // Índice de desplazamiento inicial

    scrollLeftButton.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex -= 3; // Desplazar 3 tarjetas a la izquierda
            scrollContainer.scrollTo({
                left: cardWidth * currentIndex,
                behavior: "smooth"
            });
        }
    });

    scrollRightButton.addEventListener("click", () => {
        if (currentIndex < scrollContainer.children.length - 3) {
            currentIndex += 3; // Desplazar 3 tarjetas a la derecha
            scrollContainer.scrollTo({
                left: cardWidth * currentIndex,
                behavior: "smooth"
            });
        }
    });
</script>

@endsection