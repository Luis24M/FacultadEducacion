@extends('layouts.app')


@section('content')
<section class="p-8">
  <nav class="flex justify-center space-x-4 mb-6">
    <button onclick="showContent('institucional')" class="px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 hover:bg-black hover:text-white focus:outline-none text-2xl font-semibold">Institucional</button>
    <button onclick="showContent('resena-historica')" class="px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 hover:bg-black hover:text-white focus:outline-none text-2xl font-semibold">Reseña Histórica</button>
    <button onclick="showContent('transparencia')" class="px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 hover:bg-black hover:text-white focus:outline-none text-2xl font-semibold">Transparencia</button>
    <button onclick="showContent('boletines-informativos')" class="px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 hover:bg-black hover:text-white focus:outline-none text-2xl font-semibold">Boletines Informativos</button>
    <button onclick="showContent('conocenos')" class="px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 hover:bg-black hover:text-white focus:outline-none text-2xl font-semibold">Conócenos</button>
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
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Imagen institucional" class="w-full h-auto object-cover rounded-lg shadow-lg">
      </figure>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <div class="text-center">
        <figure>
          <img src="https://i.sstatic.net/y9DpT.jpg" alt="Imagen misión" class="w-full h-48 object-cover rounded-lg shadow-lg mb-4">
        </figure>
        <h3 class="text-xl font-bold mb-2">Misión</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id nulla suscipit, placerat ex a, malesuada risus.
        </p>
      </div>
      
      <div class="text-center">
        <figure>
          <img src="https://i.sstatic.net/y9DpT.jpg" alt="Imagen visión" class="w-full h-48 object-cover rounded-lg shadow-lg mb-4">
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
            <img src="https://i.sstatic.net/y9DpT.jpg" alt="Valor 1" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 1</h3>
          <p class="text-sm">
            Breve explicación del valor 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="https://i.sstatic.net/y9DpT.jpg" alt="Valor 2" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 2</h3>
          <p class="text-sm">
            Breve explicación del valor 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="https://i.sstatic.net/y9DpT.jpg" alt="Valor 3" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 3</h3>
          <p class="text-sm">
            Breve explicación del valor 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="https://i.sstatic.net/y9DpT.jpg" alt="Valor 4" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
          </figure>
          <h3 class="text-xl font-bold mb-2">Valor 4</h3>
          <p class="text-sm">
            Breve explicación del valor 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="text-center">
          <figure>
            <img src="https://i.sstatic.net/y9DpT.jpg" alt="Valor 5" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
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
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Imagen reseña histórica" class="w-full h-auto object-cover rounded-lg shadow-lg">
      </figure>
      <div class="flex flex-col justify-center">
        <p class="text-lg">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, quas. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas pariatur architecto, non id at assumenda voluptatem?
        </p>
      </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 1" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 2" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 3" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 4" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 5" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 6" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 7" class="w-full h-full object-cover">
      </figure>

      <figure class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
        <img src="https://i.sstatic.net/y9DpT.jpg" alt="Galería 8" class="w-full h-full object-cover">
      </figure>
    </section>
  </article>

  <article id="boletines-informativos" class="tab-content hidden">
    <header class="text-center mb-8">
      <h2 class="text-2xl font-bold"> BOLETÍNES </h2>
    </header>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Dirección:</strong> Calle Universidad, No. 123, Ciudad
          </p>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Dirección:</strong> Calle Universidad, No. 123, Ciudad
          </p>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Dirección:</strong> Calle Universidad, No. 123, Ciudad
          </p>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Dirección:</strong> Calle Universidad, No. 123, Ciudad
          </p>
        </div>
      </div>

    </section>


  </article>

  <article id="conocenos" class="tab-content hidden">
    <header class="text-center mb-8">
      <h2 class="text-2xl font-bold"> CONÓCENOS </h2>
    </header>

    <header class="text-left mb-8">
        <h2 class="text-2xl font-bold"> Dirección de Escuela </h2>
    </header>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

    </section>

    <header class="text-left mb-8 mt-8">
        <h2 class="text-2xl font-bold"> Administrativos </h2>
    </header>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Dirección:</strong> Calle Universidad, No. 123, Ciudad
          </p>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Directivo</div>
          <p class="text-gray-700 text-base">
            Título del Directivo - Facultad de Ciencias de la Educación.
          </p>
        </div>
        
        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Dirección:</strong> Calle Universidad, No. 123, Ciudad
          </p>
        </div>
      </div>

    </section>

    <header class="text-left mb-8 mt-8">
        <h2 class="text-2xl font-bold"> Docentes </h2>
    </header>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Docente</div>
          <p class="text-gray-700 text-base">
            Programa de estudios
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Docente</div>
          <p class="text-gray-700 text-base">
            Programa de estudios
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Docente</div>
          <p class="text-gray-700 text-base">
            Programa de estudios
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-64 object-cover" src="https://via.placeholder.com/400x300" alt="Foto del directivo">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Nombre del Docente</div>
          <p class="text-gray-700 text-base">
            Programa de estudios
          </p>
        </div>

        <div class="px-6 pb-4">
          <p class="text-gray-600 text-sm">
            <strong>Correo:</strong> directivo@universidad.edu
          </p>
          <p class="text-gray-600 text-sm">
            <strong>Teléfono:</strong> +123 456 7890
          </p>

        </div>
      </div>
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
    //const route = document.getElementById(sectionId);
    //trabajar con la lista d rutas
    //if (route in section) {
      //obtener boton del nav y cambiar de bg
    //}
    //para todo lo demas nav dejarlo normal
    //nav.forEach(cambiar clase bg) //seleccionar clase o id
  }
</script>
@endsection