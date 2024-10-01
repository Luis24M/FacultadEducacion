@if(request()->routeIs('home'))
    <x-side-button icon="fa-solid fa-house" title="Institucional" route="/institucional" />
    <x-side-button icon="fa-solid fa-house" title="Pregrado" route="/pregrado" />
    <x-side-button icon="fa-solid fa-house" title="Posgrado" route="/posgrado" />
    <x-side-button icon="fa-solid fa-house" title="Unidades" route="/unidades" />
    <x-side-button icon="fa-solid fa-house" title="Departamentos academicos"
        route="/departamentos-academicos" />
    <x-side-button icon="fa-solid fa-house" title="Segunda especialidad" route="/segunda-especialidad" />
    <x-side-button icon="fa-solid fa-house" title="Cidunt" route="/cidunt" />
    <x-side-button icon="fa-solid fa-house" title="R.N.C" route="/rnc" />
@elseif(request()->routeIs('institucional'))
    
@elseif(request()->routeIs('pregrado'))
<<<<<<< HEAD
    <x-side-button icon="fa-solid fa-house" title="Educación Secundaria" route="/educacion_secundaria" />
 
=======
    <x-side-button icon="fa-solid fa-house" title="Educación Inicial" route="/pregrado/CDLC" />
    <x-side-button icon="fa-solid fa-house" title="Educación Primaria" route="/pregrado/CDLC" />
    <x-side-button icon="fa-solid fa-house" title="Educación Secundaria" route="/pregrado/CDLC" />
    <div>


    <x-drop-down-button 
    title="Ciencias de la Comunicación" 
    :list="[
        ['name' => 'Institucional', 'url' => '/institucional'],
        ['name' => 'Menu', 'url' => '/menu'],
        ['name' => 'Footer', 'url' => '/footer']
    ]" 
/>

<x-drop-down-button 
    title="Ciencias de la Comunicación" 
    :list="[
        ['name' => 'Institucional', 'url' => '/institucional'],
        ['name' => 'Menu', 'url' => '/menu'],
        ['name' => 'Footer', 'url' => '/footer']
    ]" 
/>
<x-drop-down-button 
    title="Ciencias de la Comunicación" 
    :list="[
        ['name' => 'Institucional', 'url' => '/institucional'],
        ['name' => 'Menu', 'url' => '/menu'],
        ['name' => 'Footer', 'url' => '/footer']
    ]" 
/>
<x-drop-down-button 
    title="Ciencias de la Comunicación" 
    :list="[
        ['name' => 'Institucional', 'url' => '/institucional'],
        ['name' => 'Menu', 'url' => '/menu'],
        ['name' => 'Footer', 'url' => '/footer']
    ]" 
/>
>>>>>>> 33f7276af56fa6703f150523d187315720d47a47
@elseif(request()->routeIs('posgrado'))

@elseif(request()->routeIs('unidades'))

@elseif(request()->routeIs('departamentos-academicos'))

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