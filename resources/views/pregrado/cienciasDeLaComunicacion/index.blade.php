@extends('layouts.app')

@section('content')

<div class="bg-white">

  <!-- breadcrum -->
  <div class="hidden lg:flex font-semibold h-7 w-full bg-gray-600 text-[#E5E5E5] text-sm items-center">
    <p class="hidden lg:block ml-8"> Facultad de Educación y Ciencias de la comunicación | Pregrado | <span class="text-white"> Ciencias de la Comunicación </span> </p>
  </div>

  <div class="lg:hidden flex font-semibold h-7 w-full bg-gray-600 text-[#E5E5E5] text-sm items-center ">
    <p class="lg:hidden block ml-8 tracking-wider"> Pregrado </p>
  </div>

  <!-- banner -->

  <section class="min-h-60 md:min-h-96 w-full bg-gray-800 flex items-center justify-center gap-5 p-10">
      <div class="flex flex-col justify-center gap-5 text-center">
      <h1 class="text-xl md:text-4xl text-white font-semibold">Ciencias de la comunicación</h1>
      <p class="text-sm md:text-base text-white">"Impulsando comunicadores integrales, capaces de informar, inspirar y conectar al mundo a través de la comunicación y la innovación"</p>
      </div>
      <img src="https://via.placeholder.com/300x200?text=imagen+Prueba" alt="escuela de educación inicial"
        class="w-full h-full shadow-lg hidden lg:block object-cover ">

  </section>

  <div class="h-2 w-full bg-gray-600"> </div>
  

  <!-- Institucional -->
  <section class="p-5" id="institucional">
    
    <div class="md:flex ">
      
      <div class="container mx-auto p-5">
        <h2 class="text-2xl text-black font-semibold"> Institucional </h2>

        <p class="text-black mt-2 text-md">
          Desde su creación, el 28 de junio de 1993, la Escuela de Ciencias de la Comunicación de la Universidad Nacional de Trujillo (UNT) ha asumido el compromiso de formar profesionales en atención a las necesidades actuales del mercado, así como las tendencias del campo formativo de las Ciencias de la Comunicación. Todo esto, sustentado sobre competencias y capacidades que construyen un perfil formativo, innovador y ambicioso en la historia de nuestra unidad académica. De esta forma, nuestros egresados están preparados para gestionar procesos de comunicación, en investigar fenómenos comunicativos, en producir contenidos para medios de comunicación y promover proyectos innovadores dentro de la especialidad.
        </p>

      </div>

      <!-- vision y mision -->
      <div class="container mx-auto p-5 space-y-4">
        <div >
          <h3 class="text-xl font-semibold mb-2 text-black">Visión</h3>
          <p class="text-md">
            Al 2024, la Escuela Profesional de Ciencias de la Comunicación será
            dentro de las universidades públicas del país una de las primeras a nivel
            nacional, acreditada para la formación científica, tecnológica y
            humanística, de profesionales comunicadores que contribuyan al
            desarrollo sostenible de la región La Libertad y del país.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-semibold mb-2 text-black">Misión</h3>
          <p class="text-md">
            La Escuela Profesional de Ciencias de la Comunicación de la UNT lidera
            la formación de profesionales comunicadores estratégicos con amplio
            conocimiento científico y humanístico, solidos valores y sentido crítico
            acorde con la demanda de la sociedad local, regional, nacional e
            internacional.
          </p>
        </div>
      </div>

    </div>

    <!-- Valores -->
    <div class="container mx-auto p-5">
      <header class="mb-4">
        <h2 class="text-2xl font-semibold text-black">Principios educativos</h2>
      </header>
      <p class="text-center">
        Estos son los principios y valores fundamentales que conducen nuestra institución:
      </p>

      <div class="flex flex-wrap justify-center gap-6 p-5">
        @php
            $valores = ['Verdad', 'Justicia', 'Respeto', 'Honradez', 'Tolerancia', 'Libertad', 'Solidaridad', 'Responsabilidad', 'Honestidad'];
        @endphp  
        <!-- Valores-->
        @foreach($valores as $key => $valor)
            <div class=" inline-flex {{ $key % 2 == 0 ? 'bg-gray-800' : 'bg-gray-700' }} rounded-md flex items-center justify-center text-white text-center font-semibold px-5 py-4">
                {{ $valor }}
            </div>
        @endforeach
      </div>


    </div>

  </section>

  <div class="h-1 md:flex mx-10 bg-gray-600">
  </div>

  <section class="container mx-auto p-5" id="resenaHistorica">
    <header class="p-5">
        <h2 class="text-2xl font-semibold text-black">Reseña histórica</h2>
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Columna izquierda: Texto -->
        <div class="text-black leading-relaxed space-y-4 p-5">
            <p>
                La carrera de Ciencias de la Comunicación se creó el 28 de junio de 1993 en la Facultad de Educación y Ciencias de la Comunicación de la UNT, bajo la gestión del Dr. Víctor Baltodano Azabache como Decano y el Dr. Guillermo Gil Malca como Rector. En 1997, se aprobó el primer currículo, y varios docentes destacados dirigieron la carrera, comenzando con el Mg. Juan Paredes Carbonel.
            </p>
            <p>
                En 1999, ante la necesidad de docentes especializados, se formó una Comisión Transitoria para implementar el Departamento de Comunicación Social. En 2001, la carrera cambió su título profesional a "Lic. en Ciencias de la Comunicación". Durante la gestión de 2002-2006, liderada por el Mg. Hermes Rubiños Izaguirre y el Mg. Eduardo Angulo Montoya, la carrera se fortaleció con el nombramiento de docentes especializados.
            </p>
            <p>
                En 2006, bajo la dirección de la Dra. Martha Lamela Ríos y la Dra. María Luisa Bazán Guzmán, se crearon los laboratorios de Televisión, Radio y Comunicación Gráfica, y se habilitaron nuevos espacios en la facultad. La participación estudiantil ha sido fundamental en el desarrollo de la carrera, con varios representantes destacados.
            </p>
            <p>
            La carrera de Ciencias de la Comunicación ha sido clave en el desarrollo de los profesionales que actualmente lideran proyectos en medios de comunicación,
            </p>
        </div>

        <!-- Columna derecha: Imagen embebida en el texto -->
        <div class="flex justify-start items-start md:pl-8 p-5">
          <div class="text-black leading-relaxed">
            <p>
                En 2013 se aprobó el currículo vigente, liderado por el profesor Raúl Rivero Ayllón y su equipo. Actualmente, el Departamento de Comunicación Social está a cargo del profesor Juan Vásquez Sánchez y la Dirección de la Escuela de Ciencias de la Comunicación la lleva la Dra. María Luisa Bazán Guzmán.
            </p>
            <p class="mb-4">
                <img src="https://via.placeholder.com/300x200?text=imagen+Prueba" alt="Imagen"
                      class="w-50 h-auto rounded-lg shadow-md float-left mr-4 mb-4">
                publicidad y otras áreas relacionadas. La historia de esta carrera es rica en transformaciones y mejoras continuas para ofrecer una formación de calidad.
            </p>
            <p>
                Los laboratorios creados en 2006 fueron un avance importante para los estudiantes, ya que permitieron la integración de tecnología y recursos prácticos para su formación. Además, la participación estudiantil sigue siendo un pilar fundamental en la evolución de la carrera, con estudiantes comprometidos en la gestión y mejoras del currículo.
            </p>
          </div>
        </div>

    </div>
  </section>


  <!-- nofunciona el bg-gray-600 en el elemento section -->
  <div class="bg-gray-600 text-white"> 
    <section class="lg:flex p-5" id="perfilProfesional">
        <div class="container mx-auto p-5 ">
          <h2 class="text-2xl font-semibold mb-4">Perfil Profesional</h2>
          <p class="">
          Planifica, implementa y evalúa proyectos de comunicación, publicidad y marketing, destacando la importancia de la comunicación interpersonal con diversos públicos. Utiliza la investigación para realizar diagnósticos y análisis de contextos e impactos. Desarrolla contenidos para medios tradicionales y digitales, trabajando de forma dependiente o independiente. Respeta la cosmovisión y cultura de los contextos en los que interviene. Demuestra creatividad, trabajo en equipo, eficiencia, resiliencia, responsabilidad, dinamismo y energía en sus actividades y roles.
          </p>
        </div>

        <div class="container mx-auto p-5">
          <h2 class="text-2xl font-semibold mb-4">Campo Ocupacional</h2>
          <p class="">El egresado de Ciencias de la Comunicación de la Universidad Nacional de Trujillo está capacitado para desempeñarse como gestor o director en cualquier empresa de comunicación. Asimismo, tiene la habilidad y conocimiento para emprender la formación de alguna vinculada a:
          </p>
          <ul class="list-disc list-inside pl-4">
            <li> Empresas periodísticas</li>
            <li>Programas de radio o televisión</li>
            <li>Medios digitales y audiovisuales</li>
            <li>Agencias de marketing o publicidad</li>
            <li>Empresas de cualquier rubro de comunicación</li>
            <li>Organizaciones gubernamentales</li>
            <li>Compañías dedicadas a la comunicación</li>
            <li>Empresas de relaciones públicas</li>
            <li>Áreas de Comunicación Organizacional</li>
          </ul>

    </section>
  </div>


  <!-- plan de estudios -->
  <section class="p-5 lg:flex" id="planEstudios">

      <div class="container mx-auto p-5 md:w-1/3">

          <h2 class="text-2xl text-black font-semibold mb-4">Plan de Estudios</h2>

          <div class="pl-3">
              <ul class="list-inside text-gray-900 space-y-2">
                  <li class="flex">
                    <i class="text-gray-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2">
                      <span class="font-bold"> Duración de Estudios: </span> 10 semestres académicos.
                    </p>
                      
                  </li>

                  <li class="flex">
                    <i class="text-gray-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2">
                      <span class="font-bold">Grado Académico: </span> Bachiller en Ciencias de la Comunicación
                    </p>

                  </li>

                  <li class="flex">
                  <i class="text-gray-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256L265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256L73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                    </i>
                    <p class="ml-2">
                      <span class="font-bold">Título Profesional: </span>Licenciado en Ciencias de la Comunicación
                    </p>
                      
                  </li>
              </ul>
          </div>
      
          <a href="https://dpaunt.edu.pe/curriculos/9.pdf" target="_blank" rel="nofollow"
              class="p-3 w-full mt-4 bg-gray-700 text-white rounded-md font-semibold text-white hover:bg-black block text-center">
              Ver Malla Curricular
          </a>
      </div>

      <!-- Video -->
      <div class="container mx-auto rounded-lg w-full">
          <iframe class="w-full h-80 md:h-96" src="https://www.youtube.com/embed/mqZ1d1B9sWk" title="Video informativo"
              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
      </div>
  </section>

  <div class="h-1 md:flex mx-10 bg-gray-600">
  </div>

  <section id="planaDocente" class="p-10">
    <header class="mb-4">
      <h2 class="text-2xl font-semibold text-black"> Plana docente </h2>
    </header>

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

</div>

@endsection