@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-gray-800 to-gray-400 min-h-screen flex flex-col items-center justify-start text-white p-6">
    <!-- Frase llamativa -->
    <div class="text-center mb-8 transform translate-y-4 animate-fade-in">
        <h1 class="text-4xl font-extrabold transition duration-500 delay-200 opacity-100">¡Explora el Reglamento Académico!</h1>
        <p class="mt-4 text-lg transition duration-500 delay-300 opacity-100">Tu guía esencial para un futuro exitoso en la universidad.</p>
    </div>

    <!-- Contenedor de PDF -->
    <div class="w-full max-w-4xl h-[calc(100vh-100px)] bg-white rounded-lg shadow-2xl overflow-hidden">
        <iframe src="pdfs/Reglamento_FacEdu.pdf" class="w-full h-full border-none"></iframe>
    </div>
</div>

@endsection
