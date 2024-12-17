<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-white dark:text-black leading-tight">
          {{ __('Aplicaciones') }}
      </h2>
  </x-slot>
  
  {{-- formulario de publicación --}}
  <h2 class=" text-lg font-semibold mb-2">
    Agregar Links de aplicaciones
  </h2>
  <form action="{{ route('aplicacionesExt.store') }}" method="POST" class=" border rounded-md p-3">
      @csrf
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
              <label for="sineace" class="block text-sm font-medium text-gray-200 dark:text-black">Sineace</label>
              <input type="text" name="sineace" id="sineace" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="horario" class="block text-sm font-medium text-gray-200 dark:text-black">Horario</label>
              <input type="text" name="horario" id="horario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="inventario" class="block text-sm font-medium text-gray-200 dark:text-black">Inventario</label>
              <input type="text" name="inventario" id="inventario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="investigacion" class="block text-sm font-medium text-gray-200 dark:text-black">Investigación</label>
              <input type="text" name="investigacion" id="investigacion" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      <div class="mt-4">
          <button type="submit" style="background-color: green" class="items-center px-4 py-2 rounded-md">
              Guardar
          </button>
      </div>
  </form>

  <h2 class=" text-lg font-semibold mt-5">
    Links de aplicaciones
  </h2>
  <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
      <div>
          <table class="min-w-full bg-gray-200 divide-y divide-black">
              <thead>
                  <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">ID</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Sineace</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Horario</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Inventario</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Investigación</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Acciones</th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200 divide-y divide-black text-black">
                @if (count($aplicaciones) == 0)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap" colspan="3">
                            <div class="text-sm leading-5 font-medium">No hay Links</div>
                        </td>
                    </tr>
                @else
                    @foreach ($aplicaciones as $aplicacion)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $aplicacion->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $aplicacion->sineace }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $aplicacion->horario }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $aplicacion->inventario }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $aplicacion->investigacion }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <a href="{{ route('aplicacionesExt.edit', $aplicacion->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('aplicacionesExt.destroy', $aplicacion->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            
          </table>
      </div>
  </div>



  <style>
    input{
      color: black;
    }
  </style>
</x-app-layout>
