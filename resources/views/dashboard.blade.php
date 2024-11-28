<x-app-layout class="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p class="font-bold">Éxito</p>
                    <p>{{ session('status') }}</p>
                </div>
            @endif
            @foreach ($tipos as $tipo)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-bold mb-4">{{ $tipo->nombreTipo }}</h3>
                        <div class=" flex gap-5 flex-wrap justify-center ">
                            @foreach ($publicaciones->where('idTipoPublicacion', $tipo->idTipo) as $publicacion)
                                <div class="border p-4 rounded-md card-publi">
                                    <h4 class="text-md font-semibold">{{ $publicacion->nombrePublicacion }}</h4>
                                    <p class="text-sm text-gray-600">{{ $publicacion->desPublicacion }}</p>
                                    <p class="text-xs text-gray-400">{{ $publicacion->fechaPublicacion }}</p>
                                    @if ($publicacion->imgPublicacion)
                                        <img src="{{ asset($publicacion->imgPublicacion) }}"
                                            alt="{{ $publicacion->nombrePublicacion }}"
                                            width="auto"
                                            height="400px"
                                            class="rounded-md">
                                    @endif
                                    <div class="flex gap-5 mt-3">
                                        <a href="{{ route('publicacion.edit', $publicacion->idPublicacion) }}"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('publicacion.destroy', $publicacion->idPublicacion) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background-color: red"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                            @if ($publicaciones->where('idTipoPublicacion', $tipo->idTipo)->isEmpty())
                                <p class="text-gray-500">{{ __('No hay publicaciones en esta categoría.') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .card-publi {
            margin-top: 0;
            height: 550px;
            img{
                /* object-fit: cover; */
                width: 300px;
                height: 400px;

            }
        }
    </style>
</x-app-layout>
