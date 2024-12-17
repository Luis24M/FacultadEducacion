@extends('layouts.home')

@section('content')


<div class="flex justify-center items-center">
    <h2 class="text-3xl my-8 font-bold text-blue-500">COMITE DE PRÁCTICA PRE-PROFESIONAL</h2>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
    <div class="bg-white p-10 rounded-lg shadow-lg ml-8">
        <p class="text-gray-700 text-lg">
            La Unidad de Práctica Pre-profesional de la Facultad de Educación de la Universidad Nacional
            de Trujillo promueve la generación de conocimiento científico. Fomenta proyectos innovadores
            , publica resultados relevantes, impulsa la formación investigativa en docentes y estudiantes
            , y fortalece capacidades para resolver problemáticas educativas. Su objetivo principal es
             contribuir al desarrollo académico y social.
        </p>
    </div>
    
    <div class="bg-white p-10 rounded-lg shadow-lg mr-8 flex items-center justify-center">
        <ul class="list-disc text-gray-700">
            <li>Fomentar la investigación educativa</li>
            <li>Desarrollar competencias investigativas</li>
            <li>Impulsar la publicación científica</li>
            <li>Fortalecer redes académicas</li>
            <li>Resolver problemas educativos</li>
        </ul>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
    <!-- Card 1 -->
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>ROSAS AMADEO AMAYA SAUCEDA</b></h3>
            <p class="text-gray-600 mt-2">"Práctica Profesional II"</p>
            <a class="text-gray-600 mt-2">"investigacion_educacion</br>@unitru.edu.pe"</a>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center ml-3 my-8">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Ana Martínez" class="object-cover object-center w-40 h-40">
        </div>

        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>MILUSKA PAJUELO ABANTO </b></h3>
            <p class="text-gray-600 mt-2">"Práctica Pre Profesional VI"</p>
            <p class="text-gray-600 mt-2">vorbegoso@unitru.edu.pe</p>

        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center ml-3 my-8">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Ing. Miguel Santos" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>VICENTE HERIBERTO ORBEGOSO AYALA</b></h3>
            <p class="text-gray-600 mt-2">"Práctica I"</p>
            <p class="text-gray-600 mt-2">"vheriber@unitru.edu.pe"</p>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>EMILIO FERNANDEZ SALAS</b></h3>
            <p class="text-gray-600 mt-2">"Práctica III"</p>
            <p class="text-gray-600 mt-2">"nsaez@unitru.edu.pe"</p>
        </div>
    </div>

    <!-- Card 5 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>MAX ORBEGOSO CHAMORRO </b></h3>
            <p class="text-gray-600 mt-2">"Práctica VI"</p>
            <p class="text-gray-600 mt-2">"mchamorro@unitru.edu.pe"</p>
        </div>
    </div>

    <!-- Card 6 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>MARUZELLA BELTRAN </b></h3>
            <p class="text-gray-600 mt-2">"Práctica Pre profesional I"</p>
            <p class="text-gray-600 mt-2">"lmendozam@unitru.edu.pe"</p>
        </div>
    </div>



    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center ml-3 my-8">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Ing. Julio Hernán Luna Victoria Valdivia" class="object-cover object-center w-40 h-40" ">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>SILVIA RODRIGUEZ SANCHEZ</b> </h3>
            <p class="text-gray-600 mt-2">"Práctica Pre profesional II"</p>
            <p class="text-gray-600 mt-2">"srodrisan@unitru.edu.pe"</p>
        </div>
    </div>

        <!-- Card 8 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
        <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
            <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
        </div>
        <div class="p-4 flex flex-col items-center">
            <h3 class="text-xl font-bold"><b>SALLY CHAVEZ GARCIA</b></h3>
            <p class="text-gray-600 mt-2">"Práctica Pre profesional IV"</p>
            <p class="text-gray-600 mt-2">"sagarcia@unitru.edu.pe"</p>
        </div>
    </div>


</div>
@endsection