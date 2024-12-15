<x-app-layout>
  <h2 class=" text-lg font-semibold mt-5">
      Editar Comentario
  </h2>
  
  <form action="{{ route('comentario.update', $comentario->id) }}" method="POST" class=" border rounded-md p-3 ">
      @csrf
      @method('PUT')
          <div>
              <label for="Nombres" class="block text-sm font-medium text-white">Nombre</label>
              <input type="text" value="{{ $comentario->nombre }}" name="nombre" id="Nombres" class="mt-1 p-2 border border-gray-300 block w-full rounded-md bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div>
              <label for="Apellidos" class="block text-sm font-medium text-white">Apellido</label>
              <input type="text" value="{{ $comentario->apellido }}" name="apellido" id="Apellidos" class="mt-1 p-2 border border-gray-300 block w-full rounded-md bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div>
              <label for="Correo" class="block text-sm font-medium text-white">Correo</label>
              <input type="text" value="{{ $comentario->correo }}" name="correo" id="Correo" class="mt-1 p-2 border border-gray-300 block w-full rounded-md bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div class="text-black">
              <label for="opciones" class="block text-sm font-medium text-white">Asunto</label>
              <select id="opciones" name="asunto" class="mt-1 p-2 border border-gray-300 block w-full rounded-md bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="" disabled selected>Selecciona una opción</option>
                  <option value="Docente" {{ $comentario->asunto == 'Docente' ? 'selected' : '' }}>Docente</option>
                  <option value="Estudiante" {{ $comentario->asunto == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                  <option value="Egresado" {{ $comentario->asunto == 'Egresado' ? 'selected' : '' }}>Egresado</option>
                  <option value="Administrativo" {{ $comentario->asunto == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                  <option value="Otros" {{ $comentario->asunto == 'Otros' ? 'selected' : '' }}>Otros</option>
              </select>
          </div>

          <div class="text-black">
              <label for="Comentarios" class="block text-sm font-medium text-white">Mensaje</label>
              <textarea name="mensaje" id="Comentarios" class="mt-1 p-2 border border-gray-300 block w-full rounded-md bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $comentario->mensaje }}</textarea>
          </div>   
          <div>
            <label for="programa" class="block text-sm font-medium text-white">Programa</label>
            <input type="text" value="{{ $comentario->escuela }}" name="escuela" id="escuela" class="mt-1 p-2 border border-gray-300 block w-full rounded-md bg-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>       
      <div class="mt-4">
          <button type="submit" style="background-color: green" class="items-center px-4 py-2 rounded-md">
              Guardar
          </button>
      </div>
  </form>
 

  <style>
      input{
          color: black;
      }
  </style>
</x-app-layout>
