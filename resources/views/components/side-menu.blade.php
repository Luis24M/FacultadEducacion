@if(request()->routeIs('home'))
    <x-side-button icon="fa-solid fa-house" title="Institucional" route="/institucional"  />
    <x-side-button icon="fa-solid fa-book" title="Pregrado" route="/pregrado" />
    <x-side-button icon="fa-solid fa-graduation-cap" title="Posgrado" route="/posgrado" />
    <x-side-button icon="fa-solid fa-hammer" title="Unidades" route="/unidades" />
    <x-side-button icon="fa-solid fa-building-columns" title="Departamentos academicos"
        route="/departamentos_academicos" />
    <x-side-button icon="fa-solid fa-certificate" title="Segunda especialidad" route="/segunda_especialidad" />
    <x-side-button icon="fa-solid fa-language" title="Cidunt" route="https://cidunt.edu.pe/web2/" />
    <x-side-button icon="fa-solid fa-school" title="R.N.C" route="https://www.rnc.edu.pe/" />

@elseif(request()->routeIs('institucional'))
    
{{-- PREGRADO --}}
@elseif(request()->routeIs('pregrado'))
    <h3 class="text-xl font-semibold">Pregrado</h3>
    <hr>
    <x-side-button icon="fa-solid fa-house" title="Educación Inicial" route="/pregrado/inicial" />
    <x-side-button icon="fa-solid fa-house" title="Educación Primaria" route="/pregrado/primaria" />
    <x-side-button icon="fa-solid fa-house" title="Educación Secundaria" route="pregrado/secundaria" />
    <x-side-button icon="fa-solid fa-house" title="Ciencias de la comunicación" route="/pregrado/cdlc" />
    {{-- INICIAL --}}

    {{-- PRIMARIA --}}

    {{-- SECUNDARIA --}}
    @elseif(request()->routeIs('pregrado.secundaria') || request()->routeIs('pregrado.secundaria.*'))
        <h3 class="text-xl font-semibold">Educacion Secundaria</h3>
        <hr>
        <x-side-button icon="fa-solid fa-house" title="Historia y Geografia" route="/pregrado/secundaria/historia" />
        <x-side-button icon="fa-solid fa-house" title="Ciencias Matematicas" route="/pregrado/secundaria/matematicas" />
        <x-side-button icon="fa-solid fa-house" title="Idiomas" route="/pregrado/secundaria/idiomas" />

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
        ['name' => 'Licenciamiento', 'url' => '/unidades/unidad_calidad/licenciamiento'] 
    ]" 
/>

    <x-drop-down-button 
        class="fa-solid fa-folder-open"
        title="Practica Preprofesional" 
        :list="[
            ['name' => 'Directivas', 'url' => '/unidades/practica_preprofesional'],
            ['name' => 'Comité', 'url' => '/menu'],
            ['name' => 'Docentes', 'url' => '/footer']
        ]" 
        
    />



@elseif(request()->routeIs('departamentos_academicos'))
<x-side-button icon="fa-solid fa-house" title="Ciencias de la Educación" route="/departamentos_academicos/educacion" />
<x-side-button icon="fa-solid fa-house" title="Filosofia y Arte" route="/departamentos_academicos/filosofiayarte" />
<x-side-button icon="fa-solid fa-house" title="Ciencias Psicológicas" route="/departamentos_academicos/psicologicas" />
<x-side-button icon="fa-solid fa-house" title="Lengua Nacional y Literatura" route="/departamentos_academicos/lengua" />
<x-side-button icon="fa-solid fa-house" title="Historia y Geografia" route="/departamentos_academicos/historia" />
<x-side-button icon="fa-solid fa-house" title="Idiomas y Lingüística" route="/departamentos_academicos/idiomas" />
<x-side-button icon="fa-solid fa-house" title="Comunicación Social" route="/departamentos_academicos/comunicacion" />

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


