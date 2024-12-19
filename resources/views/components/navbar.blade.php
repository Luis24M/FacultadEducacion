 <nav class="fixed md:relative top-0 left-0 z-50 h-24 w-full bg-[#FFD54F] flex items-center justify-between  gap-4 pr-3 shadow-md">
    <div class="lg:hidden min-w-2"></div>
    <a href="{{ route('home') }}" class="flex flex-col md:hidden items-center">
        <div class="flex items-center">
            <img class="w-16 mr-2"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png/1200px-Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png"
                alt="Logo unt">
            <h2 class="font-bold text-xl text-gray-800">FACEDU</h2>
        </div>
        <h2 class="flex justify-center text-sm text-center w-[280px] text-gray-700">
            Facultad de Educación y Ciencias de la Comunicación
        </h2>
    </a>
    @include('components/main-navbar')
</nav>
<div class="md:h-0 h-24"></div>

@php
    function isActive($route)
    {
        return request()->routeIs($route) ? 'font-bold bg-[#FFD54F] border border-colapse border-neutral-300' : '';
    }
@endphp

<ul id="mobile-menu"
    class="flex flex-col bg-[#eee] text-black h-[calc(100dvh-80px)] [&>li]:flex hidden w-full justify-around p-6 overflow-scroll scroll-nav overflow-scroll no-scrollbar">
    <li class="p-2 hover:font-bold transition-all duration-300 {{ isActive('institucional') }} rounded-lg"><a class=""
            href="{{ route('institucional') }}">Institucional</a></li>
    <li id="pregrado-dropdown-li" class=" rounded-lg  {{ isActive('pregrado.*') }} hover:font-bold flex justify-between items-center">
        <a href="{{ route('pregrado') }}" class="rounded-lg w-full p-2 border {{ isActive('pregrado') }} border-neutral-300">Pregrado</a>
        <button class="ml-2 p-2 focus:outline-none border border-neutral-300 rounded-lg" onclick="toggleDropdown('pregrado-dropdown')">
            <svg id="pregrado-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
            </svg>
        </button>
    </li>
    <ul id="pregrado-dropdown" class="hidden flex border-l-2 flex-col pl-4">
        
        <li class="p-2 rounded-lg {{ isActive('pregrado.inicial') }}"><a href="{{ route('pregrado.inicial') }}">Educación Incial</a></li>
        <li class="p-2 rounded-lg {{ isActive('pregrado.primaria') }}"><a href="{{ route('pregrado.primaria') }}">Educación Primaria</a></li>
        <li class="p-2 rounded-lg {{ isActive('pregrado.cdlc') }}"><a href="{{ route('pregrado.cdlc') }}">Ciencias de la Comunicación</a></li>
        <li id="secundaria-dropdown-li" class=" flex justify-between items-center rounded-lg {{  isActive('pregrado.secundaria.*') }}"><a class="w-full p-2 border border-neutral-300 rounded-lg {{ isActive('pregrado.secundaria') }} hover:font-bold grow" href="{{ route('pregrado.secundaria') }}">Educación
                Secundaria</a>
            <button class="ml-2 p-2 focus:outline-none border border-neutral-300 rounded-lg"
                onclick="toggleDropdown('secundaria-dropdown')">
                <svg id="secundaria-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        </li>
        <ul id="secundaria-dropdown" class="hidden flex border-l-2 flex-col gap-2 pl-4">
        
            <li class="p-2 rounded-lg {{ isActive('pregrado.secundaria.filosofia') }}"><a href="{{ route('pregrado.secundaria.filosofia') }}">Filosofía, Psicología y CCSS</a></li>
            <li class="p-2 rounded-lg {{ isActive('pregrado.secundaria.historia') }}"><a href="{{ route('pregrado.secundaria.historia') }}">Historia y Geografia</a></li>
            <li class="p-2 rounded-lg {{ isActive('pregrado.secundaria.matematicas') }}"><a href="{{ route('pregrado.secundaria.matematicas') }}">Ciencias Matematicas</a></li>
            <li class="p-2 rounded-lg {{ isActive('pregrado.secundaria.literatura') }}"><a href="{{ route('pregrado.secundaria.literatura') }}">Lengua y Literatura</a></li>
            <li class="p-2 rounded-lg {{ isActive('pregrado.secundaria.idiomas') }}"><a href="{{ route('pregrado.secundaria.idiomas') }}">Idiomas</a></li>
        </ul>
    </ul>

    <li class="p-2 hover:font-bold flex justify-between"><a class=""
            href="https://web.facebook.com/EscuelaDePosgradoUNT/?locale=es_LA&_rdc=1&_rdr">Posgrado</a><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg>
    </li>

    <button class="focus:outline-none p-2 rounded-lg {{ isActive('unidades.*') }} flex justify-between items-center w-full" onclick="toggleDropdown('unidades-dropdown')">
            <li id="unidades-dropdown-li" class=" hover:font-boldflex justify-between">Unidades</li>
            <svg id="unidades-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
            </svg>
        </button>
    
    <ul id="unidades-dropdown" class="hidden border-l-2 flex-col pl-4">
    
        <button class="focus:outline-none flex p-2 rounded-lg justify-between items-center {{ isActive('unidades.unidad_calidad.*') }} w-full" onclick="toggleDropdown('calidad-dropdown')">
                <li id="calidad-dropdown-li" class="rounded-lg hover:font-bold flex justify-between">Calidad</li>
                <svg id="calidad-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        <ul id="calidad-dropdown" class="hidden border-l-2 flex-col pl-4">
        
            <li class="p-2 rounded-lg {{ isActive('unidades.unidad_calidad.auditoria_interna') }}"><a href="{{ route('unidades.unidad_calidad.auditoria_interna') }}">Auditoria interna</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.unidad_calidad.acreditacion') }}"><a href="{{ route('unidades.unidad_calidad.acreditacion') }}">Acreditación</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.unidad_calidad.repositorio') }}"><a href="{{ route('unidades.unidad_calidad.repositorio') }}">Repositorio</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.unidad_calidad.licenciamiento') }}"><a href="{{ route('unidades.unidad_calidad.licenciamiento') }}">Licenciamiento</a></li>
        </ul>
        <button class="focus:outline-none p-2 rounded-lg flex justify-between {{ isActive('unidades.practica_preprofesional.*') }}  w-full" onclick="toggleDropdown('practicas-dropdown')">
                <li id="practicas-dropdown-li" class="rounded-lg hover:font-bold flex justify-between">Practica Preprofesional </li>
                <svg id="practicas-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        <ul id="practicas-dropdown" class="hidden border-l-2 flex-col pl-4">
        
            <li class="p-2 rounded-lg {{ isActive('unidades.practica_preprofesional.informeInvestigacion') }}"><a href="{{ route('unidades.practica_preprofesional.informeInvestigacion') }}">Repositorio</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.practica_preprofesional.comiteInvestigacion') }}"><a href="{{ route('unidades.practica_preprofesional.comiteInvestigacion') }}">Comite</a></li>
        </ul>
        <button class="focus:outline-none p-2 rounded-lg {{ isActive('unidades.rsu')}} {{isActive('unidades.rsu.*') }} flex justify-between items-center w-full" onclick="toggleDropdown('responsabilidad-dropdown')">
                <li id="responsabilidad-dropdown-li" class="hover:font-bold text-left">Responsabilidad Social Universitaria</li>
                <svg id="responsabilidad-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        
        <ul id="responsabilidad-dropdown" class="hidden border-l-2 flex-col pl-4">
        
            <li class="p-2 rounded-lg {{ isActive('unidades.rsu') }}"><a href="{{ route('unidades.rsu') }}">Repositorio Documental</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.rsu.documentacion') }}"><a href="{{ route('unidades.rsu.documentacion') }}">Informes</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.rsu.contacto') }}"><a href="{{ route('unidades.rsu.contacto') }}">Proyectos actuales</a></li>
        </ul>
        <button class="focus:outline-non p-2 rounded-lg {{ isActive('unidades.unidadInvestigacion.*') }} flex justify-between w-full" onclick="toggleDropdown('investigacion-dropdown')">
            <li id="investigacion-dropdown-li" class=" hover:font-bold flex justify-between">Investigación</li>
            <svg id="investigacion-dropdown-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
            </svg>
        </button>
        <ul id="investigacion-dropdown" class="hidden border-l-2 flex-col pl-4">
        
            <li class="p-2 rounded-lg {{ isActive('unidades.unidadInvestigacion.informeInvestigacion') }}"><a href="{{ route('unidades.unidadInvestigacion.informeInvestigacion') }}">Repositorio</a></li>
            <li class="p-2 rounded-lg {{ isActive('unidades.unidadInvestigacion.comiteInvestigacion') }}"><a href="{{ route('unidades.unidadInvestigacion.comiteInvestigacion') }}">Comite</a></li>
        </ul>
        <li class="p-2 rounded-lg {{ isActive('unidades.soporte') }}"><a href="{{ route('unidades.soporte') }}">Soporte</a></li>

    </ul>
    <li class="p-2 rounded-lg {{ isActive('') }} hover:font-bold flex justify-between"><a class="" href="https://www.facebook.com/sete.tecnologia.5">Segunda
            Especialidad</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
    <li class="p-2 rounded-lg {{ isActive('') }} hover:font-bold flex justify-between"><a class="" href="https://cidunt.edu.pe/web2/">Cidunt</a><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
    <li class="p-2 rounded-lg {{ isActive('') }} hover:font-bold flex justify-between"><a class="" href="https://www.rnc.edu.pe/">R.N.C</a><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
        <li class="p-2 rounded-lg {{ isActive('galeria') }}"><a href="{{ route('galeria') }}">Galeria</a></li>
        <li class="p-2 rounded-lg {{ isActive('') }} hover:font-bold flex justify-between"><a class="" href="https://aulavirtual2.unitru.edu.pe/login/index.php">Iniciar Sesión</a><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
</ul>

<style>
    .scroll-nav{
        overflow-y: scroll;
    }
</style>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const svg = document.getElementById(`${id}-svg`);
        const li = document.getElementById(`${id}-li`);
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            svg.style.transform = 'rotate(180deg)';
            li.style.fontWeight = 'bold';
        } else {
            dropdown.classList.add('hidden');
            svg.style.transform = 'rotate(0deg)';
            li.style.fontWeight = 'normal';
        }
    }
</script> 