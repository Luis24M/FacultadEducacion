<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-white dark:text-black leading-tight">
          {{ __('Tipo de Escuela') }}
      </h2>
  </x-slot>
  
  {{-- formulario de publicación --}}
  <h2 class=" text-lg font-semibold mb-2">
    Crear Nuevo Tipo de Escuela
  </h2>
  <form action="{{ route('tipescuela.store') }}" method="POST" class=" border rounded-md p-3">
      @csrf
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
              <label for="nomEscuela" class="block text-sm font-medium text-gray-200 dark:text-black">Nombre del tipo de de Escuela</label>
              <input type="text" name="nomEscuela" id="nomEscuela" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

      </div>
      <div class="mt-4">
          <button type="submit" style="background-color: green" class="items-center px-4 py-2 rounded-md">
              Guardar
          </button>
      </div>
  </form>
  <h2 class=" text-lg font-semibold mt-5">
    Tipos de Escuelas
  </h2>
  {{-- Tabla de tipos de publicación --}}
  <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
      <div>
          <table class="min-w-full bg-gray-200 divide-y divide-black">
              <thead>
                  <tr>
                      <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 dark:text-black uppercase tracking-wider">Id</th>
                      <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 dark:text-black uppercase tracking-wider">Nombre</th>
                      <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 dark:text-black uppercase tracking-wider">Acciones</th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200 divide-y divide-black text-black">
                  @foreach ($tipos as $tipo)
                      <tr>
                        <td>
                            <div class="ml-4">
                                {{$tipo->idEscuela}}
                            </div>
                        </td>
                          <td class="px-6 py-4 whitespace-no-wrap">
                                  <div class="">
                                      <div class="text-sm  leading-5 font-medium">{{ $tipo->nomEscuela }}</div>
                                  </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap flex gap-4 text-right text-sm leading-5 font-medium">
                              <a href="{{ route('tipescuela.edit', $tipo) }}" class="text-blue-900 ">Editar</a>
                              <form action="{{ route('tipescuela.destroy', $tipo) }}" method="POST" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
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
