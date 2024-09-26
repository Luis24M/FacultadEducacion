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

@elseif(request()->routeIs('posgrado'))

@elseif(request()->routeIs('unidades'))

@elseif(request()->routeIs('departamentos-academicos'))

@elseif(request()->routeIs('segunda-especialidad'))

@elseif(request()->routeIs('cidunt'))

@elseif(request()->routeIs('rnc'))

@endif