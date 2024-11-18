@extends('layouts.home')

@section('content')
<section class="bg-[#483D8B] text-white py-8 flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-extrabold">Unidad de Calidad</h1>
    </div>
</section>

<section id="benefits-list" class="bg-gray-100 py-10 relative">
    <p class="text-lg leading-relaxed text-justify px-5 mx-auto max-w-7xl">
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

            <div class="scroll-container flex overflow-x-auto gap-6" id="card-wrapper">
            @php
                    $estandares = [
                        ['titulo' => 'Estandar 1', 'contenido' => 'Propósitos articulados: Los propósitos del programa de estudios están definidos, alineados con la misión y visión institucional, y han sido construidos participativamente.'],
                        ['titulo' => 'Estandar 2', 'contenido' => 'Participación de los grupos de interés: El programa de estudios mantiene mecanismos que consideran la participación de los grupos de interés para asegurar que la oferta académica sea pertinente con la demanda social.'],
                        ['titulo' => 'Estandar 3', 'contenido' => 'Revisión periódica y participativa de las políticas y objetivos: El programa de estudios mantiene mecanismos de revisión periódica y participativa de las políticas y objetivos institucionales, que permiten reorientar sus metas, planes de acción y recursos.'],
                        ['titulo' => 'Estandar 4', 'contenido' => 'Sostenibilidad: El programa de estudios asegura la sostenibilidad mediante mecanismos de revisión periódica y participativa de sus políticas y objetivos institucionales.'],
                        ['titulo' => 'Estandar 5', 'contenido' => 'Pertinencia del perfil de egreso: El perfil de egreso es coherente con los propósitos del programa, su currículo y las expectativas de los grupos de interés y el entorno socioeconómico.'],
                        ['titulo' => 'Estandar 6', 'contenido' => 'Revisión del perfil de egreso: El perfil de egreso se revisa periódicamente y de forma participativa.'],
                        ['titulo' => 'Estandar 7', 'contenido' => 'Implementación del SGC y Evidencia en los Procesos Principales del Programa de Estudios: Definición de políticas, objetivos y procesos y deben incluir mecanismos que aseguren la confianza y el control en la mejora continua con evidencias tangible de su correcto funcionamiento.'],
                        ['titulo' => 'Estandar 8', 'contenido' => 'Evaluación y Mejora Continua en el Programa de Estudios: El programa de estudios promueve la participación de diversos grupos de interés para identificar mejoras, implementarlas y monitorearlas. Se evalúa periódicamente el cumplimiento y los avances de los planes de mejora.'], 
                        ['titulo' => 'Estandar 9', 'contenido' => 'Plan de estudios: El programa de estudios utiliza mecanismos que aseguran la evaluación y actualización periódica del plan de estudios.'],
                        ['titulo' => 'Estandar 10', 'contenido' => 'Características del plan de estudios: El plan de estudios es flexible y proporciona una sólida base científica y humanista, con sentido de ciudadanía y responsabilidad social, e incluye una práctica preprofesional.'],
                        ['titulo' => 'Estandar 11', 'contenido' => 'Enfoque por competencias: El programa de estudios garantiza que el proceso de enseñanza-aprendizaje incluya todos los elementos que aseguren el logro de las competencias a lo largo de la formación.'],
                        ['titulo' => 'Estandar 12', 'contenido' => 'Articulación con I+D+i y responsabilidad social: El programa de estudios articula el proceso de enseñanza aprendizaje con la I+D+i y responsabilidad social, en la que participan estudiantes y docentes.'],
                        ['titulo' => 'Estandar 13', 'contenido' => 'Movilidad: El programa de estudios mantiene convenios con universidades nacionales e internacionales para la movilidad de estudiantes y docentes, así como para el intercambio de experiencias.'],
                        ['titulo' => 'Estandar 14', 'contenido' => 'Selección, evaluación, capacitación y perfeccionamiento: El programa de estudios selecciona, evalúa y capacita al personal docente para asegurar su idoneidad con lo requerido en el documento curricular.'],
                        ['titulo' => 'Estandar 15', 'contenido' => 'Plana docente adecuada: El programa de estudios asegura que la plana docente sea adecuada en cuanto al número e idoneidad.'],
                        ['titulo' => 'Estandar 16', 'contenido' => 'Reconocimiento de las actividades de labor docente: El programa de estudios reconoce las actividades estructuradas y no estructuradas en la labor de los docentes.'],
                        ['titulo' => 'Estandar 17', 'contenido' => 'Plan de desarrollo académico: El programa de estudios debe ejecutar un plan que estimule el desarrollo de capacidades docentes.'],
                        ['titulo' => 'Estandar 18', 'contenido' => 'Admisión al programa de estudios: El proceso de admisión establece criterios en concordancia con el perfil de ingreso, claramente especificados en los prospectos, de conocimiento público.'],
                        ['titulo' => 'Estandar 19', 'contenido' => 'Nivelación de ingresantes: El programa de estudios diseña, ejecuta y mantiene mecanismos que ayudan a nivelar las competencias necesarias para iniciar estudios universitarios.'],
                        ['titulo' => 'Estandar 20', 'contenido' => 'Seguimiento al desempeño de los estudiantes: El programa realiza un seguimiento continuo al desempeño de los estudiantes y les ofrece el apoyo necesario para avanzar según lo esperado.'],
                        ['titulo' => 'Estandar 21', 'contenido' => 'Actividades extracurriculares: El programa promueve y evalúa la participación de estudiantes en actividades extracurriculares que contribuyan a su formación integral.'],
                        ['titulo' => 'Estandar 22', 'contenido' => 'Gestión y calidad de la I+D+i realizada por docentes: El programa de estudios gestiona, regula y asegura la calidad de la I+D+i relacionada al área disciplinaria y en coherencia con la política universitaria.'],
                        ['titulo' => 'Estandar 23', 'contenido' => 'I+D+i para la obtención del grado y título: El programa asegura la rigurosidad y calidad de los trabajos de investigación realizados por los estudiantes para la obtención del grado y título.'],
                        ['titulo' => 'Estandar 24', 'contenido' => 'Publicaciones de los resultados de I+D+i: El programa fomenta la publicación de los resultados de I+D+i realizados por docentes, y su incorporación a la docencia, de manera que sean de conocimiento público.'],
                        ['titulo' => 'Estandar 25', 'contenido' => 'Responsabilidad social: El programa de estudios identifica, define y desarrolla acciones de responsabilidad social articuladas con la formación integral de los estudiantes.'],
                        ['titulo' => 'Estandar 26', 'contenido' => 'Implementación de políticas ambientales: El programa de estudios implementa políticas ambientales y monitorea el cumplimiento de medidas de prevención en ese ámbito.'],
                        ['titulo' => 'Estandar 27', 'contenido' => 'Acceso y Evaluación de los Servicios de Bienestar: El programa de estudios garantiza la difusión y acceso a los servicios de bienestar para estudiantes, docentes y administrativos, evaluando periódicamente su nivel de satisfacción.'],
                        ['titulo' => 'Estandar 28', 'contenido' => 'Infraestructura y Equipamiento para el Logro de Competencias: Aseguramiento del equipamiento necesario para cumplir con las competencias de egreso, diferenciando entre laboratorios de investigación y enseñanza, y garantizando la infraestructura adecuada para la virtualización.'],
                        ['titulo' => 'Estandar 29', 'contenido' => 'Mantenimiento y Uso Adecuado de Infraestructura y Equipamiento: El programa de estudios asegura el mantenimiento, renovación y seguridad de su infraestructura y equipamiento, garantizando su adecuado funcionamiento y soporte técnico.'],
                        ['titulo' => 'Estandar 30', 'contenido' => 'Sistema de Información y Comunicación para la Gestión Académica: El programa de estudios implementa y evalúa un sistema de información que integra datos técnicos y estadísticos, garantizando su uso en la gestión académica, de I+D+i, y administrativa.'],
                        ['titulo' => 'Estandar 31', 'contenido' => 'Actualización y Gestión del Centro de Información: El programa de estudios garantiza la actualización anual del centro de información, que incluye bibliotecas, bases de datos y repositorios de tesis, asegurando su uso adecuado y satisfacción de docentes y estudiantes.'],
                        ['titulo' => 'Estandar 32', 'contenido' => 'Recursos Humanos para la gestión del programa de estudios: El grupo directivo está formado por profesionales calificados que gestionan su desarrollo y fortalecimiento, con soporte administrativo adecuado.'],
                        ['titulo' => 'Estandar 33', 'contenido' => 'Participación de los grupos de interés: El programa de estudios mantiene mecanismos que consideran la participación de los grupos de interés para asegurar que la oferta académica sea pertinente con la demanda social.'],
                        ['titulo' => 'Estandar 34', 'contenido' => 'Seguimiento a egresados y objetivos educacionales: El programa mantiene un registro actualizado de sus egresados, monitoreando su inserción laboral y logro de los objetivos educacionales.']
                    ];
                @endphp
                @foreach ($estandares as $estandar)
                    <div class="bg-gray-100 p-6 border border-gray-300 rounded-lg shadow-lg w-72 flex-shrink-0 flex flex-col items-center">
                        <h4 class="text-2xl font-semibold mb-2 @if($loop->index % 2 == 0) text-[#4A148C] @else text-[#0288D1] @endif">{{ $estandar['titulo'] }}</h4>
                        <p class="text-wrap mb-6">{{ $estandar['contenido'] }}</p>
                    </div>
                @endforeach
            </div>

            <button id="scroll-right" class="transition p-4 transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-21" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4l8 8-8 8" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        const scrollContainer = document.getElementById("card-wrapper");
        const scrollLeftButton = document.getElementById("scroll-left");
        const scrollRightButton = document.getElementById("scroll-right");
        const cards = document.querySelectorAll('#card-wrapper > div');
        const cardWidth = cards[0].offsetWidth + 16; 
        let currentIndex = 0;

        scrollLeftButton.addEventListener("click", () => {
            currentIndex = Math.max(0, currentIndex - 1);
            scrollContainer.scrollTo({
                left: currentIndex * cardWidth,
                behavior: "smooth"
            });
        });

        scrollRightButton.addEventListener("click", () => {
            currentIndex = Math.min(cards.length - 1, currentIndex + 1);
            scrollContainer.scrollTo({
                left: currentIndex * cardWidth,
                behavior: "smooth"
            });
        });
    </script>
</section>

 <section id="colaboradores-button" class="bg-gray-100 py-0 flex justify-center">
    <a href="{{ route('unidades.colaboradores') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg flex items-center justify-center space-x-2 text-lg font-semibold shadow-lg hover:bg-blue-700 transition duration-300">
        <i class="fas fa-users"></i>
        <span>Colaboradores</span>
     </a>
</section>

<section id="escuelas" class="bg-gray-100 py-5 flex justify-center">
    <div id="school-container" class="relative grid grid-cols-1 gap-4 w-1/3"> <!-- Ampliar el ancho -->
            @php
                $schools = [
                    'inicial' => 'Educación Inicial',
                    'primaria' => 'Educación Primaria',
                    'filosofia' => 'Filosofía, Psicología, CCSS',
                    'matematicas' => 'Ciencias Matemáticas',
                    'idiomas' => 'Idiomas',
                    'lengua' => 'Lengua y Literatura',
                    'historia' => 'Historia y Geografía',
                    'naturales' => 'Ciencias Naturales',
                    'comunicacion' => 'Ciencias de la Comunicación'
                ];

                // Array de opciones y sus correspondientes rutas
                $options = [
                    'contextualizacion' => 'Contextualización',
                    'informe_autoevaluacion' => 'Informe de Autoevaluación',
                    'redaccion_hallazgos' => 'Redacción de Hallazgos'
                ];

                // Enlaces de PDF por cada escuela
                $pdfLinks = [
                    'inicial' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1Dr_pOHry7xJBLZEuDO0A5uDKSwmFpDL4?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1pfdOIy1GIbelqwXChhMDJtcLljAnao06/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'primaria' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/11jLa4j9AIH4F20bVa-LeJZyyfKdlK4qm?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1GzpH4oQ__hDh3vmJ-ntiXousaURbuSUK/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'filosofia' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1kjXDFMT6h8BhCH4NGVb2CBUtvzIHELlp?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1WfYG2FIYV9OgrIKX7laB9B06igkSAL2z/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'matematicas' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1qn_ZadxTaxzgUQXPx-QNw6xSXCEHq0Et?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1xpiJIZj4lEyRnHItcHI3S7QGqEcpV5fC/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'idiomas' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1mxETeX8deKP3K7TcJOixXkUH4ySB8kj8?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1SsQP-5jXLPcgl84xPrAj0b0OfvaP3xcM/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'lengua' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1rM1ZWmrH1wdDjJQ01E1E50J1Ns60Kae_?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1exojj9oF1eX6xaEO9Lc6WXcIYt8xaDFB/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'historia' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1NdDwCcAglJElJfTxNcVWOjafMmARz4iH?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1L7QeLUl0E8f9_IZTun9_GndtL8MIGKRm/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'naturales' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1SzvnTZ703hX4xotcfrPXcx7oz1We2NW_?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/1cedttrcJUt_DeRrqtQIMQwQwE9rpuG3t/view?usp=sharing',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    'comunicacion' => [
                        'contextualizacion' => 'https://drive.google.com/drive/folders/1bu4gOUQX-4G0Sp3oR1zaX8HWZvxQ9Rn2?usp=sharing',
                        'informe_autoevaluacion' => 'https://drive.google.com/file/d/17Tykp2bv8dxvjGuhh9jMps1aDf__r2Dz/view',
                        'redaccion_hallazgos' => 'https://drive.google.com/file/d/1LEUmTfC_RmEiz2FZE2pI_1jHzlGbat4V/view?usp=sharing',
                    ],
                    
                ];
            @endphp


        <!-- Botones de escuelas -->
 
    @foreach ($schools as $key => $school)
    <div class="school-wrapper flex items-center">
        <button class="school-button bg-gradient-to-r from-blue-500 to-teal-500 text-white font-bold py-3 px-6 rounded-lg focus:outline-none shadow-lg hover:shadow-xl transition duration-300 w-full" data-school="{{ $key }}">
            {{ $school }}
        </button>
        <div class="options-container hidden ml-4 flex gap-4">
            @foreach ($options as $optionKey => $option)
                <button onclick="showAccessCodePrompt('{{ $pdfLinks[$key][$optionKey] }}')" 
                    class="option-button bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-gray-300 transition duration-200 flex items-center">
                    {{ $option }}
                    <i class="fas fa-download text-blue-500 ml-2"></i>
                </button>
            @endforeach
        </div>
    </div>
    @endforeach


    </div>
</section>


<!-- Agregar el modal para el código de acceso -->
<div id="accessCodeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-xl">
        <h3 class="text-xl font-bold mb-4">Código de Acceso Requerido</h3>
        <input type="password" id="accessCodeInput" class="border rounded px-3 py-2 mb-4 w-full" placeholder="Ingrese el código de acceso">
        <div class="flex justify-end space-x-3">
            <button onclick="closeAccessCodeModal()" class="bg-gray-300 px-4 py-2 rounded">Cancelar</button>
            <button onclick="validateAccessCode()" class="bg-blue-500 text-white px-4 py-2 rounded">Verificar</button>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    let currentPdfUrl = '';
    const ACCESS_CODE = 'facedu2024'; // Cambia esto por tu código deseado

    function showAccessCodePrompt(pdfUrl) {
        currentPdfUrl = pdfUrl;
        document.getElementById('accessCodeModal').classList.remove('hidden');
        document.getElementById('accessCodeInput').value = '';
    }

    function closeAccessCodeModal() {
        document.getElementById('accessCodeModal').classList.add('hidden');
    }

    function validateAccessCode() {
        const inputCode = document.getElementById('accessCodeInput').value;
        if (inputCode === ACCESS_CODE) {
            window.open(currentPdfUrl, '_blank');
            closeAccessCodeModal();
        } else {
            alert('Código de acceso incorrecto');
        }
    }

    // Agregar evento para cerrar con ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeAccessCodeModal();
        }
    });

    // Mantener el código existente de los botones de escuela
    const schoolButtons = document.querySelectorAll('.school-button');
    
    schoolButtons.forEach(button => {
        button.addEventListener('click', function () {
            const optionsContainer = this.nextElementSibling;
            document.querySelectorAll('.options-container').forEach(container => {
                if (container !== optionsContainer) {
                    container.classList.add('hidden');
                }
            });
            optionsContainer.classList.toggle('hidden');
        });
    });
</script>

<!-- CSS adicional -->
<style>
    /* Grid principal */
    #school-container {
        transition: all 0.5s ease;
    }

    /* Estilos de los botones de las escuelas */
    .school-button {
        transition: transform 0.5s ease;
        flex: 1; /* Permitir que el botón use el espacio disponible */
    }

    /* Contenedor de opciones */
    .options-container {
        transition: all 0.5s ease;
    }

    /* Estilo para los botones de opciones */
    .option-button {
        display: flex;
        justify-content: space-between;
        width: 200px; /* Aumentar el largo de los botones */
        padding: 10px; /* Aumentar padding para alargar */
    }

    #accessCodeModal {
        z-index: 1000;
    }

    #accessCodeInput:focus {
        outline: none;
        border-color: #4A90E2;
        box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
    }
</style>

<!-- Incluir Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@endsection
