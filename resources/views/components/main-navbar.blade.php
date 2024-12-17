<ul class="lg:flex justify-around [&>li]:w-fit items-center hidden gap-2 md:w-full [&>li]:ease-in-out [&>li]:transition-all [&>li]:duration-200 ">
    <li class="hover:scale-105 {{request()->routeIs('institucional') ? 'font-bold' : '';}}"><a href="/institucional" class="">Institucional</a></li>
    <li class="hover:scale-105 {{request()->routeIs('pregrado') || request()->routeIs('pregrado.*') ? 'font-bold' : '';}}"><a href="/pregrado">Pregrado</a></li>
    <li class="hover:scale-105"><a href="https://web.facebook.com/EscuelaDePosgradoUNT/?locale=es_LA&_rdc=1&_rdr">Posgrado</a></li>
    <li class="hover:scale-105 {{request()->routeIs('unidades') || request()->routeIs('unidades.*') ? 'font-bold' : '';}}"><a href="/unidades">Unidades</a></li>
    <li class="hover:scale-105"><a href="https://www.facebook.com/sete.tecnologia.5">Segunda Especialidad</a></li>
    <li class="hover:scale-105"><a href="https://cidunt.edu.pe/web2/">Cidunt</a></li>
    <li class="hover:scale-105"><a href="https://www.rnc.edu.pe/">R.N.C</a></li>
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
        menu.classList.toggle('hidden');
        burger.classList.toggle('hidden');
        x.classList.toggle('hidden');
        body.classList.toggle('overflow-hidden');
    });
</script>