@extends('layouts.app')

@section('content')
<style>
  button.active {
    background-color: rgb(17, 24, 39);
    color: white;
  }
</style>

<main>

  <!-- banner -->
  <div class="relative">
    <img src="https://www.autonoma.pe/wp-content/uploads/2023/09/conocimientos-alumno-ciencias-comunicacion-universidad-autonoma-1.jpg" class="w-full h-auto object-cover ">

    <div class="absolute inset-0 flex items-center justify-center flex-col">

      <br>

      <span class="bg-black bg-opacity-60 p-4 text-white text-lg md:text-xl font-bold lg:text-4xl xl:text-5xl rounded">Ciencias de la Comunicación</span>
      <br>
      <span class="bg-black bg-opacity-60 text-white rounded text-sm md:text-md lg:text-lg text-center px-20 py-4 font-semibold">
        "Impulsando comunicadores integrales, capaces de informar, inspirar y conectar al mundo a través de la comunicación y la innovación"
      </span>
    </div>
  </div>


  <section class="max-w-[1050px] mx-auto p-5 md:px-0">

    <!-- Navigation buttons -->
    <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
      <button
        class="btn-nav active bg-gray-500 bg-opacity-30 text-gray-900 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
        data-target="nosotros">
        Nosotros
      </button>

      <button
        class="btn-nav bg-gray-500 bg-opacity-30 text-gray-900 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
        data-target="perfil">
        Perfiles
      </button>

      <button
        class="btn-nav bg-gray-500 bg-opacity-30 text-gray-900 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
        data-target="campo">
        Campo Ocupacional
      </button>

      <button
        class="btn-nav bg-gray-500 bg-opacity-30 text-gray-900 flex-1 font-bold px-4 py-2 rounded-lg shadow-md text-sm md:text-lg hover:-translate-y-2 transition-all ease-linear duration-200"
        data-target="plan-estudios">
        Plan de Estudios
      </button>

    </section>

    <!-- Cards -->
    <div id="welcome-cards" class="max-w-6xl mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6 ">

      <!-- Primera columna: Bienvenida -->
      <div class="bg-gray-900 p-6 rounded-lg shadow-lg text-center">
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
        <p class="text-white">"Bienvenidos a la Dirección de la Escuela Profesional de Ciencias de la Comunicación... "</p>
      </div>

      <!-- Segunda columna:  -->
      <div class="bg-gray-600 p-6 rounded-lg shadow-lg text-center">
        <div class="text-black text-6xl mb-4">👨‍💼</div> <!-- Icono personalizado -->
        <h3 class="text-xl font-bold text-white mb-2">Dra. María Luisa Bazán Guzmán</h3>
        <p class="text-white">
          Directora de la Escuela Profesional de Ciencias de la Comunicación.
          <br>
          <span class="text-sm font-semibold"> comunicacion@unitru.edu.pe </span>
        </p>
      </div>

      <!-- Tercera columna: -->
      <div class="bg-gray-900 p-6 rounded-lg shadow-lg text-center">
        <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
        <h3 class="text-xl font-bold text-white mb-2">Bach. Yanet Jacqueline Varas Castillo</h3>
        <p class="text-white">Asistente Administrativo</p>
      </div>

    </div>

    <!-- Contenido de secciones -->
    <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">

      <section class="contenido active" id="nosotros">

        <div class="lg:flex lg:space-x-10">

          <!-- Columna de Misión -->
          <div class="flex-1 mb-5 md:mb-0">

            <div class="flex text-gray-700">

              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                <path fill="currentColor" fill-rule="evenodd" d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444l-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39l.014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425" clip-rule="evenodd" />
              </svg>

              <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-gray-900 mb-4">
                Misión
              </h3>

            </div>

            <p class="text-md md:text-lg text-gray-700">
              "La Escuela Profesional de Ciencias de la Comunicación de la UNT lidera
              la formación de profesionales comunicadores estratégicos con amplio
              conocimiento científico y humanístico, solidos valores y sentido crítico
              acorde con la demanda de la sociedad local, regional, nacional e
              internacional".
            </p>

          </div>

          <!-- Columna de Visión -->
          <div class="flex-1">
            <div class="flex text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                <path fill="currentColor" fill-rule="evenodd" d="M0 5.368A6.01 6.01 0 0 1 5.58 0a.6.6 0 0 0-.093.093a10.13 10.13 0 0 0-2.209 5.275zM3.652 8.91q0 .066.005.131v2.496A6.01 6.01 0 0 1 0 6.618h3.278c.073.66.21 1.31.41 1.939a2 2 0 0 0-.036.352Zm.885-2.29h1.75l-1.58.684l-.051.023a9 9 0 0 1-.12-.708Zm7.41-1.25H8.665A10.13 10.13 0 0 0 6.457.092A.6.6 0 0 0 6.363 0a6.01 6.01 0 0 1 5.584 5.368Zm-7.41 0h2.87a8.9 8.9 0 0 0-1.435-3.831a8.9 8.9 0 0 0-1.435 3.83ZM9.65 6.71a.55.55 0 0 0-.434 0L5.242 8.432a.6.6 0 0 0-.116.068a.68.68 0 0 0-.349.596v3.028a.682.682 0 0 0 1.365 0v-2.3l3.074 1.331c.139.06.296.06.434 0l3.974-1.721a.546.546 0 0 0 0-1.002zm-2.933 4.51l2.024.877a1.74 1.74 0 0 0 1.383 0l2.024-.877v1.358c0 .12-.038.236-.11.33l-.435-.33l.434.331l-.001.002l-.002.002l-.004.006l-.012.015a2 2 0 0 1-.165.176c-.11.104-.27.237-.483.368c-.431.264-1.071.514-1.937.514s-1.506-.25-1.936-.515a3 3 0 0 1-.61-.5l-.037-.044l-.012-.015l-.004-.006l-.002-.002v-.002H6.83l.435-.33l-.435.33a.55.55 0 0 1-.11-.329l-.004-1.36Z" clip-rule="evenodd" />
              </svg>

              <h3 class="text-lg md:text-xl font-semibold mx-2 tracking-wide text-gray-900 mb-4">Visión</h3>
            </div>

            <p class="text-md md:text-lg text-gray-700">
              "Al 2024, la Escuela Profesional de Ciencias de la Comunicación será
              dentro de las universidades públicas del país una de las primeras a nivel
              nacional, acreditada para la formación científica, tecnológica y
              humanística, de profesionales comunicadores que contribuyan al
              desarrollo sostenible de la región La Libertad y del país".
            </p>
          </div>

        </div>

      </section>

      <section class="contenido lg:flex" id="perfil" style="display:none;">

        <div>

          <h2 class="text-lg md:text-xl font-bold text-gray-900 mb-4">Perfil de Ingresante</h2>
          <!-- <hr class="border border-gray-700 px-1 mb-3"> -->

          <ul class="space-y-4 text-lg text-gray-700 pl-5">
            <li class="flex">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>

              <p class="ml-2">
                <strong> Conocimientos básicos: </strong>
                Comprende una base sólida en áreas fundamentales para una educación integral. Incluye razonamiento verbal y matemático, que permiten desarrollar habilidades de comprensión y solución de problemas; además, conocimientos en política, economía y geopolítica para entender la sociedad; el marco legal constitucional para la comprensión de derechos y deberes, y la historia de la cultura, que aporta perspectiva y contexto histórico.
              </p>

            </li>

            <li class="flex">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>

              <p class="ml-2">
                <strong>Procedimental</strong>:
                Se enfoca en las habilidades prácticas y analíticas necesarias para procesar y aplicar conocimientos. Esto incluye la capacidad de análisis y síntesis para interpretar información compleja, argumentación para comunicar ideas de manera persuasiva, manejo básico de TIC’s, comprensión de textos para entender contenido escrito, y producción de textos para expresar ideas de forma coherente.
              </p>
            </li>

            <li class="flex">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>

              <p class="ml-2">
                <strong>Actitudes</strong>:
                Define los valores y disposiciones que orientan la conducta y motivación en el aprendizaje y el trabajo. Implica vocación y motivación para comprometerse, respeto hacia sí mismo y los demás, trabajo en equipo, capacidad para tomar decisiones en situaciones nuevas, perseverancia en la consecución de metas, habilidad en la comunicación, liderazgo, ética y responsabilidad, así como creatividad, iniciativa y disposición para adoptar nuevas tecnologías.
              </p>

            </li>
          </ul>

        </div>

        <br>

        <div>

          <h2 class="text-lg md:text-xl font-bold text-gray-900 mb-4">Perfil Profesional de Egresado</h2>
          <!-- <hr class="border border-gray-700 px-1 mb-3"> -->

          <p class="text-gray-700 text-lg">
            Planifica, implementa y evalúa proyectos de comunicación, publicidad y marketing, destacando la importancia de la comunicación interpersonal con diversos públicos. Utiliza la investigación para realizar diagnósticos y análisis de contextos e impactos. Desarrolla contenidos para medios tradicionales y digitales, trabajando de forma dependiente o independiente. Respeta la cosmovisión y cultura de los contextos en los que interviene. Demuestra creatividad, trabajo en equipo, eficiencia, resiliencia, responsabilidad, dinamismo y energía en sus actividades y roles.
          </p>


          </ul>
        </div>

      </section>

      <section class="contenido active" id="campo" style="display:none;">
        <h2 class="text-lg md:text-xl text-gray-900 font-bold mb-4">Campo Ocupacional</h2>

        <div class="container text-gray-700 text-lg">

          <p>
            El egresado de Ciencias de la Comunicación de la Universidad Nacional de Trujillo está capacitado para desempeñarse como gestor o director en cualquier empresa de comunicación. Asimismo, tiene la habilidad y conocimiento para emprender la formación de alguna actividad vinculada a:
          </p>

          <ul class="ml-10 mt-4">
            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 "> Empresas periodísticas.</p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 ">Programas de radio o televisión.</p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 "> Medios digitales y audiovisuales. </p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 "> Agencias de marketing o publicidad.</p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 ">Empresas de cualquier rubro de comunicación.</p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 "> Organizaciones gubernamentales.</p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 "> Compañías dedicadas a la comunicación.</p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2 "> Empresas de relaciones públicas. </p>
            </li>

            <li class="flex mt-2">
              <i class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
              </i>
              <p class="ml-2">Áreas de Comunicación Organizacional.</p>
            </li>
          </ul>

        </div>

      </section>

      <section class="contenido text-center text-white" id="plan-estudios" style="display:none;">
        <div class=" grid drop-shadow-lg mb-10 lg:grid-cols-6 gap-5 [&>div]:rounded-md [&>div]:text-center [&>div]:p-2 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center">
          <div class="bg-gray-700 lg:col-span-2">
            <p class="text-xl md:text-4xl font-bold">10</p>
            <h2 class="font-semibold text-lg">Semestres académicos</h2>
          </div>
          <div class="bg-gray-700 lg:col-span-4">
            <h3>Grado Académico</h3>
            <img src="{{ asset('icons/graduation.svg') }}" alt="grade-icon" class="w-16">
            <h2 class="font-semibold text-lg">Bachiller en Ciencias de la Comunicación</h2>
          </div>
          <div class="bg-gray-900 lg:col-span-4">
            <h3>Titulo</h3>
            <img src="{{ asset('icons/diploma.svg') }}" alt="diploma-icon" class="w-16">
            <h2 class="font-semibold  text-lg">Licenciado en Ciencias de la Comunicación</h2>
          </div>
          <div class="bg-gray-700 lg:col-span-2">
            <p class="text-xl md:text-4xl font-bold">208</p>
            <h2 class="font-semibold text-lg">Créditos</h2>
          </div>
        </div>

        <a href="https://dpaunt.edu.pe/curriculos/9.pdf" target="_blank" rel="nofollow"
          class="p-3 w-full mt-4 bg-yellow-400 text-black rounded-md font-semibold hover:bg-yellow-500 block text-center">
          Ver Currículo del Programa de Estudios
        </a>

      </section>

      <section class=" text-gray-700" id="plana-docente">
        <h2 class="text-3xl font-semibold mb-8 text-gray-900"> Nuestros docentes</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
          <!-- Profesor 1 -->
          <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <img class="w-full h-48 object-cover rounded-lg mb-6" src="ruta-a-foto1.jpg" alt="Profesor 1">
            <h3 class="text-2xl font-semibold text-center text-gray-800 mb-2">Profesor 1</h3>
            <p class="text-gray-600 text-center text-lg">Descripción breve del profesor. Aquí se puede incluir su especialidad, experiencia y logros.</p>
          </div>

          <!-- Profesor 2 -->
          <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <img class="w-full h-48 object-cover rounded-lg mb-6" src="ruta-a-foto2.jpg" alt="Profesor 2">
            <h3 class="text-2xl font-semibold text-center text-gray-800 mb-2">Profesor 2</h3>
            <p class="text-gray-600 text-center text-lg">Descripción breve del profesor. Aquí se puede incluir su especialidad, experiencia y logros.</p>
          </div>

          <!-- Profesor 3 -->
          <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <img class="w-full h-48 object-cover rounded-lg mb-6" src="ruta-a-foto3.jpg" alt="Profesor 3">
            <h3 class="text-2xl font-semibold text-center text-gray-800 mb-2">Profesor 3</h3>
            <p class="text-gray-600 text-center text-lg">Descripción breve del profesor. Aquí se puede incluir su especialidad, experiencia y logros.</p>
          </div>

          <!-- Profesor 4 -->
          <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <img class="w-full h-48 object-cover rounded-lg mb-6" src="ruta-a-foto4.jpg" alt="Profesor 4">
            <h3 class="text-2xl font-semibold text-center text-gray-800 mb-2">Profesor 4</h3>
            <p class="text-gray-600 text-center text-lg">Descripción breve del profesor. Aquí se puede incluir su especialidad, experiencia y logros.</p>
          </div>
        </div>

      </section>

    </section>


  </section>

</main>

<script>
  const datos = document.querySelectorAll('.datos');
</script>

<script src="{{ asset('js/main.js') }}"></script>

<!-- <script>
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
</script> -->

@endsection