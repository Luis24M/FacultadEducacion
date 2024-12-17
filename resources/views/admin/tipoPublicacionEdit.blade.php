<x-app-layout>
    <h2 class=" text-lg font-semibold mt-5">
        Editar Tipo de Publicación
    </h2>
    
    <form action="{{ route('tipo-publicacion.update', $tipo->id) }}" method="POST" class=" border rounded-md p-3">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 gap-2 mt-4">
            <label for="nombreTipo" class="block text-sm font-medium text-gray-200 ">Nombre del tipo de publicación</label>
            <input type="text" name="nombreTipo" id="nombreTipo" value="{{ $tipo->nombreTipo }}" class="mb-1 focus:ring-indigo-500 text-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

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
