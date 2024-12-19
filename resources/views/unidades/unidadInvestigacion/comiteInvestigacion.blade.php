@extends('layouts.home')

@section('content')
    <div class="flex justify-center items-center">
        <h2 class="text-3xl my-8 font-bold text-blue-500">COMITE DE INVESTIGACION</h2>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <div class="bg-white p-10 rounded-lg shadow-lg mx-8">
            <p class="text-gray-700 text-lg">
                La Unidad de Investigación de la Facultad de Educación de la Universidad Nacional
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

    <div class="grid personal lg:grid-cols-4 gap-6 mt-8">
        <!-- Card 1 -->

        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('/colaboradores/unidades/Cristian Raymound Gutiérrez Ulloa.jpg') }}"
                    alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>DR. CRISTIAN RAYMOUND GUTIERREZ ULLOA</b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Filosofía y Arte"</p>
                <a class="text-gray-600 mt-2">"investigacion_educacion</br>@unitru.edu.pe"</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Ana Martínez"
                    class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>MG. MAX ORBEGOSO CHAMORRO </b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Historia y Geografía"</p>
                <p class="text-gray-600 mt-2">vorbegoso@unitru.edu.pe</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Ing. Miguel Santos"
                    class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>DRA. JULIA SIXTINA CASTAÑEDA AZABACHE</b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Lengua y Literatura"</p>
                <p class="text-gray-600 mt-2">"jcastanedaaz@unitru.edu.pe"</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('colaboradores/HOMBRE DEFAULT.jpg') }}" alt="Téc. Laura Vega"
                    class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>MG. NARSO ALBERTO SÁEZ VALLE</b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Comunicación Social"</p>
                <p class="text-gray-600 mt-2">"nsaez@unitru.edu.pe"</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('colaboradores/MUJER DEFAULT.jpg') }}" alt="Téc. Laura Vega"
                    class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>MG. ALICIA RAMONA ZEVALLOS ECHEVERRÍA </b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Ciencias Psicológicas"</p>
                <p class="text-gray-600 mt-2">"azevallos@unitru.edu.pe"</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('/colaboradores/unidades/Liliana Marcela Mendoza Montoya.jpg') }}" alt="Téc. Laura Vega"
                    class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>DRA. LILIANA MARCELA MENDOZA MONTOYA </b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Ciencias de la Educación"</p>
                <p class="text-gray-600 mt-2">"lmendozam@unitru.edu.pe"</p>
            </div>
        </div>



        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="{{ asset('imagenes/idiomas/9.jpg') }}" alt="Ing. Julio Hernán Luna Victoria Valdivia"
                    class="object-cover object-center w-40 h-40" ">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>DR. NELVER EDUARDO VERA MOSTACERO</b> </h3>
                <p class="text-gray-600 mt-2">" Departamento academido de idiomas"</p>
                <p class="text-gray-600 mt-2">"nvera@unitru.edu.pe"</p>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center mx-3 my-8 ">
            <div class="flex justify-center items-center h-auto overflow-hidden mt-3">
                <img src="https://ctivitae.concytec.gob.pe/appDirectorioCTI/UploadFotoPath.do?tipo=visualizar_archivo&id_investigador=29777&ruta=/documents/docInvestigadores/29777/imagenes/Manuel.jpg&content_type=image/jpeg"
                    alt="Téc. Laura Vega" class="object-cover object-center w-40 h-40">
            </div>
            <div class="p-4 flex flex-col items-center">
                <h3 class="text-xl font-bold"><b>DR. MANUEL QUIPUSCOA SILVESTRE</b></h3>
                <p class="text-gray-600 mt-2">"Departamento Académico de Educacion Primaria"</p>
                <p class="text-gray-600 mt-2">"mquipuscoa@unitru.edu.pe"</p>
            </div>
        </div>
    </div>
@endsection
