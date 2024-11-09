@extends('layouts.app')

@section('content')
    
    <header>
        <h1 class="text-xl md:text-2xl text-white bg-blue-900 w-full p-4 font-bold">
            Mención Idiomas: Inglés-Francés / Inglés-Alemán
        </h1>

    </header>

    @php
        $tabs = [
            ['name' => 'Institucional', 'link' => '#institucional'],
            ['name' => 'Reseña Histórica', 'link' => '#resenaHistorica'],
            ['name' => 'Perfil Profesional', 'link' => '#perfilProfesional'],
            ['name' => 'Plan de Estudios', 'link' => '#planEstudios'],
            ['name' => 'Plana Docente', 'link' => '#planaDocente'],
        ];
    @endphp


    <!-- Nav -->
    <div id="tabs" class="flex flex-wrap justify-center gap-x-4 gap-y-4 md:space-x-8 mb-6 my-4">
        @foreach ($tabs as $tab)
            <a href="{{ $tab['link'] }}" 
            class="relative pb-2 text-base md:text-lg font-bold transition duration-200 text-gray-700 hover:text-gray-900" 
            data-link="{{ $tab['link'] }}">
                <span>{{ $tab['name'] }}</span>
                <!-- Barra inferior que cambia de tamaño y color según el estado -->
                <span class="absolute left-0 bottom-0 h-[2px] md:h-[3px] w-full bg-gray-400 transition-all duration-200"></span>
            </a>
        @endforeach
    </div>



    <!-- Secciones -->
    <section id="institucional" class="section-content container hidden">

        <div class="xl:flex min-h-60 w-full bg-blue-800 items-center justify-center gap-5 p-10">
            <!-- Columna de la imagen con texto sobrepuesto -->
            <div class="relative w-full xl:w-1/2  ">
                <img src="https://www.unea.edu.mx/hubfs/Imported_Blog_Media/UNEA-Ciencias-de-la-comunicacion-todo-sobre-esta-carrera-1.jpg" alt="escuela de educación inicial" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-end justify-center text-center bg-black bg-opacity-50">
                    <p class="text-md md:text-2xl md:font-bold text-white m-4">
                        "Formando líderes en el aprendizaje de idiomas, para educar con excelencia en un mundo globalizado."            
                    </p>
                </div>
            </div>

            <!-- Columna del párrafo -->
            <div class="container mx-auto p-5 xl:w-1/2 text-white">
                <p class="text-md lg:text-lg mt-2">
                    Un Licenciado en Educación Secundaria con Mención en Inglés-Francés o Inglés-Alemán es un profesional comprometido con la formación integral de estudiantes adolescentes. Este educador posee sólidos conocimientos en pedagogía y didáctica, especializándose en la enseñanza de los idiomas inglés y, francés o alemán. Su enfoque abarca el desarrollo de habilidades lingüísticas, la promoción de la comunicación efectiva y la apertura a la diversidad cultural. Con una pasión por inspirar el amor por los idiomas, este licenciado contribuye al crecimiento académico y personal de sus estudiantes, preparándolos para enfrentar un mundo globalizado con confianza y competencia lingüística.
                </p>
            </div>
        </div>


        <div class="md:flex md:space-x-10 p-10">
            <!-- Columna de Misión -->
            <div class="flex-1 mb-5 md:mb-0">
                <h3 class="text-lg md:text-xl font-semibold mx-2 text-blue-700">Misión</h3>
                <p class="text-md md:text-lg">
                    “Somos una unidad académica que forma profesionales con excelencia en el área de idiomas, que contribuye al desarrollo sustentable de la Región, del país y del Mundo, y a la formación integral del ser humano dentro del marco del quehacer universitario y con los valores éticos y estéticos”.
                </p>
            </div>

            <!-- Columna de Visión -->
            <div class="flex-1">
                <h3 class="text-lg md:text-xl font-semibold mx-2 text-blue-700">Visión</h3>
                <p class="text-md md:text-lg">
                    “En el año 2024, seremos una unidad académica acreditada, que contribuye al desarrollo sustentable de la región, del país y del mundo, sensible a las exigencias sociales, que forma profesionales con excelencia académica en idiomas, se proyecta a la comunidad con responsabilidad social, realiza investigación científica, respeta la diversidad cultural y la ecología, y contribuye a la formación integral del ser humano dentro del marco de los valores ético y estéticos”.
                </p>
            </div>
        </div>

        
        <!-- Valores -->
        <div class="container mx-auto p-10">
            <header class="mb-4">
                <h2 class="text-2xl font-semibold text-blue-700">Principios educativos</h2>
            </header>
            <p class="text-center">
                Estos son los principios y valores fundamentales que conducen nuestra institución:
            </p>

            <div class="flex flex-wrap justify-center gap-6 p-5">
                @php
                $valores = ["Honestidad","Identidad", "Responsabilidad", "Justicia", "Tolerancia", "Libertad", "Solidaridad"
                ];
                @endphp  
                <!-- Valores-->
                @foreach($valores as $key => $valor)
                    <div class=" inline-flex {{ $key % 2 == 0 ? 'bg-blue-800' : 'bg-blue-700' }} rounded-md flex items-center justify-center text-white text-center font-semibold px-5 py-4">
                        {{ $valor }}
                    </div>
                @endforeach
            </div>

        </div>


    </section>

    <section id="resenaHistorica" class="section-content container p-5 hidden container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Columna izquierda: Texto -->
            <div class="text-black leading-relaxed space-y-4 p-5">
                <p>
                    El desarrollo de los idiomas puede analizarse a través de su procesamiento dentro del Departamento
                    Académico de Idiomas y Lingüística de la Facultad de Educación y Ciencias de la Comunicación.
                    Su origen se remonta a varios años anteriores al 27 de marzo de 1964; desde 1957 se reportan
                    actividades lectivas con la enseñanza de inglés y francés.
                </p>
                <p>
                    El 29 de mayo de 1959 se produce el Acuerdo del Consejo Universitario de Introducción del idioma
                    alemán con el mismo valor que los idiomas inglés y francés, autorizándose en la modalidad de Curso
                    de Extensión Universitaria en la “Casa de la Cultura” de Trujillo, previo al Proyecto del Profesor
                    Ernesto Zierer del 24 de octubre de 1962 de creación de la Cátedra de Idiomas Modernos para
                    coordinar la Enseñanza de inglés, francés y alemán en la Facultad de Ciencias físicas y
                    Matemáticas. 
                </p>
                <p>
                    En 1962 se creó la Especialidad de Idiomas en la Facultad de Letras y Educación a
                    la culminación de cuyos estudios se obtenía el título de Profesor de Educación Secundaria en la
                    Especialidad de Idiomas: Inglés y Alemán (o Francés), resultando el 18 de abril de 1963 en la
                    creación del Departamento de Idiomas Extranjeros en la Facultad de Ciencias Físicas y
                    Matemáticas.
                </p>
                <p>
                    El 27 de marzo de 1964, surgió el Departamento Académico de Idiomas y Lingüística por Acuerdo
                    del Consejo de la Facultad de Letras y Educación como Departamento Interfacultativo, pasando
                    posteriormente a la Facultad de Letras y Educación.
                </p>
                <p>
                    La actividad de investigación también se inicia con el aporte de nuestro fundador, Profesor Ernesto
                    Zierer Bloss, quien fundó la Revista Lenguaje y Ciencias, LenC N° 3, 1961, pp. 1-6. La investigación
                    producida por sus académicos está registrada no sólo a nivel nacional sino internacional,
                    constituyendo importante fuente de consulta los hallazgos reportados por los docentes de esta
                    unidad académica. Figuran con aportes académicos, entre otros, Rosalinda Arana, Miró Q.,
                    Monteverde, Sánchez, Yábar, Angulo, Angulo, Dévera, Harry Hawkes, Jáuregui, Lee Kisang, Atilio
                    León, René Medina y Francisco Miró Quesada, Publicaciones posteriores se registran también en
                    la Revista Parlay, creada por un equipo de docentes bajo la conducción del Profesor Gilberto Roldán.
                    Sus servicios a la comunidad siempre han sido oportunos y eficaces en respuesta a las demandas
                    derivadas de la pertinencia social. La planificación siempre ha sido característica de este
                    Departamento, lo cual se refleja desde sus inicios como la primera institución que hizo uso de los
                    ambientes de la Ciudad Universitaria.
                </p>
            </div>

            <!-- Columna derecha: Imagen embebida en el texto -->
            <div class="flex justify-start items-start md:pl-8 p-5">
                <div class="text-black leading-relaxed">
                    <p class="mb-4">
                        <img src="https://via.placeholder.com/300x200?text=imagen+Prueba" alt="Imagen"
                            class="w-50 h-auto rounded-lg shadow-md float-left mr-4 mb-4">
                            Su concepción original ha sufrido transformaciones derivadas de los aportes de sus miembros
                            sensibles a las demandas sociales y por las exigencias de las diferentes administraciones a nivel de
                            la Facultad de Educación y Ciencias de la Comunicación y de los órganos rectores de la Universidad.
                            En su primera etapa preliminar solamente se limitaba a ofrecer la enseñanza del idioma Inglés a un
                            solo departamento, pasando luego a otros departamentos, lo cual devino en la fundación del
                            Departamento de Idiomas y Lingüística.
                    </p>
                    <p>
                        Los cincuenta y cinco años transcurridos desde su creación han posibilitado una organización sólida
                        que le ha deparado una especial ubicación dentro del contexto institucional. Con el apoyo de
                        docentes provenientes de otros países como Alemania, Francia, Inglaterra, Estados Unidos, Corea
                        y el aporte de docentes de nuestro país se logró la formación de las primeras promociones, de donde
                        surgieron los primeros docentes.
                        De la enseñanza de un solo sistema lingüístico se continuó con la diversificación académica, al
                        incorporarse la enseñanza de alemán y francés como áreas menores obligatorias para la graduación
                        y obtención del Título Profesional de Profesor de Idiomas Extranjeros. La denominación actual es
                        de "licenciados".
                    </p>
                    <p>
                    El Departamento de Idiomas y Lingüística ha contribuido a proveer desde el conocimiento básico
                    hasta el dominio a nivel avanzado de los idiomas requeridos por los académicos para hacer frente
                    a los retos de estos tiempos. El intercambio académico continúa gracias al apoyo de KOICA, DAAD,
                    RELO, Goethe Institut, PASCH, Alianza Francesa y Comisión Fulbright.
                    La Ley 30220 reivindica la importancia del aprendizaje de los idiomas al exigir su obligatoriedad y
                    naturaleza presencial en la programación curricular a nivel de pregrado, así como su continuidad en
                    los programas de maestría, artículo 43.2 y doctorado, artículo 43.3. El Estatuto reitera tal exigencia.
                    Es necesario establecer la importancia de la reivindicación de las lenguas nativas por la ley
                    universitaria. El artículo 40 enuncia: La enseñanza de un idioma extranjero, de preferencia inglés, o
                    la enseñanza de una lengua nativa, de preferencia quechua o aymara, es obligatoria en los cursos
                    de pregrado, constituyéndose en una exigencia de carácter perentoria su inclusión dentro de la
                    programación curricular que demanda el artículo 41° de la Ley Universitaria 30220 al establecer que
                    “Los estudios generales… deben estar dirigidos a la formación integral de los estudiantes”.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="perfilProfesional" class="section-content container p-5 hidden container">
        <div class="container mx-auto p-5">
            <h2 class="text-xl text-blue-700 font-semibold mb-4"> Perfil Profesional del Egresado </h2>
            <p class="text-black">Un Licenciado en Educación Secundaria con Mención en Inglés-Frances o Inglés Alemán es un profesional comprometido con la formación integral de estudiantes adolescentes. 
            </p>

            <p class="text-black">
                Este educador posee sólidos conocimientos en pedagogía y didáctica, especializándose en la enseñanza de los idiomas inglés y, francés o alemán. Su enfoque abarca el desarrollo de habilidades lingüísticas, la promoción de la comunicación efectiva y la apertura a la diversidad cultural.
            </p>

            <p class="text-black">
                Con una pasión por inspirar el amor por los idiomas, este licenciado contribuye al crecimiento académico y personal de sus estudiantes, preparándolos para enfrentar un mundo globalizado con confianza y competencia lingüística.
            </p>    
        </div>

        <div class="container mx-auto p-5">
            <h2 class="text-xl text-blue-700 font-semibold mb-4">Campo Ocupacional</h2>
            <p class="text-black">Las salidas profesionales para un Licenciado en Educación con Mención en Idiomas abarcan diversas áreas:</p>
            <ul class=" list-inside text-black ml-8">
                
                <li class="flex mt-2">
                    <i class="text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2 ">
                        <span class="font-bold "> Enseñanza de idiomas: </span> Imparte clases de idiomas en diversos entornos educativos, guiando a los estudiantes en su aprendizaje y creando un ambiente dinámico.
                    </p>

                </li>
                <li class="flex mt-2">
                <i class="text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2 ">
                       <span class="font-bold "> Gestión de instituciones educativas: </span> Lidera y administra instituciones, organizando recursos y tomando decisiones estratégicas para fomentar un entorno de aprendizaje óptimo. 
                    </p>
                    
                </li>
                <li class="flex mt-2">
                    <i class="text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2 ">
                        <span class="font-bold "> Asesoramiento y consultoría: </span> Ofrece orientación a otros educadores en programas de capacitación, mejorando la calidad pedagógica y el entorno educativo.
                    </p>
                    
                </li>

                <li class="flex mt-2">
                    <i class="text-blue-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2 ">
                        <span class="font-bold ">Liderazgo de proyectos educativos: </span>Emprende iniciativas educativas innovadoras, liderando proyectos que transforman la educación con prácticas pedagógicas creativas y efectivas.
                    </p>
                
                </li>              
                
            </ul>
        </div>

    </section>

    <section id="planEstudios" class="section-content p-5 hidden">
        <!-- plan de estudios -->
        <div class="p-5 md:flex min-h-60 md:min-h-96 w-full items-center justify-center gap-5 p-10">

            <div class="container mx-auto p-5 md:w-1/3">

                <div class="">
                    <ul class="list-inside text-gray-800">
                        <li class="flex justify-between">
                            <i class="text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                            </i> 
                            <p class="ml-2">
                                <span class="font-bold">Duración de Estudios:</span> 10 semestres académicos.
                            </p>
                        </li>
                        <li class="flex justify-between">                           
                            <i class="text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                            </i>
                            <p class="ml-2">
                                <span class="font-bold">Grado Académico:</span> Bachiller en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán.
                            </p>
                        </li>
                        <li class="flex justify-between">
                            <i class="text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                            </i>
                            <p class="ml-2">
                                <span class="font-bold">Título Profesional:</span> Licenciado en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán.
                            </p>

                        </li>
                    </ul>
                </div>
            
                <a href="https://dpaunt.edu.pe/curriculos/19.pdf" target="_blank" rel="nofollow"
                    class="p-3 w-full mt-4 bg-yellow-400 text-black rounded-md font-semibold text-white hover:bg-yellow-500 block text-center">
                    Ver Malla Curricular
                </a>
            </div>

            <!-- Video -->
            <div class="container mx-auto rounded-lg w-full">
                <iframe class="w-full h-80 md:h-96" src="https://www.youtube.com/embed/LjBkM77MPlo" title="Video informativo"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            
        </div>
    </section>


    <section id="planaDocente" class="section-content container p-5 hidden">
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        @foreach(range(1,8) as $index )
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
            
            <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
            
            <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Nombre del Docente</div>
            <p class="text-gray-700 text-base">
                Título o área del Docente - Facultad de Ciencias de la Educación.
            </p>
            </div>

            <div class="px-6 pb-4">
            <p class="text-gray-600 text-sm">
                <strong>Correo:</strong> docente@universidad.edu
            </p>
            <p class="text-gray-600 text-sm">
                <strong>Teléfono:</strong> +123 456 7890
            </p>
            </div>
            </div>
        @endforeach

        </section>

    </section>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function updateActiveTab() {
                const hash = window.location.hash || "#institucional"; // Valor predeterminado si no hay hash
                const tabs = document.querySelectorAll("#tabs a");
                const sections = document.querySelectorAll(".section-content");

                tabs.forEach(tab => {
                    const isActive = tab.getAttribute("data-link") === hash;
                    // Cambia color del texto de la pestaña activa
                    tab.classList.toggle("text-blue-700", isActive);
                    // Ajusta el color y ancho del stroke según el estado
                    tab.querySelector("span:last-child").classList.toggle("w-full", true); // El stroke siempre tiene tamaño completo
                    tab.querySelector("span:last-child").classList.toggle("bg-blue-700", isActive); // Cambia a azul para la pestaña activa
                    tab.querySelector("span:last-child").classList.toggle("bg-gray-400", !isActive); // Cambia a gris para las pestañas inactivas
                });

                sections.forEach(section => {
                    if ("#" + section.id === hash) {
                        section.classList.remove("hidden"); // Muestra la sección activa
                    } else {
                        section.classList.add("hidden"); // Oculta las demás secciones
                    }
                });

            }

            // Ejecuta la función cuando cambia el hash
            window.addEventListener("hashchange", updateActiveTab);

            // Llama a la función al cargar la página
            updateActiveTab();
        });
    </script>

@endsection