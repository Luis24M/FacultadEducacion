<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-white dark:text-black leading-tight">
          {{ __('Comentarios') }}
      </h2>
  </x-slot>
  
  {{-- formulario de publicación --}}
  <h2 class=" text-lg font-semibold mb-2">
    Crear Nuevo Comentario
  </h2>
  <form action="{{ route('comentario.store') }}" method="POST" class=" border rounded-md p-3">
      @csrf
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
              <label for="nombreComentario" class="block text-sm font-medium text-gray-200 dark:text-black">Nombre</label>
              <input type="text" name="nombre" id="nombreComentario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="correoComentario" class="block text-sm font-medium text-gray-200 dark:text-black">Correo</label>
              <input type="text" name="correo" id="correoComentario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="asuntoComentario" class="block text-sm font-medium text-gray-200 dark:text-black">Asunto</label>
              <input type="text" name="asunto" id="asuntoComentario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="mensajeComentario" class="block text-sm font-medium text-gray-200 dark:text-black">Mensaje</label>
              <input type="text" name="mensaje" id="mensajeComentario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <label for="escuelaComentario" class="block text-sm font-medium text-gray-200 dark:text-black">Escuela</label>
              <input type="text" name="escuela" id="escuelaComentario" class="mt-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="mt-4">
          <button type="submit" style="background-color: green" class="items-center px-4 py-2 rounded-md">
              Guardar
          </button>
      </div>
  </form>

  <h2 class=" text-lg font-semibold mt-5">
    Tipos de Publicaciones
  </h2>
  {{-- Tabla de tipos de publicación --}}
  <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
      <div>
          <table class="min-w-full bg-gray-200 divide-y divide-black">
              <thead>
                  <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">ID</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Nombre</th>
                      <th class="px-6 py-3 text-left text-xs hidden md:block font-medium text-black dark:text-black uppercase tracking-wider">Correo</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Mensaje</th>
                      <th class="px-6 py-3 text-left text-xs hidden md:block font-medium text-black dark:text-black uppercase tracking-wider">Programa</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-black dark:text-black uppercase tracking-wider">Acciones</th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200 divide-y divide-black text-black">
                @if (count($comentarios) == 0)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap" colspan="3">
                            <div class="text-sm leading-5 font-medium">No hay Comentarios</div>
                        </td>
                    </tr>
                @else
                    @foreach ($comentarios as $comentario)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $comentario->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $comentario->nombre }}</td>
                            <td class="px-6 hidden md:block py-4 whitespace-no-wrap">{{ $comentario->correo }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $comentario->mensaje }}</td>
                            <td class="px-6 hidden md:block py-4 whitespace-no-wrap">{{ $comentario->escuela }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <a href="{{ route('comentario.edit', $comentario->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('comentario.destroy', $comentario->id) }}" method="POST" class="inline">
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
