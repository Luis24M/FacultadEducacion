@extends('layouts.app')

@section('content')
<section class="p-8">
  <nav class="flex justify-center space-x-4 mb-6">
    <button onclick="showContent('institucional')" class="px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 hover:bg-gray-200 focus:outline-none">Institucional</button>
    <button onclick="showContent('resena-historica')" class="px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 hover:bg-gray-200 focus:outline-none">Reseña Histórica</button>
    <button onclick="showContent('transparencia')" class="px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 hover:bg-gray-200 focus:outline-none">Transparencia</button>
    <button onclick="showContent('boletines-informativos')" class="px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 hover:bg-gray-200 focus:outline-none">Boletines Informativos</button>
    <button onclick="showContent('conocenos')" class="px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 hover:bg-gray-200 focus:outline-none">Conócenos</button>
  </nav>

  <article id="institucional" class="tab-content">
    <header class="text-center mb-8">
      <h2 class="text-2xl font-bold">INSTITUCIONAL</h2>
    </header>
    
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <div class="flex flex-col justify-center">
        <p class="text-lg">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, voluptatibus laborum culpa delectus at voluptatem adipisci consectetur cupiditate corporis, odit maiores exercitationem doloribus dicta distinctio.
        </p>
      </div>
      <figure class="flex justify-center">
        <img src="ruta_a_la_imagen.jpg" alt="Imagen institucional" class="w-full h-auto object-cover rounded-lg shadow-lg">
      </figure>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <div class="text-center">
        <figure>
          <img src="ruta_a_imagen_mision.jpg" alt="Imagen misión" class="w-full h-48 object-cover rounded-lg shadow-lg mb-4">
        </figure>
        <h3 class="text-xl font-bold mb-2">Misión</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id nulla suscipit, placerat ex a, malesuada risus.
        </p>
      </div>
      
      <div class="text-center">
        <figure>
          <img src="ruta_a_imagen_vision.jpg" alt="Imagen visión" class="w-full h-48 object-cover rounded-lg shadow-lg mb-4">
        </figure>
        <h3 class="text-xl font-bold mb-2">Visión</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id nulla suscipit, placerat ex a, malesuada risus.
        </p>
      </div>
    </section>

    <section class="mt-12">
      <header class="text-center mb-4">
        <h2 class="text-2xl font-bold">VALORES</h2>
      </header>
      <p class="text-center mb-8">
        Estos son los valores fundamentales que guían nuestra organización.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
        <div class="text-center">
          <figure>
            <img src="ruta_a_imagen_valor1.jpg" alt="Valor 1" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 1</h3>
          <p class="text-sm">
            Breve explicación del valor 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="ruta_a_imagen_valor2.jpg" alt="Valor 2" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 2</h3>
          <p class="text-sm">
            Breve explicación del valor 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="ruta_a_imagen_valor3.jpg" alt="Valor 3" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 3</h3>
          <p class="text-sm">
            Breve explicación del valor 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="ruta_a_imagen_valor4.jpg" alt="Valor 4" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 4</h3>
          <p class="text-sm">
            Breve explicación del valor 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="ruta_a_imagen_valor5.jpg" alt="Valor 5" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 5</h3>
          <p class="text-sm">
            Breve explicación del valor 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </section>
  </article>

  <article id="resena-historica" class="tab-content hidden">
    <header class="text-center mb-8">
      <h2 class="text-2xl font-bold">RESEÑA HISTÓRICA</h2>
    </header>
    
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <figure class="flex justify-center">
        <img src="ruta_a_imagen_resena.jpg" alt="Imagen reseña histórica" class="w-full h-auto object-cover rounded-lg shadow-lg">
      </figure>
      <div class="flex flex-col justify-center">
        <p class="text-lg">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, quas. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas pariatur architecto, non id at assumenda voluptatem?
        </p>
      </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen1.jpg" alt="Galería 1" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen2.jpg" alt="Galería 2" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen3.jpg" alt="Galería 3" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen4.jpg" alt="Galería 4" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen5.jpg" alt="Galería 5" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen6.jpg" alt="Galería 6" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen7.jpg" alt="Galería 7" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="ruta_a_imagen8.jpg" alt="Galería 8" class="w-full h-full object-cover">
      </figure>
    </section>
  </article>

  <footer class="mt-16 p-4 bg-gray-100 border-t border-gray-300">
    <h3 class="text-center text-lg font-bold">Contacto</h3>
    <div class="flex flex-col items-center mt-4">
      <p>Teléfonos: +51 123 456 789, +51 987 654 321</p>
      <p>Correo: contacto@empresa.com, soporte@empresa.com</p>
    </div>
  </footer>
</section>

<script>
  function showContent(sectionId) {
    const sections = document.querySelectorAll('.tab-content');
    sections.forEach(section => section.classList.add('hidden'));
    document.getElementById(sectionId).classList.remove('hidden');
  }
</script>
@endsection