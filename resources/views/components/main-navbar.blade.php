<ul class="lg:flex justify-around [&>li]:w-fit items-center hidden gap-2 md:w-full">
    <li><a href="/institucional">Institucional</a></li>
    <li><a href="/pregrado">Pregrado</a></li>
    <li><a href="/posgrado">Posgrado</a></li>
    <li><a href="/unidades">Unidades</a></li>
    <li><a href="/departamentos_academicos">Departamentos Academicos</a></li>
    <li><a href="/segunda_especialidad">Segunda Especialidad</a></li>
    <li><a href="/cidunt">Cidunt</a></li>
    <li><a href="/rnc">R.N.C</a></li>
</ul>

<button class="text-white flex lg:hidden" id="menu-toggle">
    <img src="{{ asset('icons/burger.svg')}}" alt="" class="min-w-5" id="burger">
    <img src="{{ asset('icons/x.svg')}}" alt="" class="hidden min-w-5" id="x">
</button>


<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const burger = document.querySelector('#burger');
        const x = document.querySelector('#x');
        const body = document.body;

        // Toggle menu visibility
        menu.classList.toggle('hidden');

        // Toggle burger and x icons
        burger.classList.toggle('hidden');
        x.classList.toggle('hidden');

        // Toggle body overflow
        body.classList.toggle('overflow-hidden');
        

    });
</script>