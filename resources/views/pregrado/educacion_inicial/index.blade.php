@extends('layouts.app')

@section('content')
<section class="min-h-60 md:min-h-96 w-full bg-pink-100 flex items-center justify-center gap-5 p-10">
  <div class="flex flex-col justify-center gap-5 text-center">
    <h1 class="text-xl md:text-4xl text-gray-700 font-semibold">Educación Inicial</h1>
    <p class="text-sm md:text-base text-gray-500">Únete a nuestra Escuela Profesional de Educación Inicial y transforma vidas desde la primera infancia.</p>
  </div>
  <img src="https://via.placeholder.com/300x200?text=imagen+Prueba" alt="escuela de educación inicial"
    class="w-2/5 rotate-6 shadow-lg hidden lg:block">
</section>

<section class="md:flex p-5" id="perfil">
  <div class="container mx-auto p-5">
    <h2 class="text-2xl text-gray-700 font-semibold">Perfil Profesional</h2>
    <p class="text-gray-500">El profesional de Educación Inicial de la Universidad Nacional de Trujillo es un
      especialista en la atención integral de niños y niñas de 0 a 6 años, con sólida formación pedagógica y
      conocimientos científicos, tecnológicos y humanísticos, que le permiten diseñar, implementar y evaluar propuestas
      educativas innovadoras, contextualizadas y pertinentes, en el marco de la diversidad cultural y lingüística, con
      enfoque inclusivo y de derechos, para promover el desarrollo integral de los niños y niñas, en estrecha
      colaboración con las familias y la comunidad.</p>
  </div>

  <div class="container mx-auto p-5">
    <h2 class="text-2xl text-gray-700 font-semibold">Campo Ocupacional</h2>
    <p class="text-gray-500">El profesional de Educación Inicial de la Universidad Nacional de Trujillo está
      capacitado para desempeñarse en:</p>
    <ul class="list-disc list-inside text-gray-500">
      <li>Centros de Educación Inicial y programas no escolarizados.</li>
      <li>Programas de atención a la primera infancia en instituciones públicas y privadas.</li>
      <li>Programas de atención a la primera infancia en instituciones públicas y privadas.</li>
      <li>Programas de atención a la primera infancia en instituciones públicas y privadas.</li>
      <li>Programas de atención a la primera infancia en instituciones públicas y privadas.</li>
    </ul>
</section>

<section class="p-5 md:flex">
  <div class="container mx-auto p-5 md:w-1/3">
    <h2 class="text-2xl text-gray-700 font-semibold">Plan de Estudios</h2>
    <p class="text-gray-500">El plan de estudios de la Escuela Profesional de Educación Inicial de la Universidad
      Nacional de Trujillo está organizado en 10 semestres académicos y comprende 50 asignaturas, distribuidas en
      formación básica, formación profesional y formación especializada, que permiten al estudiante adquirir los
      conocimientos, habilidades y actitudes necesarios para el ejercicio profesional.</p>
  </div>
  
  <div class="container mx-auto p-5 border rounded-xl bg-white">
    <h2 class="text-2xl text-gray-700 font-semibold">Requisitos de Admisión</h2>
    <ul class="list-disc list-inside text-gray-500">
      <li>Constancia de ingreso a la universidad.</li>
      <li>Partida de nacimiento original y copia.</li>
      <li>Certificado de estudios secundarios original y copia.</li>
      <li>Recibo de pago por derecho de inscripción.</li>
      <li>2 fotografías tamaño carné.</li>
    </ul>
  </div>
</section>

@endsection