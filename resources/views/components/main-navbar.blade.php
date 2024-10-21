<ul class="lg:flex justify-around text- [&>li]:w-fit items-center hidden gap-2 md:w-full">
    <li><a href="/institucional">Institucional</a></li>
    <li><a href="/pregrado">Pregrado</a></li>
    <li><a href="/posgrado">Posgrado</a></li>
    <li><a href="/unidades">Unidades</a></li>
    <li><a href="/departamentos_academicos">Departamentos Academicos</a></li>
    <li><a href="/segunda_especialidad">Segunda Especialidad</a></li>
    <li><a href="/cidunt">Cidunt</a></li>
    <li><a href="/rnc">R.N.C</a></li>
</ul>

<button class="text-white flex lg:hidden px-4 w-full justify-end" id="menu-toggle">
    <i class="fas fa-bars  md:w-12"></i>
</button>


<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const icon = document.querySelector('#menu-toggle i');
        const body = document.body;

        // Toggle menu visibility
        menu.classList.toggle('hidden');

        // Toggle icon classes
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-x', !icon.classList.contains('fa-bars'));

        // Toggle body overflow to disable/enable scroll
        if (!menu.classList.contains('hidden')) {
            body.classList.add('overflow-hidden');
        } else {
            body.classList.remove('overflow-hidden');
        }
    });
</script>