@if (request()->routeIs('home') ||
        request()->routeIs('institucional') ||
        request()->routeIs('noticias') ||
        request()->routeIs('galeria'))
    <x-side-button icon="home.svg" title="Institucional" route="/institucional" :active="request()->routeIs('institucional')" />
    <x-side-button icon="book.svg" title="Pregrado" route="/pregrado" :active="request()->routeIs('pregrado')" />
    <x-side-button icon="graduation.svg" title="Posgrado"
        route="https://web.facebook.com/EscuelaDePosgradoUNT/?locale=es_LA&_rdc=1&_rdr" :link='true' />
    <x-side-button icon="books.svg" title="Unidades" route="/unidades" :active="request()->routeIs('unidades')" />
    <x-side-button icon="diploma.svg" title="Segunda especialidad" route="https://www.facebook.com/sete.tecnologia.5"
        :link='true' />
    <x-side-button icon="language.svg" title="Cidunt" route="https://cidunt.edu.pe/web2/" :link='true' />
    <x-side-button icon="school.svg" title="R.N.C" route="https://www.rnc.edu.pe/" :link='true' />
    <x-side-button icon="book.svg" title="Galería" route="/galeria" :active="request()->routeIs('galeria')" />
    <x-side-button icon="login.svg" title="Iniciar Sesion" route="/login" :active="request()->routeIs('login')" />
    <x-side-button icon="aula.svg" title="Aula Virtual"
        route="javascript:window.open('https://aulavirtual2.unitru.edu.pe/login/index.php', '_blank');"
        :link='true' />

    {{-- PREGRADO --}}
@elseif(request()->routeIs('pregrado') ||
        request()->routeIs('pregrado.inicial') ||
        request()->routeIs('pregrado.cdlc') ||
        request()->routeIs('pregrado.primaria'))
    <h3 class="text-xl font-semibold">Pregrado</h3>
    <hr>
    <x-side-button icon="book.svg" title="Educación Inicial" route="/pregrado/inicial" :active="request()->routeIs('pregrado.inicial')" />
    <x-side-button icon="book.svg" title="Educación Primaria" route="/pregrado/primaria" :active="request()->routeIs('pregrado.primaria')" />
    <x-side-button icon="book.svg" title="Ciencias de la Comunicación" route="/pregrado/cdlc" :active="request()->routeIs('pregrado.cdlc')" />
    <x-side-button icon="book.svg" title="Educación Secundaria" route="/pregrado/secundaria" :active="request()->routeIs('pregrado.secundaria')" />

    {{-- SECUNDARIA --}}
@elseif(request()->routeIs('pregrado.secundaria') || request()->routeIs('pregrado.secundaria.*'))
    <h3 class="text-xl font-semibold">Educacion Secundaria</h3>
    <hr>
    <x-side-button icon="book.svg" title="Filosofía, Psicología y CCSS" route="/pregrado/secundaria/filosofia"
        :active="request()->routeIs('pregrado.secundaria.filosofia')" />
    <x-side-button icon="book.svg" title="Historia y Geografia" route="/pregrado/secundaria/historia"
        :active="request()->routeIs('pregrado.secundaria.historia')" />
    <x-side-button icon="book.svg" title="Ciencias Matematicas" route="/pregrado/secundaria/matematicas"
        :active="request()->routeIs('pregrado.secundaria.matematicas')" />
    <x-side-button icon="book.svg" title="Lengua y Literatura" route="/pregrado/secundaria/literatura"
        :active="request()->routeIs('pregrado.secundaria.literatura')" />
    <x-side-button icon="book.svg" title="Idiomas" route="/pregrado/secundaria/idiomas" :active="request()->routeIs('pregrado.secundaria.idiomas')" />

    {{-- POSGRADO --}}
@elseif(request()->routeIs('posgrado'))
    {{-- UNIDADES --}}
@elseif(request()->routeIs('unidades') || request()->routeIs('unidades.*'))
    <h3 class="text-xl font-semibold">Unidades</h3>
    <hr>
    <x-drop-down-button title="Unidad de Calidad" :list="[
        ['name' => 'Auditoria Interna', 'url' => '/unidades/unidad_calidad/auditoria_interna'],
        ['name' => 'Acreditación', 'url' => '/unidades/unidad_calidad/acreditacion'],
        ['name' => 'Licenciamiento', 'url' => '/unidades/unidad_calidad/licenciamiento'],
        ['name' => 'Repositorio', 'url' => '/unidades/unidad_calidad/repositorio'],
    ]" />

    <x-drop-down-button class="fa-solid fa-folder-open" title="Unidad de Practica Preprofesional" :list="[
        ['name' => 'Repositorio Documental', 'url' => '/unidades/practica_preprofesional/Repositorio'],
        ['name' => 'Comite', 'url' => '/unidades/practica_preprofesional/Comite'],
    ]" />

    <x-drop-down-button title="Unidad de Responsabilidad Social Universitaria" :list="[
        ['name' => 'Repositrorio Documental', 'url' => '/index'],
        ['name' => 'Informes de R.S.U', 'url' => '/documentacion'],
        ['name' => 'Proyectos actuales de R.S.U', 'url' => '/contacto'],
    ]" />

    <x-drop-down-button title="Unidad de Investigacion" :list="[
        ['name' => 'Repositorio de Investigacion', 'url' => '/unidades/unidadInvestigacion/InformeInvestigacion'],
        ['name' => 'Comite de Investigacion', 'url' => '/unidades/unidadInvestigacion/ComiteInvestigacion'],
    ]" />

    <x-side-button icon="" title="Unidad de Soporte" route="/unidades/unidad_soporte/index" :active="request()->routeIs('unidades.soporte')" />
@endif

<script>
    document.querySelectorAll('[data-dropdown]').forEach(button => {
        const dropdown = button.closest('.dropdown').querySelector('[data-dropdown-menu]');
        button.addEventListener('click', (event) => {
            event.stopPropagation();
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            button.setAttribute('aria-expanded', !isExpanded);
            document.querySelectorAll('.dropdown-menu').forEach(otherDropdown => {
                if (otherDropdown !== dropdown) {
                    otherDropdown.classList.add('max-h-0');
                    otherDropdown.classList.remove('max-h-60');
                    otherDropdown.previousElementSibling.querySelector('[data-dropdown]')
                        .setAttribute('aria-expanded', 'false');
                }
            });
            dropdown.classList.toggle('max-h-0');
            dropdown.classList.toggle('max-h-60');
        });
    });

    window.addEventListener('click', () => {
        document.querySelectorAll('[data-dropdown-menu]').forEach(dropdown => {
            dropdown.classList.add('max-h-0');
            dropdown.classList.remove('max-h-60');
        });
        document.querySelectorAll('[data-dropdown]').forEach(button => {
            button.setAttribute('aria-expanded', 'false');
        });
    });
</script>
