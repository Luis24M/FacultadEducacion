<ul class="lg:flex justify-around text-white [&>li]:w-fit items-center hidden gap-2 md:w-full">
  <li><a href="/">Institucional</a></li>
  <li><a href="/">Pregrado</a></li>
  <li><a href="/">Posgrado</a></li>
  <li><a href="/">Unidades</a></li>
  <li><a href="/">Departamentos Académicos</a></li>
  <li><a href="/">Segunda Especialidad</a></li>
  <li><a href="/">Cidunt</a></li>
  <li><a href="/">R.N.C</a></li>
</ul>

{{-- menu burguer for ipad --}}
<div class="flex items-center justify-center lg:hidden ml-4">
  <button class="text-white" id="menu-toggle">
    <i class="fas fa-bars md:w-12"></i>
  </button>
</div>

{{-- Dropdown menu for mobile --}}
<ul id="mobile-menu" class="flex-col bg-gray-800 text-white hidden w-full items-center">
  <li class="py-2"><a href="/">Institucional</a></li>
  <li class="py-2"><a href="/">Pregrado</a></li>
  <li class="py-2"><a href="/">Posgrado</a></li>
  <li class="py-2"><a href="/">Unidades</a></li>
  <li class="py-2"><a href="/">Departamentos Academicos</a></li>
  <li class="py-2"><a href="/">Segunda Especialidad</a></li>
  <li class="py-2"><a href="/">Cidunt</a></li>
  <li class="py-2"><a href="/">R.N.C</a></li>
</ul>

<script>
  document.getElementById('menu-toggle').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>
