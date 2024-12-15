<x-app-layout>
  <h2 class=" text-lg font-semibold mt-5">
      Editar Link de Aplicaciones Externas
  </h2>
  
  <form action="{{ route('aplicacionesExt.update', $aplicacion->id) }}" method="POST" class=" border rounded-md p-3">
      @csrf
      @method('PUT')
      <div class="grid grid-cols-1 gap-2 mt-4 ">
          <label for="sineace" class="block text-sm font-medium text-gray-200">Sineace</label>
          <input type="text" name="sineace" id="sineace" value="{{ $aplicacion->sineace }}" class="mb-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          <label for="horario" class="block text-sm font-medium text-gray-200">Horario</label>
          <input type="text" name="horario" id="horario" value="{{ $aplicacion->horario }}" class="mb-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          <label for="inventario" class="block text-sm font-medium text-gray-200">Inventario</label>
          <input type="text" name="inventario" id="inventario" value="{{ $aplicacion->inventario }}" class="mb-1 focus-rindigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          <label for="investigacion" class="block text-sm font-medium text-gray-200">Investigación</label>
          <input type="text" name="investigacion" id="investigacion" value="{{ $aplicacion->investigacion }}" class="mb-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="mt-4">
          <button type="submit" style="background-color: green" class="items-center px-4 py-2 rounded-md">
              Guardar
          </button>
      </div>
  </form>
 
  </div>
  <style>
      input{
          color: black;
      }
  </style>
</x-app-layout>
