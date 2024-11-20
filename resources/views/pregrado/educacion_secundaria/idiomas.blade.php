@extends('layouts.home')

@section('content')
<style>
  button.active {
    background-color: #1e40af;
    color: white;
  }
</style>

<!-- arreglo de nombres de los docentes -->
@php
$docentes = [
[
"nombre" => "Rosa Anticona Sandoval",
"foto" => "imagenes/idiomas/1.jpg"
],
[
"nombre" => "Claver Julio Aldama Flores",
"foto" => "imagenes/idiomas/2.jpg"
],
[
"nombre" => "Carlos Calderón Calderón",
"foto" => "imagenes/idiomas/3.jpg"
],
[
"nombre" => "María Elena Castro Alavedra",
"foto" => "imagenes/idiomas/4.jpg"
],
[
"nombre" => "José Del Rosario Alfaro",
"foto" => "imagenes/idiomas/5.jpg"
],
[
"nombre" => "Erika Aguilar Carrera",
"foto" => "imagenes/idiomas/6.jpg"
],
[
"nombre" => "Pilar Gómez Dextre",
"foto" => "imagenes/idiomas/7.jpg"
],
[
"nombre" => "Silvia Rodríguez Sánchez",
"foto" => "imagenes/idiomas/8.jpg"
],
[
"nombre" => "Nelver Vera Mostacero",
"foto" => "imagenes/idiomas/9.jpg"
],
[
"nombre" => "Maruzzela Beltrán Centurión",
"foto" => "imagenes/idiomas/10.jpg"
],
[
"nombre" => "Tatiana Calderón Rodríguez",
"foto" => "imagenes/idiomas/11.jpg"
],
[
"nombre" => "Shirley Miranda Narváez",
"foto" => "imagenes/idiomas/12.jpg"
],
];
@endphp

<!-- <h1 class="text-3xl md:text-5xl text-white bg-blue-800 w-full p-4 font-bold">Mención Idiomas: Inglés-Francés / Inglés-Alemán</h1> -->

<h1 class="text-3xl md:text-5xl text-white bg-blue-800 w-full p-4 font-bold">Mención Idiomas: Inglés-Francés / Inglés-Alemán</h1>


<section class="max-w-[1050px] mx-auto p-5 md:px-0">

  <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
    <button
      class="btn-nav active bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
      data-target="nosotros">
      Nosotros
    </button>

    <button
      class="btn-nav bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
      data-target="perfil">
      Perfiles
    </button>

    <button
      class="btn-nav bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
      data-target="campo">
      Campo Ocupacional
    </button>

    <button
      class="btn-nav bg-blue-800 bg-opacity-15 text-gray-700 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
      data-target="plan-estudios">
      Plan de Estudios
    </button>

  </section>

  <!--Welcome Cards -->
  <div id="welcome-cards" class="max-w-6xl mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6 ">

    <!-- Primera columna: Bienvenida -->
    <div class="bg-red-700 p-6 rounded-lg shadow-lg text-center">
      <div class="text-red-500 mb-4 flex justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 36 36">
          <path fill="#292f33" d="M6 15h24v2H6zm15 15c0 2.208-.792 4-3 4s-3-1.792-3-4s.791-2 3-2s3-.208 3 2" />
          <path fill="#66757f" d="M18 31c-6.627 0-10 1.343-10 3v2h20v-2c0-1.657-3.373-3-10-3" />
          <path fill="#99aab5" d="M18 0a9 9 0 0 0-9 9v7h18V9a9 9 0 0 0-9-9" />
          <g fill="#292f33">
            <circle cx="15.5" cy="2.5" r="1.5" />
            <circle cx="20.5" cy="2.5" r="1.5" />
            <circle cx="17.5" cy="6.5" r="1.5" />
            <circle cx="22.5" cy="6.5" r="1.5" />
            <circle cx="12.5" cy="6.5" r="1.5" />
            <circle cx="15.5" cy="10.5" r="1.5" />
            <circle cx="10.5" cy="10.5" r="1.5" />
            <circle cx="20.5" cy="10.5" r="1.5" />
            <circle cx="25.5" cy="10.5" r="1.5" />
            <circle cx="17.5" cy="14.5" r="1.5" />
            <circle cx="22.5" cy="14.5" r="1.5" />
            <circle cx="12.5" cy="14.5" r="1.5" />
          </g>
          <path fill="#66757f" d="M9 15.062V17c0 4.971 4.029 9 9 9s9-4.029 9-9v-1.938z" />
          <path fill="#66757f" d="M30 14a1 1 0 0 0-1 1v2c0 6.074-4.925 11-11 11S7 23.074 7 17v-2a1 1 0 0 0-2 0v2c0 7.18 5.82 13 13 13s13-5.82 13-13v-2a1 1 0 0 0-1-1" />
        </svg>
      </div>
      <!-- Icono personalizado -->

      <h3 class="text-xl font-bold text-white mb-2">Bienvenida</h3>
      <p class="text-white">"Bienvenidos a la Escuela Profesional de Educación Secundaria Mención Idiomas,
         un espacio donde la excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."</p>
    </div>

    <!-- Segunda columna:  -->
    <div class="bg-white p-6 rounded-lg shadow-lg text-center ">
      <div class="text-black text-6xl mb-4">👩</div> <!-- Icono personalizado -->
      <h3 class="text-xl font-bold mb-2 text-gray-900">Dra. Rosa Anticona Sandoval</h3>
      <p class=" text-gray-700">
        Directora del Departamento de Idiomas y Lingüistica
        <br>
        <span class="text-sm font-semibold text-gray-700"> depidilin@unitru.edu.pe </span>
      </p>
    </div>

    <!-- Tercera columna: -->
    <div class="bg-blue-900 p-6 rounded-lg shadow-lg text-center">
      <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
      <h3 class="text-xl font-bold text-white mb-2">Fredesvinda García Andrade</h3>
      <p class="text-white">Asistente Administrativa</p>
    </div>

  </div>

  <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">

    <section class="contenido active" id="nosotros">

      <div class="lg:flex lg:space-x-10">

        <!-- Columna de Misión -->
        <div class="flex-1 mb-5 md:mb-0">

          <div class="flex text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
              <path fill="currentColor" fill-rule="evenodd" d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425" clip-rule="evenodd" />
            </svg>

            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-blue-800 mb-4">
              Misión
            </h3>

          </div>

          <p class="text-md md:text-lg text-gray-700">
            Somos el primer programa de estudios del Perú que forma licenciados en Educación Secundaria
            con mención en Idiomas: Inglés-Francés e Inglés-Alemán, de excelencia académica y preparados
            para enfrentar los retos de un mundo complejo y globalizado buscando el desarrollo responsable
            y sostenible de nuestra región y país.
          </p>
        </div>

        <!-- Columna de Visión -->
        <div class="flex-1">
          <div class="flex text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
              <path fill="currentColor" fill-rule="evenodd" d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z" clip-rule="evenodd" />
            </svg>

            <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-blue-800 mb-4">Visión</h3>
          </div>

          <p class="text-md md:text-lg text-gray-700">
            En el año 2025, seremos una unidad académica acreditada, que contribuye al desarrollo sustentable de la región,
            del país y del mundo, sensible a las exigencias sociales, que forma profesionales con excelencia académica en idiomas,
            se proyecta a la comunidad con responsabilidad social, realiza investigación científica, respeta la diversidad cultural
            y la ecología, y contribuye a la formación integral del ser humano dentro del marco de los valores ético y estéticos.
          </br><b class="text-sm italic">Currículo del Programa de estudios de Educación Secundaria Idiomas(2018)</b>
          </p>
        </div>

      </div>

      <section class="text-gray-700" id="plana-docente">
        <h2 class="sm:text-lg lg:text-xl text-blue-800 font-bold mb-4 mt-7"> Nuestros docentes</h2>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

          @foreach($docentes as $docente )
          <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">

            <img class="w-full h-64 object-cover" src="{{ asset($docente['foto']) }}" alt="FotoDocente">

            <div class="px-6 py-4">
              <div class="font-semibold text-lg mb-2">{{ $docente['nombre'] }}</div>
            </div>

          </div>
          @endforeach

        </section>


        </div>


      </section>

    </section>


    <section class="contenido lg:flex" id="perfil" style="display:none;">
      <div>
        <h2 class="text-lg md:text-xl font-bold text-blue-800 mb-4">Perfil de Ingresante</h2>

        <ul class="list-disc flex flex-col gap-1 p-4 text-md md:text-lg ml-8">
          <li class="text-gray-700">Tiene conocimientos básicos de inglés.</li>
          <li class="text-gray-700">Posee aptitud para el procesamiento de sistemas lingüísticos, demostrando competencias básicas en la comprensión y producción de textos orales y escritos.</li>
          <li class="text-gray-700">Tiene información básica de las Ciencias Naturales, Sociales y Formales; así como, de la cultura humanística en perspectiva histórica a niveles del Perú y el mundo. Tiene interés por la investigación científica.</li>
          <li class="text-gray-700">Es crítico, reflexivo y actúa con coherencia y lógica.</li>
          <li class="text-gray-700">Maneja herramientas básicas en TIC's.</li>
          <li class="text-gray-700">Muestra capacidad de trabajo individual y en equipo.</li>
          <li class="text-gray-700">Demuestra interés para el trabajo con jóvenes y adultos.</li>
          <li class="text-gray-700">Posee un comportamiento sustentado en valores.</li>
          <li class="text-gray-700">Tiene capacidad de liderazgo, vocación de servicio y sensibilidad social.</li>
          <li class="text-gray-700">Es tolerante y conciliador.</li>
          <li class="text-gray-700">Denota una conducta ética en lo personal y social.</li>
        </ul>
      </div>

      <br>

      <div>
        <h2 class="text-lg md:text-xl font-bold text-blue-800 mb-4 ">Perfil Profesional de Egresado</h2>

        <ul class="list-disc flex flex-col gap-1 p-4 text-gray-700 text-md md:text-lg ml-8">
          <li>Un Licenciado en Educación Secundaria con Mención en Inglés-Francés o Inglés-Alemán es un profesional comprometido con la formación integral de estudiantes adolescentes.</li>
          <li>Este educador posee sólidos conocimientos en pedagogía y didáctica, especializándose en la enseñanza de los idiomas inglés y, francés o alemán. Su enfoque abarca el desarrollo de habilidades lingüísticas, la promoción de la comunicación efectiva y la apertura a la diversidad cultural.</li>
          <li>Con una pasión por inspirar el amor por los idiomas, este licenciado contribuye al crecimiento académico y personal de sus estudiantes, preparándolos para enfrentar un mundo globalizado con confianza y competencia lingüística.</li>
        </ul>
      </div>


    </section>

    <section class="contenido active" id="campo" style="display:none;">
      <h2 class="text-xl text-blue-800 font-semibold mb-4">Campo Ocupacional</h2>

      <div class="container">

        <p class="text-gray-700 text-md md:text-lg">Las salidas profesionales para un Licenciado en Educación con Mención en Idiomas abarcan diversas áreas:</p>
        <ul class=" list-inside text-gray-700 ml-8 text-md md:text-lg">

          <li class="flex mt-2">
            <i class="text-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
              </svg>
            </i>
            <p class="ml-2 ">
              <span class="font-bold "> Enseñanza de idiomas: </span> Imparte clases de idiomas en diversos entornos educativos, guiando a los estudiantes en su aprendizaje y creando un ambiente dinámico.
            </p>

          </li>
          <li class="flex mt-2">
            <i class="text-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
              </svg>
            </i>
            <p class="ml-2 ">
              <span class="font-bold "> Gestión de instituciones educativas: </span> Lidera y administra instituciones, organizando recursos y tomando decisiones estratégicas para fomentar un entorno de aprendizaje óptimo.
            </p>

          </li>
          <li class="flex mt-2">
            <i class="text-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
              </svg>
            </i>
            <p class="ml-2 ">
              <span class="font-bold "> Asesoramiento y consultoría: </span> Ofrece orientación a otros educadores en programas de capacitación, mejorando la calidad pedagógica y el entorno educativo.
            </p>

          </li>

          <li class="flex mt-2">
            <i class="text-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
              </svg>
            </i>
            <p class="ml-2 ">
              <span class="font-bold ">Liderazgo de proyectos educativos: </span>Emprende iniciativas educativas innovadoras, liderando proyectos que transforman la educación con prácticas pedagógicas creativas y efectivas.
            </p>

          </li>

        </ul>
      </div>

    </section>

    <section class="contenido text-center text-white" id="plan-estudios" style="display:none;">
      <div class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center">
        <div class="bg-blue-600 lg:col-span-2">
          <p class="text-xl md:text-4xl font-bold">10</p>
          <h2 class="font-semibold text-lg">Semestres académicos</h2>
        </div>
        <div class="bg-blue-900 lg:col-span-4">
          <h3>Grado Académico</h3>

          <img src="{{ asset('icons/graduation.svg') }}" alt="grade-icon" class="w-16">

          <h2 class="font-semibold text-lg">Bachiller en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán</h2>
        </div>
        <div class="bg-blue-900 lg:col-span-4">
          <h3>Titulo</h3>
          <img src="{{ asset('icons/diploma.svg') }}" alt="diploma-icon" class="w-16">
          <h2 class="font-semibold  text-lg">Licenciado en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán</h2>
        </div>
        <div class="bg-blue-700 lg:col-span-2">
          <p class="text-xl md:text-4xl font-bold">220</p>
          <h2 class="font-semibold text-lg">Créditos</h2>
        </div>
      </div>

      <a href="{{ asset('curriculos/PlanCurricularIdiomas.pdf') }}" target="_blank" rel="nofollow"
        class="p-3 w-full mt-4 bg-blue-700 rounded-md font-semibold text-white hover:bg-blue-800 block text-center">
        Ver Currículo del Programa de Estudios
      </a>

    </section>

  </section>


  <section class="md:px-20 justify-center">

    <h2 class="text-lg xl:text-xl text-blue-800 font-bold mb-4"> Contacto </h2>

    <form action="" method="POST"
      class="border-2 border-blue-800 gap-3 shadow-xl max-w-[600px] mx-auto rounded-lg p-5 grid md:grid-cols-2 [&>section>img]:bg-blue-800 [&>section]:flex [&>section>img]:p-2 [&>section]:rounded-md [&>section]:border [&>section]:border-blue-800 [&>section>img]:rounded-l-[5px] [&>section>input]:w-full [&>section>input]:rounded-r-md [&>section>input]:px-2 [&>section>input]:bg-transparent ">

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
        class="md:col-span-2 rounded-md p-3 border border-blue-800 bg-transparent"></textarea>
      <input class="py-2 bg-blue-800 rounded-md text-white font-bold cursor-pointer" type="submit"
        id="enviar" name="enviar" value="Enviar">
      <input class="py-2 border-2 border-blue-800 rounded-md text-blue-800 font-bold cursor-pointer"
        type="reset" id="borrar" name="borrar" value="Borrar">
    </form>
  </section>

</section>

<script src="{{ asset('js/main.js') }}"></script>

<script>
  document.querySelectorAll('.btn-nav').forEach(tab => {
    tab.addEventListener('click', function() {
      const target = this.getAttribute('data-target');
      console.log(target);

      document.querySelectorAll('.btn-nav').forEach(t => {
        t.classList.remove('active');
      });
      this.classList.add('active');

      document.querySelectorAll('.contenido').forEach(content => {
        content.classList.remove('active');
        content.style.display = 'none';
      });

      const activeContent = document.getElementById(target);
      activeContent.style.display = 'block';
      setTimeout(() => {
        activeContent.classList.add('active');
      }, 10);

      // Controlar la visibilidad de las cards
      const cards = document.getElementById('welcome-cards');
      if (target === 'nosotros') {
        cards.classList.remove('hidden'); // Muestra las cards
        document.querySelector('.datos').classList.add('order-first'); // Agregar 'order-first' a datos
      } else {
        cards.classList.add('hidden'); // Oculta las cards
        document.querySelector('.datos').classList.remove('order-first'); // Quitar 'order-first' de datos
      }

    });
  });



  function contador(elemento, objetivo, duracion) {
    let inicio = 0;
    const incremento = objetivo / duracion * 100;
    const intervalo = setInterval(() => {
      inicio += incremento;
      if (inicio >= objetivo) {
        elemento.textContent = objetivo;
        clearInterval(intervalo);
      } else {
        elemento.textContent = Math.floor(inicio);
      }
    }, 50);
  }
  document.addEventListener('DOMContentLoaded', () => {
    const contadores = document.querySelectorAll('.numero');
    contadores.forEach(span => {
      const objetivo = parseInt(span.getAttribute('data-objetivo'), 10);
      const duracion = 5000;
      contador(span, objetivo, duracion);
    });
  });
</script>

@endsection