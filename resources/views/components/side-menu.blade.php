@if(request()->routeIs('home') || request()->routeIs('institucional'))
    <x-side-button icon="home.svg" title="Institucional" route="/institucional"  />
    <x-side-button icon="book.svg" title="Pregrado" route="/pregrado" />
    <x-side-button icon="graduation.svg" title="Posgrado" route="https://web.facebook.com/EscuelaDePosgradoUNT/?locale=es_LA&_rdc=1&_rdr" />
    <x-side-button icon="books.svg" title="Unidades" route="/unidades" />
    <x-side-button icon="diploma.svg" title="Segunda especialidad" route="https://www.facebook.com/sete.tecnologia.5" />
    <x-side-button icon="language.svg" title="Cidunt" route="https://cidunt.edu.pe/web2/" />
    <x-side-button icon="school.svg" title="R.N.C" route="https://www.rnc.edu.pe/" />
    <x-side-button icon="book.svg" title="Galería" route="/galeria"/>
    <x-side-button icon="login.svg" title="Iniciar Sesion" route="/login"/>
    <x-side-button icon="aula.svg" title="Aula Virtual" route="javascript:window.open('https://aulavirtual2.unitru.edu.pe/login/index.php', '_blank');"/>
    
{{-- PREGRADO --}}
@elseif(request()->routeIs('pregrado') || request()->routeIs('pregrado.inicial') || request()->routeIs('pregrado.cdlc'))
    <h3 class="text-xl font-semibold">Pregrado</h3>
    <hr>
    <x-side-button icon="book.svg" title="Educación Inicial" route="/pregrado/inicial" />
    <x-side-button icon="book.svg" title="Educación Primaria" route="/pregrado/primaria" />
    <x-side-button icon="book.svg" title="Ciencias de la Comunicación" route="/pregrado/cdlc" />
    <x-side-button icon="book.svg" title="Educación Secundaria" route="/pregrado/secundaria" />



    {{-- PRIMARIA --}}
    @elseif(request()->routeIs('pregrado') || request()->routeIs('pregrado.primaria') || request()->routeIs('pregrado.cdlc'))
    <h3 class="text-xl font-semibold">Pregrado</h3>
    <hr>
    <x-side-button icon="book.svg" title="Educación Inicial" route="/pregrado/inicial" />
    <x-side-button icon="book.svg" title="Educación Primaria" route="/pregrado/primaria" />
    <x-side-button icon="book.svg" title="Ciencias de la Comunicación" route="/pregrado/cdlc" />
    <x-side-button icon="book.svg" title="Educación Secundaria" route="/pregrado/secundaria" />


    {{-- SECUNDARIA --}}
    @elseif(request()->routeIs('pregrado.secundaria') || request()->routeIs('pregrado.secundaria.*') )
        <h3 class="text-xl font-semibold">Educacion Secundaria</h3>
        <hr>
        <x-side-button icon="book.svg" title="Filosofía, Psicología y CCSS" route="/pregrado/secundaria/filosofia" />
        <x-side-button icon="book.svg" title="Historia y Geografia" route="/pregrado/secundaria/historia" />
        <x-side-button icon="book.svg" title="Ciencias Matematicas" route="/pregrado/secundaria/matematicas" />
        <x-side-button icon="book.svg" title="Lengua y Literatura" route="/pregrado/secundaria/literatura" />
        <x-side-button icon="book.svg" title="Idiomas" route="/pregrado/secundaria/idiomas" />

    @elseif(request()->routeIs('pregrado.cdlc') || request()->routeIs('pregrado.cdlc.*'))
        <h3 class="text-xl font-semibold">Ciencias de la Comunicación</h3>
        <hr>
        <x-side-button icon="book.svg" title="Intitucional" route="#institucional" />
        <x-side-button icon="book.svg" title="Reseña Histórica" route="#resenaHistorica" />
        <x-side-button icon="book.svg" title="Perfil Profesional" route="#perfilProfesional" />
        <x-side-button icon="book.svg" title="Plan de estudios" route="#planEstudios" />
        <x-side-button icon="book.svg" title="Plana docente" route="#planaDocente" />

{{-- POSGRADO --}}
@elseif(request()->routeIs('posgrado'))

{{-- UNIDADES --}}
@elseif(request()->routeIs('unidades') || request()->routeIs('unidades.*'))
<h3 class="text-xl font-semibold">Unidades</h3>
<hr>
<x-drop-down-button 
    title="Unidad de Calidad" 
    :list="[ 
        ['name' => 'Auditoria Interna', 'url' => '/unidades/unidad_calidad/auditoria_interna'], 
        ['name' => 'Acreditación', 'url' => '/unidades/unidad_calidad/acreditacion'], 
        ['name' => 'Licenciamiento', 'url' => '/unidades/unidad_calidad/licenciamiento'],
        ['name' => 'Repositorio', 'url' => '/unidades/unidad_calidad/repositorio']
    ]"
/>

<x-drop-down-button 
        class="fa-solid fa-folder-open"
        title="Unidad de Practica Preprofesional" 
        :list="[
            ['name' => 'Inicio', 'url' => '/practica_preprofesional'],
            ['name' => 'Reglamento', 'url' => '/Reglamento'],
            ['name' => 'Comité', 'url' => '/Comite'],
            ['name' => 'Docentes', 'url' => '/Docentes']
        ]" 
    />
    <x-drop-down-button 

    title="Unidad de Responsabilidad Social" 
    :list="[
        ['name' => 'Inicio', 'url' => '/index'],
        ['name' => 'Documentacion', 'url' => '/documentacion'],
        ['name' => 'Contacto', 'url' => '/contacto']
    ]" 
/>

<x-drop-down-button 
    title="Unidad de Investigacion" 
    :list="[
        ['name' => 'Repositorio de Investigacion', 'url' => '/unidades/unidadInvestigacion/InformeInvestigacion'],
        ['name' => 'Comite de Investigacion', 'url' => '/unidades/unidadInvestigacion/ComiteInvestigacion']
    ]" 
/>

<x-side-soporte title="Unidad de Soporte" route="/unidades/unidad_soporte/index" />


@elseif(request()->routeIs('departamentos_academicos'))
<x-side-button icon="building.svg" title="Ciencias de la Educación" route="/departamentos_academicos/educacion" />
<x-side-button icon="building.svg" title="Filosofia y Arte" route="/departamentos_academicos/filosofiayarte" />
<x-side-button icon="building.svg" title="Ciencias Psicológicas" route="/departamentos_academicos/psicologicas" />
<x-side-button icon="building.svg" title="Lengua Nacional y Literatura" route="/departamentos_academicos/lengua" />
<x-side-button icon="building.svg" title="Historia y Geografia" route="/departamentos_academicos/historia" />
<x-side-button icon="building.svg" title="Idiomas y Lingüística" route="/departamentos_academicos/idiomas" />
<x-side-button icon="building.svg" title="Comunicación Social" route="/departamentos_academicos/comunicacion" />

@elseif(request()->routeIs('segunda-especialidad'))

@elseif(request()->routeIs('cidunt'))

@elseif(request()->routeIs('rnc'))


@endif

<script>
    document.querySelectorAll('[data-dropdown]').forEach(button => {
    const dropdown = button.closest('.dropdown').querySelector('[data-dropdown-menu]');

    button.addEventListener('click', (event) => {
        event.stopPropagation(); // Evitar que el clic se propague
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !isExpanded);

        // Cerrar otros dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(otherDropdown => {
            if (otherDropdown !== dropdown) {
                otherDropdown.classList.add('max-h-0');
                otherDropdown.classList.remove('max-h-60');
                otherDropdown.previousElementSibling.querySelector('[data-dropdown]').setAttribute('aria-expanded', 'false');
            }
        });

        // Alternar el dropdown actual
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


