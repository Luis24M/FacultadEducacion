@extends('layouts.home')

@section('content')



<div class="relative">
  <img src="https://unitru.edu.pe/webfiles//Noticia/2024/9/0_Noticia_030920241112.jpg"  class="w-full h-auto object-cover " >
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz8PbWHIdUn4h5c3EK3e4PRK0AL4noG_ONQQ&s" class="absolute top-2 left-5 w-24" alt="Imagen superpuesta">
  <div class="absolute inset-0 flex items-center justify-center flex-col">
  
  <span class="bg-black bg-opacity-50 text-white md:text-3xl  font-bold rounded">UNT</span>
    <br>
    
    <span class="bg-black bg-opacity-50 p-4 text-white md:text-5xl rounded">EDUCACION PRIMARIA</span>
    <br>
    <span class="bg-black bg-opacity-50 p-4 text-white rounded">¡Bienvenidos a la Carrera de Educación Primaria! Este espacio educativo te invita a sumergirte en la asombrosa travesía de formar parte de la enseñanza fundamental. 
    Prepárate para iniciar un viaje significativo, donde cultivarás habilidades esenciales y descubrirás la gratificación de guiar los primeros pasos en el aprendizaje
    de los más jóvenes. Estamos emocionados de acompañarte en este camino educativo, contribuyendo al desarrollo integral de los estudiantes en sus años iniciales de educación. 
    ¡Comencemos juntos este emocionante viaje hacia un futuro repleto de descubrimientos y aprendizaje en la Educación Primaria!</span> <!-- Ejemplo de texto adicional -->
  </div>
</div>





  <div class=" max-w-6xl mx-auto my-6 grid grid-cols-1 md:grid-cols-3 gap-6 ">
        <!-- Primera columna: Bienvenida -->
        <div class="bg-orange-600 p-6 rounded-lg shadow-lg text-center">
            <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
            <h3 class="text-xl font-bold text-white mb-2">Bienvenida</h3>
            <p class="text-white">"Bienvenidos a la Facultad de Educación y Ciencias de la Comunicación, un espacio donde la excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."</p>
        </div>

        <!-- Segunda columna: Dr. Manuel Quipuscoa Silvestre -->
        <div class="bg-blue-900 p-6 rounded-lg shadow-lg text-center">
            <div class="text-red-500 text-6xl mb-4">👨‍💼</div> <!-- Icono personalizado -->
            <h3 class="text-xl font-bold text-white mb-2">Dr. Manuel Quipuscoa Silvestre</h3>
            <p class="text-white">Director del Programa de Estudios de Educación Primaria<br>Universidad Nacional de Trujillo</p>
        </div>

        <!-- Tercera columna: Mg. Patricia Roxana Vela Gálvez -->
        <div class="bg-orange-600 p-6 rounded-lg shadow-lg text-center">
            <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
            <h3 class="text-xl font-bold text-white mb-2">Mg. Patricia Roxana Vela Gálvez</h3>
            <p class="text-white">Miembro Representante Administrativo del Programa de Estudios de Educación Primaria.</p>
        </div>
    </div>

    

     <!-- Contenedor principal -->
     <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="md:flex">

            <!-- Sección de imagen a la izquierda -->
            <div class="md:w-1/2">
                <img src="https://facedu.unitru.edu.pe/wp-content/uploads/2023/11/FACEDU_Plaza.jpg" alt="Educación Primaria" class="w-full h-full object-cover">
                
            </div>

            <!-- Sección de texto a la derecha -->
            <div class="md:w-1/2 p-6">
                <h2 class="text-orange-500 font-bold text-xl uppercase mb-4">// Educación Primaria //</h2>
                <h1 class="text-blue-900 font-bold text-4xl mb-4">Datos de la Carrera</h1>
                <p class="text-text-black mb-6">
                    El licenciado en Educación Primaria es un profesional que contribuye al proceso de formación de los niños en edad escolar (seis a once años de edad), jóvenes y adultos que cursan educación primaria. Su formación es integral en los aspectos científicos, tecnológicos y humanísticos.
                </p>

                <!-- Misión -->
                <div class="mb-4">
                    <h3 class="font-bold text-xl text-blue-900 mb-2">01 Misión:</h3>
                    <p class="text-black">
                        Formar licenciados en educación primaria, competitivos, con una sólida formación científica, tecnológica, pedagógica, humanística, ética e inclusiva para la mejora de la calidad educativa a través de la investigación, innovación y desarrollo sostenible de la localidad, región y el país.
                    </p>
                </div>

                <!-- Visión -->
                <div class="mb-4">
                    <h3 class="font-bold text-xl text-blue-900 mb-2">02 Visión:</h3>
                    <p class="text-text-black">
                        Al 2024 somos una Escuela Académica de Educación Primaria de la UNT, acreditada que forma líderes de cambio altamente calificados con conocimiento científico, tecnológico y humanístico capaces de satisfacer la demanda de la Educación Básica de la localidad, la región y el país.
                    </p>
                </div>

                <!-- Objetivos Educacionales -->
                <div class="mb-6">
                    <h3 class="font-bold text-xl text-blue-900 mb-2">03 Objetivos Educacionales:</h3>
                    <ul class="list-disc list-inside text-text-black space-y-2">
                        <li>OE 1: Demuestra competencias profesionales de gestión del proceso de aprendizaje enseñanza para la formación integral a fin de que estos actúen como ciudadanos globales.</li>
                        <li>OE 2: Gestiona procesos de organización y dirección de instituciones educativas asociados a proyectos de investigación científica, innovación e intervención sociocultural.</li>
                        <li>OE 3: Demuestra una actitud de compromiso para su superación continua ante los desafíos socioeducativos, evidenciando identidad profesional y ética.</li>
                    </ul>
                </div>

                <!-- Botón "Ver Más" -->
                <div>
                    <a href="https://www.youtube.com/embed/6mmdvUizSbk?si=FeLkyF947RocMboP" class="inline-block bg-[rgb(255,102,0)] text-white font-bold py-2 px-4 rounded-full hover:bg-blue-900">
                        Ver Más →
                    </a>
                </div>
            </div>

        </div>
    </div>

<!-- Sección de estadísticas -->
<section class="bg-cover bg-center relative" style="background-image: url('{{ asset('images/estadisticas-bg.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-15"></div>
    <div class="relative z-10 max-w-7xl mx-auto py-16 px-6 md:px-12 text-white flex justify-between items-center space-x-8">

        <!-- Tarjeta 1 -->
        <div class="text-center">
            <div class="text-5xl font-bold mb-2 text-[rgb(255,102,0)]" id="stat1">0</div>
            <div class="text-lg text-blue-900">Años de experiencia</div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="text-center">
            <div class="text-5xl font-bold mb-2 text-[rgb(255,102,0)]" id="stat2">0</div>
            <div class="text-lg text-blue-900">Técnicos expertos</div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="text-center">
            <div class="text-5xl font-bold mb-2 text-[rgb(255,102,0)]" id="stat3">0</div>
            <div class="text-lg text-blue-900">Alumnos satisfechos</div>
        </div>

        <!-- Tarjeta 4 -->
        <div class="text-center">
            <div class="text-5xl font-bold mb-2 text-[rgb(255,102,0)]" id="stat4">0</div>
            <div class="text-lg text-blue-900">Proyectos completos</div>
        </div>

    </div>
</section>

<!-- Script para animar el conteo -->
<script>
    function animateValue(id, start, end, duration) {
        let obj = document.getElementById(id);
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let timer = setInterval(function() {
            current += increment;
            obj.textContent = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Ejecuta la animación al cargar la página
    window.onload = function() {
        animateValue("stat1", 0, 199, 2000);  // Años de experiencia
        animateValue("stat2", 0, 1234, 2000); // Técnicos expertos
        animateValue("stat3", 0, 1999, 2000); // Alumnos satisfechos
        animateValue("stat4", 0, 200, 2000);  // Proyectos completos
    };
</script>




    <section class="font-sans bg-gray-100">

<div class="flex p-6">
    <!-- Sidebar -->
    <div class="w-1/3">
        <button onclick="showContent('prueba')" id="prueba-btn" class="block w-full bg-orange-500 text-white py-4 mb-4 text-lg rounded hover:bg-orange-600 active">Prueba</button>
        <button onclick="showContent('servicio')" id="servicio-btn" class="block w-full bg-gray-200 text-gray-800 py-4 mb-4 text-lg rounded hover:bg-gray-300">Servicio</button>
        <button onclick="showContent('programa')" id="programa-btn" class="block w-full bg-gray-200 text-gray-800 py-4 mb-4 text-lg rounded hover:bg-gray-300">Programa E.Primaria</button>
    </div>

    <!-- Content -->
    <div class="w-2/3 p-6 bg-blue-950 border-l-1 border-gray-300 rounded">
        <div id="prueba" class="content-item  ">
            
            <h2 class="text-2xl font-bold text-white mb-4">Educación Primaria</h2>
            <p class="text-white">Ejercicio profesional en instituciones de Educación Básica Regular y Educación Básica Alternativa, tanto en entornos públicos como privados. Implica la aplicación de conocimientos pedagógicos para el desarrollo integral de estudiantes en diferentes contextos educativos.</p>
            <ul class="list-disc list-inside text-white">
                <li>Conocimientos básicos en razonamiento verbal.</li>
                <li>Conocimientos básicos en razonamiento matemático.</li>
                <li>Conocimientos básicos de cultura general.</li>
            </ul>
        </div>
        <div id="servicio" class="content-item hidden relative p-8 rounded-lg shadow-lg">
        <img src="https://scontent.ftru2-3.fna.fbcdn.net/v/t39.30808-6/459527392_2837370383094701_7813841501268298919_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGT2wEmwoOROvwDUBlWZlsl1-rVlcXH2N3X6tWVxcfY3cLfeUg2NT3i8K-KD2Z1S04WbTb9J2T6qI2KJxyzoDJO&_nc_ohc=Rt0Sf_yH6vMQ7kNvgFoeKSO&_nc_zt=23&_nc_ht=scontent.ftru2-3.fna&_nc_gid=AyOH35P56VQuzmw7nLJgPYf&oh=00_AYDdMtfuZurtgNsExTWXYJkBhjEKJNO3sTpyIxTpx6Pauw&oe=67347888" class="absolute top-0 left-0 w-full h-full object-cover ">
        <div class="relative z-10">
   
          <h2 class="text-2xl font-bold mb-4 bg-black bg-opacity-50 text-white">Perspectivas Ocupacionales</h2>
            <p class="bg-black bg-opacity-50 text-white">Esta área implica compartir conocimientos especializados, facilitar el aprendizaje y contribuir al crecimiento académico de los estudiantes en niveles más avanzados.</p>
            <ul class="list-disc list-inside bg-black bg-opacity-50 text-white">
                <li>Gestiones de instituciones educativas, abarcando la planificación estratégica, administración de recursos y liderazgo.</li>
                <li>Asesoramiento y gestión en proyectos educativos de desarrollo social.</li>
                <li>Promoción social, cultural y comunal, contribuyendo al desarrollo de comunidades a través de actividades que fomentan la inclusión.</li>
            </ul> 
            </div>      
        </div>

      <div id="programa" class="content-item hidden relative p-8 rounded-lg shadow-lg">
    
    <!-- Imagen de fondo con opacidad -->
    <img src="https://rpu.edu.pe/wp-content/uploads/2016/06/4347348550_cbd101e4f7_b.jpg" class="absolute top-0 left-0 w-full h-full object-cover ">
    
    <!-- Contenido sobre la imagen -->
    <div class="relative z-10">
        <h2 class="text-2xl font-bold mb-4 bg-black bg-opacity-50 text-white  ">UNT-Universidad Nacional de Trujillo</h2>
        <p class=" bg-black bg-opacity-50 text-white">Estamos emocionados de acompañarte en este camino educativo, contribuyendo al desarrollo integral de los estudiantes en sus años iniciales de educación.</p>
        <ul class="list-disc list-inside bg-black bg-opacity-50 text-white">
            <li>Conocimientos básicos en razonamiento verbal.</li>
            <li>Conocimientos básicos en razonamiento matemático.</li>
            <li>Conocimientos básicos de cultura general.</li>
        </ul>
    </div>

</div>
    </div>
</div>

<script>
    function showContent(contentId) {
        // Ocultar todos los elementos de contenido
        var contents = document.getElementsByClassName('content-item');
        for (var i = 0; i < contents.length; i++) {
            contents[i].classList.add('hidden');
        }

        // Mostrar el contenido seleccionado
        document.getElementById(contentId).classList.remove('hidden');

        // Cambiar el estado activo de los botones
        var buttons = document.getElementsByTagName('button');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('bg-orange-500', 'text-white');
            buttons[i].classList.add('bg-gray-200', 'text-gray-800');
        }
        document.getElementById(contentId + '-btn').classList.add('bg-orange-500', 'text-white');
        document.getElementById(contentId + '-btn').classList.remove('bg-white', 'text-orange-500');
    }
</script>

</section>


<section class="bg-gray-100">

    <!-- Sección de formulario -->
    <section class="flex items-center justify-center bg-orange-600 p-4">
        <div class="flex w-full max-w-8xl bg-blue-900 p-8 rounded-lg shadow-lg">
            
            <!-- Lado izquierdo: mensaje -->
            <div class="flex items-center justify-center bg-blue-950 text-white w-1/2 p-8"> <!-- Establecer ancho -->
                <h2 class="text-2xl font-bold leading-tight text-center">
                    Complete el siguiente formulario para que podamos responder las inquietudes que existan sobre nosotros
                </h2>
            </div>

            <!-- Lado derecho: formulario -->
            <div class="bg-orange-600 p-8 rounded-lg w-1/2"> <!-- Establecer ancho -->
                <h2 class="text-white text-2xl font-bold mb-6 text-center">Completa el formulario</h2>
                
                <form action="#" class="space-y-4">
                    <div class="flex gap-4">
                        <input type="text" placeholder="NOMBRE" class="p-2 border rounded w-full focus:outline-none">
                        <input type="text" placeholder="APELLIDO" class="p-2 border rounded w-full focus:outline-none">
                    </div>
                    
                    <div class="flex gap-4">
                        <input type="email" placeholder="CORREO ELECTRONICO" class="p-2 border rounded w-full focus:outline-none">
                        <input type="date" class="p-2 border rounded w-full focus:outline-none">
                    </div>
                    
                    <textarea placeholder="MENSAJE" class="p-2 border rounded w-full focus:outline-none" rows="4"></textarea>
                    
                    <button type="submit" class="bg-blue-900 text-white py-2 px-4 rounded w-full font-bold">
                        ENVIAR
                    </button>
                </form>
            </div>

        </div>
    </section>

</section>


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