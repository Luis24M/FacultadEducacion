<nav class="h-24 w-full bg-[#FFD54F] flex items-center justify-between grow gap-4 pr-3">
    <div class="lg:hidden min-w-2   ">

    </div>
    <section class="flex flex-col md:hidden items-center ">
        <div class="flex items-center">
            <img class="w-16"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png/1200px-Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png"
                alt="Logo unt">
            <h2>FACEDU</h2>
        </div>
        <h2 class="flex justify-center text-sm text-center w-[280px]">Facultad de educación y ciencias de la comunicación
        </h2>
    </section>
    @include('components/main-navbar')
</nav>

<ul id="mobile-menu"
    class="flex flex-col bg-[#eee] text-black h-[calc(100dvh-80px)] transition-all duration-300 hidden w-full justify-around p-6
        ">
    <li class="py-2 hover:font-bold transition-all duration-300"><i class="fa-solid fa-angle-right mr-1"></i><a
            class="" href="/">Institucional</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">Pregrado</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">Posgrado</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">Unidades</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">Departamentos Academicos</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">Segunda
            Especialidad</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">Cidunt</a></li>
    <li class="py-2 hover:font-bold"><i class="fa-solid fa-angle-right mr-1"></i><a class=""
            href="/">R.N.C</a></li>
</ul>
{{-- 
<style>
    .fa-angle-right {
        display: none;
    }

    li:hover .fa-angle-right {
        display: inline-block;
    }
</style> --}}
