<nav class="h-24 w-full bg-[#FFD54F] flex items-center justify-between grow gap-4 pr-3">
    <div class="lg:hidden min-w-2   "></div>
    <section class="flex flex-col md:hidden items-center ">
        <div class="flex items-center">
            <img class="w-16"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png/1200px-Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png"
                alt="Logo unt">
            <h2>FACEDU</h2>
        </div>
        <h2 class="flex justify-center text-sm text-center w-[280px]">Facultad de Educación y Ciencias de la Comunicación
        </h2>
    </section>
    @include('components/main-navbar')
</nav>

<ul id="mobile-menu"
    class="flex flex-col bg-[#eee] text-black h-[calc(100dvh-80px)] [&>li]:flex hidden w-full justify-around p-6">
    <li class="py-2 hover:font-bold transition-all duration-300"><a class="" href="/">Institucional</a></li>
    <li class="py-2 hover:font-bold flex justify-between items-center">
        <a href="{{ route('pregrado') }}" class="">Pregrado</a>
        <button class="ml-2 focus:outline-none" onclick="toggleDropdown('pregrado-dropdown')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
            </svg>
        </button>
    </li>
    <ul id="pregrado-dropdown" class="hidden flex-col pl-4">
        <li><a href="{{route('pregrado.inicial')}}">Educación Incial</a></li>
        <li><a href="{{route('pregrado.primaria')}}">Educación Primaria</a></li>
        <li><a href="{{route('pregrado.cdlc')}}">Ciencias de la Comunicación</a></li>
        <li><a href="{{route('pregrado.secundaria')}}">Educación Secundaria</a>
            <button class="ml-2 focus:outline-none" onclick="toggleDropdown('secundaria-dropdown')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
        </li>
        <ul id="secundaria-dropdown" class="hidden flex-col pl-4">
            <li><a href="{{ route('pregrado.secundaria.filosofia') }}">Filosofía, Psicología y CCSS</a></li>
            <li><a href="{{ route('pregrado.secundaria.historia') }}">Historia y Geografia</a></li>
            <li><a href="{{ route('pregrado.secundaria.matematicas') }}">Ciencias Matematicas</a></li>
            <li><a href="{{ route('pregrado.secundaria.literatura') }}">Lengua y Literatura</a></li>
            <li><a href="{{ route('pregrado.secundaria.idiomas') }}">Idiomas</a></li>
        </ul>
    </ul>
    <li class="py-2 hover:font-bold flex justify-between"><a class="" href="/">Posgrado</a><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
    <li class="py-2 hover:font-bold flex justify-between"><a class="" href="/">Unidades</a>
        <button class="ml-2 focus:outline-none" onclick="toggleDropdown('unidades-dropdown')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
            </svg>
        </button>
    </li>
    <ul id="unidades-dropdown" class="hidden flex-col pl-4">
        <li><a href="">Calidad</a></li>
        <li><a href="">Practica Preprofesional </a></li>
        <li><a href="">Responsabilidad Social Unicversitaria</a></li>
        <li><a href="">Investigación</a></li>
        <li><a href="{{ route('unidades.soporte') }}">Soporte</a></li>

    </ul>
    <li class="py-2 hover:font-bold flex justify-between"><a class="" href="/">Segunda Especialidad</a><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
    <li class="py-2 hover:font-bold flex justify-between"><a class="" href="/">Cidunt</a><svg xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
    <li class="py-2 hover:font-bold flex justify-between"><a class="" href="/">R.N.C</a><svg xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg></li>
</ul>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
</script>