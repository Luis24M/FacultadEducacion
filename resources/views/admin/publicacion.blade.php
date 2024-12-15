<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Publicación') }}
      </h2>
  </x-slot>

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('publicacion.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
      <div>
        <label for="nombrePublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nombre de la publicación</label>
        <input type="text" name="nombrePublicacion" id="nombrePublicacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div>
        <label for="desPublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Descripcion de la publicación</label>
        <textarea name="desPublicacion" id="desPublicacion" class="mt-1 text-black focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
      </div>
      <div>
        <label for="imgPublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Imagen de la publicación</label>
        <input type="file" name="imgPublicacion" id="imgPublicacion" class="mt-1 text-white focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div>
        <label for="idTipoPublicacion" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Tipo de publicación</label>
        <select id="idTipoPublicacion" name="idTipoPublicacion" class="mt-1 text-black block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @foreach ($tipos as $tipo)
            <option value="{{ $tipo->idTipo }}">{{ $tipo->nombreTipo }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="mt-4">
      <button type="submit" class="py-2 px-4 rounded-md" style="background-color: green">
        Guardar
      </button>
    </div>
  </form>

  <style>
    input {
      color: black;
    }
  </style>
</x-app-layout>
