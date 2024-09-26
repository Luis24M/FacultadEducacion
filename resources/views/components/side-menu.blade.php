@if(request()->routeIs('home'))
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Institucional" route="/institucional" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Pregrado" route="/pregrado" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Posgrado" route="/posgrado" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Unidades" route="/unidades" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Departamentos academicos"
        route="/departamentos-academicos" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Segunda especialidad" route="/segunda-especialidad" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="Cidunt" route="/cidunt" />
    <x-side-button icon="{{ asset('icons/inicio.png') }}" title="R.N.C" route="/rnc" />
@elseif(request()->routeIs('institucional'))
    
@elseif(request()->routeIs('pregrado'))

@elseif(request()->routeIs('posgrado'))

@elseif(request()->routeIs('unidades'))

@elseif(request()->routeIs('departamentos-academicos'))

@elseif(request()->routeIs('segunda-especialidad'))

@elseif(request()->routeIs('cidunt'))

@elseif(request()->routeIs('rnc'))

@endif