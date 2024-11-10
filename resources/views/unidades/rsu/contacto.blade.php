@extends('layouts.app')

@section('content')
<div class="p-6 bg-blue-900 rounded-lg">

<div class="max-w-md mx-auto mt-10 p-6 bg-yellow-500 rounded-lg shadow-md">
  <h2 class="text-2xl  font-bold mb-6">Contacto</h2>
  <form action="{{ route('contacto.store') }}" method="post">
    @csrf
    <div class="mb-4">
      <label class="block text-blue-950 text-sm font-bold mb-2" for="name">Nombre</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="name" name="nombre" type="text" placeholder="Tu nombre">
    </div>
    <div class="mb-4">
      <label class="block text-blue-950 text-sm font-bold mb-2" for="email">Correo Electrónico</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" name="correo" id="email" type="email" placeholder="Tu correo">
    </div>
    <div class="mb-6">
      <label class="block text-blue-950 text-sm font-bold mb-2" for="message">Mensaje</label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="message" rows="4" placeholder="Tu mensaje" name="mensaje" ></textarea>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-900 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded" type="submit">
        Enviar
      </button>
    </div>
  </form>
</div>
</div>



@endsection