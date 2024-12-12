@extends('layouts.home')

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
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1ymbbiOjZp7EytZSpEEL6GOUxHi6TPt5j/view"> PROYECTO INICIAL bilbioteca infantil </a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1x3W26LHHhjMZSBqxbk1zHEgFJlr-TjzA/view"> PROYECTO DE LENGUA Y LITERATURA - PROF. ZORÁN </a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1N5YeVWVZIoWqlqLyuAvDvHPUrD4oqyw-/view">  PROYECTO DE LENGUA Y LITERATURA - PROF. MARTHA PAREDES </a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/159AWkth-oGDR2hW1mYYrzurghXf2tbl4/view"> PROYECTO DE IDIOMAS</a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1rF5JLC8Oe8juabeJhgQzOblZhSm-oYbg/view"> PROYECTO DE HISTORIA Y GEOGRAFÍA </a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1S9v75y9yaRfiCUfRctB4LTp3OFFP-GSl/view"> PROYECTO DE CIENCIAS PSICOLÓGICAS </a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1IQDYLsy6nOebeWjrAAIOzLwd8SXCivDr/view"> PEOYECTO DE FILOSOFÍA Y ARTE </a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                        <a class="ml-5" target="_blank" href="https://drive.google.com/drive/folders/1aIKnrl3Rxfxx_U1Xm0XM0SaV_WKkeY0z"> no considerar </a>
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
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/18woyuLQF7jrcfVNlvQNkq4fTcaAr2FPO/view"> X Congreso Regional de Filosofía del Norte del Perú-CON CARTAS DE INTENCIÓN </a> 
                    </li>
                    
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1aUiQAh9GSHFfll4aMRgaNc5aV7TdgJl4/view">TRABAJANDO JUNTOS PARAFORTALECER NUESTRAS CAPACIDADES (1) </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1br88nqNinKhBm1jXG-T7K_BvdmpS_Rks/view"> PROYECTO RSU 2022 last</a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1MoBCblZ4kP5jVeOQI6C-AbXhCPW94aLc/view"> Proyecto Promoviendo la identidad </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5 hover:bg-gray-200 bg-gray-50" target="_blank" href="https://drive.google.com/file/d/1Myl9jjDQB5Lv7uTCQ8rvR0HC_VRLxxbd/view"> Proyecto de RS Cultura de la responsabilidad tributaria- 2022 (1)</a> 
                    </li>
                    
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/16Dt5N3YWZUIjcatmDa0Nz0jDPqzKbLFl/view"> Plan estrategico multidisciplinario para la atención integral infantil completo y en pdf </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/12PC8nEnkOUrUMa9ewUveHV5LeqY5AM7d/view"> ACCIONES EDUCOMUNICATIVAS PARA PREVENIR LA VIOLENCIA DE (1) </a> 
                    </li>

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1u2Ybh8eYcJ5ZtqYWRWzXHRBbBUQC5aBw/view"> 1134-ALCANZA PROYECTOS DE RSU 2022 </a> 
                    </li>

                    
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm"> 
                        <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1VaWkEuPX5AiRqectFVZVbegKhGsxoq8S/view"> 643-ENVÍO PROYECTOS DE RESPONSABILIDAD SOCIAL 2022. - CON OBSERVACIONES LEVANTADASOK </a> 
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

                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/108TD4pwqZlOI1R_Tjh9ulEfNDdMJwPWm/view"> XI-COREFIL23 <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1y12o_qe__wpbV9j1x9nmDdZv5zm4AUBZ/view"> RSU 2023PROGRAMA EDUCACIÓN EMOCIONAL (1) <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1mvbvYSsUCI8cUtlE1zo-5xehpNAaCy79/view"> PROYECTO RSU 2023 <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1Ws2S1SdacsstavW0zcDHyM3WY_x-VSEr/view"> PROYECTO RSU 2023-2 YACKELINE SILVA <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1-CeLySyeAMJjEyrLsxY6VgL-JrFi6wce/view"> PROYECTO RSU 2023 idiomas<i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1i1hiwXqkZlueS6BpxlsV9hOINnn6Qmkb/view"> PROYECTO DE RSU- PROGRAMA DE EDUCACIÓN PRIMARIA<i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1dGsqsdBnYFEpQVgOMhZdk1UrSN3m7fk7/view"> PROYECTO DE RESPONSABILIDAD SOCIAL 2023 - V4 PDF <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/19fv80K_IBueE-VV6kR1zdPBt14BwVcsL/view"> OFICIO Nº 042- 2023 RSU - proyecto 2023. <i></i></a>
                    </li>
                    <li class="hover:bg-gray-200 bg-gray-50 m-0 p-0 border border-black rounded-md shadow-sm">
                    <a class="ml-5" target="_blank" href="https://drive.google.com/file/d/1YPTCJO0zKmF9mBlD_PaaD8GvkFPH_uQa/view"> I CONGRESO INTERNACIONAL HÍBRIDO DE EDUCACIÓN MATEMÁTICA 2023 <i></i></a>
                    </li>
                    

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

