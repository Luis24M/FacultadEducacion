@extends('layouts.home')

@section('content')
<main
  class=" inset-0 -z-10 h-full w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">
  <section
    class="min-h-60 w-full h-fit bg-[url({{ asset('imagenes/index/cdlc.jpg') }})] md:bg-none bg-fixed bg-cover bg-center bg-blend-screen bg-gray-800 ">
    <section
      class="max-w-[1092px] mx-auto flex lg:flex-row flex-col items-center justify-center gap-10 lg:gap-5 p-10 md:bg-transparent h-60 md:h-auto">
      <div class="flex flex-col justify-center gap-5 text-center ">
        <h1 class="text-xl md:text-4xl text-white font-semibold">Ciencias de la Comunicación</h1>
        <p class="text-sm md:text-base text-white">"Impulsando comunicadores integrales, capaces de informar, inspirar y conectar al mundo a través de la comunicación y la innovación"</p>
      </div>
      <img src="{{ asset('imagenes/index/cdlc.jpg') }}" alt="escuela de educación inicial"
        class="lg:w-2/5  shadow-xl hidden md:block mx-auto">
    </section>
  </section>

  <section
    class="flex flex-col lg:flex-row [&>div>h2]:font-bold md:[&>div>h2]:text-2xl [&>div>h2]:text-lg [&>div>p]:text-sm md:[&>div>p]:text-base justify-around gap-5 lg:[&>div]:w-[40%] a[&>div]:bg-[#f577bc4d] [&>div]:bg-[#ededed8d] [&>div]:border-2 [&>div]:rounded-lg [&>div]:shadow-lg [&>div]:p-5 [&>div>h2]:mb-2 [&>div]:h-fit md:[&>div]:min-h-[350px] [&>div]:min-h-[230px] [&>div]:flex [&>div]:flex-col [&>div]:justify-center max-w-[1092px] mx-auto p-5 py-10"
    id="mision-vision">

    <div class="text-justify">
      <h3 class="text-2xl font-semibold mb-2 text-black">Visión</h3>
      <p class="text-md">
        Al 2024, la Escuela Profesional de Ciencias de la Comunicación será
        dentro de las universidades públicas del país una de las primeras a nivel
        nacional, acreditada para la formación científica, tecnológica y
        humanística, de profesionales comunicadores que contribuyan al
        desarrollo sostenible de la región La Libertad y del país.
      </p>
    </div>

    <div class="text-justify">
      <h3 class="text-2xl font-semibold mb-2 text-black">Misión</h3>
      <p class="text-md">
        La Escuela Profesional de Ciencias de la Comunicación de la UNT lidera
        la formación de profesionales comunicadores estratégicos con amplio
        conocimiento científico y humanístico, solidos valores y sentido crítico
        acorde con la demanda de la sociedad local, regional, nacional e
        internacional.
      </p>
    </div>
  </section>


  <section id="perfil" class="p-10 lg:flex max-w-[1092px] mx-auto">

    <div class="mb-4">
      <h2 class="text-lg md:text-3xl font-semibold mb-3">Perfil de Ingresante</h2>
      <hr class="border border-gray-700 px-1 mb-3">
      <div
        class="flex flex-col lg:flex-rsow justify-center gap-3 [&>ul>li]:list-disc [&>ul]:px-5 [&>ul>li]:text-sm md:[&>ul>li]:text-base">

        <ul class="space-y-4 text-lg text-black list-disc pl-5">
          <li>
            <strong>Conocimientos básicos</strong>:
            Comprende una base sólida en áreas fundamentales para una educación integral. Incluye razonamiento verbal y matemático, que permiten desarrollar habilidades de comprensión y solución de problemas; además, conocimientos en política, economía y geopolítica para entender la sociedad; el marco legal constitucional para la comprensión de derechos y deberes, y la historia de la cultura, que aporta perspectiva y contexto histórico.
          </li>

          <li>
            <strong>Procedimental</strong>:
            Se enfoca en las habilidades prácticas y analíticas necesarias para procesar y aplicar conocimientos. Esto incluye la capacidad de análisis y síntesis para interpretar información compleja, argumentación para comunicar ideas de manera persuasiva, manejo básico de TIC’s, comprensión de textos para entender contenido escrito, y producción de textos para expresar ideas de forma coherente.
          </li>

          <li>
            <strong>Actitudes</strong>:
            Define los valores y disposiciones que orientan la conducta y motivación en el aprendizaje y el trabajo. Implica vocación y motivación para comprometerse, respeto hacia sí mismo y los demás, trabajo en equipo, capacidad para tomar decisiones en situaciones nuevas, perseverancia en la consecución de metas, habilidad en la comunicación, liderazgo, ética y responsabilidad, así como creatividad, iniciativa y disposición para adoptar nuevas tecnologías.
          </li>
        </ul>

      </div>
    </div>

    <div>
      <h2 class="text-lg md:text-3xl font-semibold mb-3">Perfil Profesional del Egresado</h2>
      <hr class="border border-gray-700 px-1 mb-3">
      <p class="">
        Planifica, implementa y evalúa proyectos de comunicación, publicidad y marketing, destacando la importancia de la comunicación interpersonal con diversos públicos. Utiliza la investigación para realizar diagnósticos y análisis de contextos e impactos. Desarrolla contenidos para medios tradicionales y digitales, trabajando de forma dependiente o independiente. Respeta la cosmovisión y cultura de los contextos en los que interviene. Demuestra creatividad, trabajo en equipo, eficiencia, resiliencia, responsabilidad, dinamismo y energía en sus actividades y roles.
      </p>
    </div>

  </section>

  <section id="ocupacion" class="p-10  max-w-[1092px] mx-auto">

    <h2 class="text-2xl font-semibold mb-4">Perspectiva Ocupacional</h2>
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


  <section id="datos"
    class=" text-white p-10 grid md:grid-cols-6 grid-cols-4 max-w-[1092px] mx-auto gap-4 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:items-center [&>div]:rounded-lg [&>div]:py-9 drop-shadow-lg text-center">

    <div class="col-span-2 bg-gray-400">
      <p>Duración</p>
      <h3 class="md:text-7xl text-4xl font-semibold">10</h3>
      <p class="font-medium text-lg md:text-xl">Semestres Académicos</p>
    </div>
    <div class="col-span-2 bg-gray-400">
      <h3 class="md:text-7xl text-4xl font-semibold">220</h3>
      <p class="font-medium text-lg md:text-xl">Créditos</p>
    </div>
    <div class="col-span-4 row-start-1 bg-gray-500">
      <p>Grado académico</p>
      <img class="w-20 md:w-40" src="{{ asset('icons/graduation.svg') }}" alt="">
      <h3 class="font-medium text-lg md:text-xl">Bachiller en Ciencias de la Comunicación</h3>
    </div>
    <div class="col-span-4 bg-gray-500">
      <p>Título Profesional</p>
      <img class="w-20 md:w-40" src="{{ asset('icons/diploma.svg') }}" alt="">
      <h3 class="font-medium text-lg md:text-xl">Licenciado en Ciencias de la Comunicación</h3>
  </section>

  <section class="w-full text-center mb-10">
    <a href="https://dpaunt.edu.pe/curriculos/9.pdf" target="_blank" rel="nofollow"
      class="p-3 w-full mt-4 bg-gray-700 text-white rounded-md font-semibold hover:bg-black text-center">
      Ver Malla Curricular
    </a>
  </section>

</main>
@endsection