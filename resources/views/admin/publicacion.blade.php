<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Publicación') }}
      </h2>
  </x-slot>

  {{-- formulario de publicación 	protected $fillable = [
		'nombrePublicacion',
		'imgPublicacion', link de la imagen
		'idTipoPublicacion'
	]; --}}

  <form action="{{ route('publicacion.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
      <div>
        <label for="nombrePublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nombre de la publicación</label>
        <input type="text" name="nombrePublicacion" id="nombrePublicacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div>
        <label for="imgPublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Imagen de la publicación</label>
        <input type="file" name="imgPublicacion" id="imgPublicacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div>
        <label for="idTipoPublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Tipo de publicación</label>
        <select name="idTipoPublicacion" id="idTipoPublicacion" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          <option value="1">Noticia</option>
          <option value="2">Evento</option>
        </select>
      </div>
    </div>
    <div class="mt-4">
      <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
        Guardar
      </button>
    </div>
  </form>


</x-app-layout>