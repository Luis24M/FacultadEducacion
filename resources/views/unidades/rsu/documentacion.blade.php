@extends('layouts.app')

@section('content')



<div class="b">
<span class="bg-blue-800  text-yellow-500 md:text-5xl  font-bold rounded block w-full text-center" >Informes de R.S.U</span> 
</div>

<div class="p-6 bg-gray-100 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Bienvenido</h1>

    <p class="text-gray-700">
        ¡Bienvenido a la informes de R.S.U! Aquí podrás explorar todo lo que necesitas conocer acerca de nuestra unidad de responsabilidad social Universitaria. 
        Por favor, haz clic en cada boton de los enlaces para que puedas descargar los pdf respectivos con la información de cada año.
    </p>

    <p class="mt-4 font-semibold">INFORMES DE R.S.U</p>
    
    <!-- tabla de docuememtos por año -->
    <div class="p-4 mx-32">

        <div class="mb-2">
            <button id="btn1" class="hover:bg-[#2E4857] w-full text-left bg-gray-600 text-white font-medium rounded-md px-4 py-2" onclick="toggleDropdown('dropdown1')">
                Año 2021
            </button>
            <div id="dropdown1" class="hidden mt-2 p-2 rounded-md shadow">
                <ul>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0">
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2021/OFICIO N° 004-2021.pdf') }}"> Documento1 </a>
                    </li>
                </ul>


            </div>
        </div>

        <div class="mb-2">
            <button id="btn2" class="hover:bg-[#2E4857] w-full text-left bg-gray-600 text-white font-medium rounded-md px-4 py-2" onclick="toggleDropdown('dropdown2')">
            Año 2022
            </button>
            <div id="dropdown2" class="hidden mt-2 p-2 bg-gray-50 rounded-md shadow">
                <ul>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/643-ENVÍO PROYECTOS DE RESPONSABILIDAD SOCIAL 2022. - CON OBSERVACIONES LEVANTADASOK.pdf') }}"> Documento1 </a> 
                    </li>
                    
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/1134-ALCANZA PROYECTOS DE RSU 2022.pdf') }}"> Documento2 </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/ACCIONES EDUCOMUNICATIVAS PARA PREVENIR LA VIOLENCIA DE (1).pdf') }}"> Documento3 </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/Plan estrategico multidisciplinario para la atención integral infantil completo y en pdf.pdf') }}"> Documento4 </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5 hover:bg-gray-200 bg-gray-50" target="_blank" href="{{ asset('descarga/2022/Proyecto de RS Cultura de la responsabilidad tributaria- 2022 (1).pdf') }}"> Documento5 </a> 
                    </li>
                    
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/Proyecto Promoviendo la identidad.pdf') }}"> Documento6 </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/PROYECTO RSU 2022 last.pdf') }}"> Documento7 </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/TRABAJANDO JUNTOS PARAFORTALECER NUESTRAS CAPACIDADES (1).pdf') }}"> Documento8 </a> 
                    </li>

                    
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0"> 
                        <a class="ml-5" target="_blank" href="{{ asset('descarga/2022/X Congreso Regional de Filosofía del Norte del Perú-CON CARTAS DE INTENCIÓN.pdf') }}"> Documento9 </a> 
                    </li>

                </ul>

            </div>
        </div>

        <div class="mb-2">
            <button id="btn3" class="hover:bg-[#2E4857] w-full text-left bg-gray-600  text-white font-medium rounded-md px-4 py-2" onclick="toggleDropdown('dropdown3')">
            Año 2023
            </button>
            <div id="dropdown3" class="hidden mt-2 p-2 bg-gray-50 rounded-md shadow">
                <ul>

                    <li class="hover:bg-gray-200 bg-gray-50">
                    <a class="ml-5" target="_blank" href="{{ asset('descarga/2023/327-RSU - REMITO PROYECTOS 2023.pdf') }}"> Documento 1 <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50">
                    <a class="ml-5" target="_blank" href="{{ asset('descarga/2023/977-ALCANZA PROYECTOS DE RSU.pdf') }}"> Documento 2 <i></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }

    // Cerrar todos los dropdowns si se hace clic fuera de ellos
    window.addEventListener('click', (event) => {
        const dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach(dropdown => {
            if (!dropdown.previousElementSibling.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>


@endsection

