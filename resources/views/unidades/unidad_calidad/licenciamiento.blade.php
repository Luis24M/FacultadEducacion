@extends('layouts.home')

@section('content')
<div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Licenciamiento</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Licenciamiento por Facultad -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-center mb-4">Licenciamiento por Facultad</h2>
                <div class="flex items-center justify-center p-6 bg-yellow-50 rounded-lg border-2 border-yellow-200">
                    <div class="flex items-center space-x-3">
                        <svg class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <p class="text-lg text-yellow-700">El proceso de licenciamiento por facultad se encuentra temporalmente en pausa.</p>
                    </div>
                </div>
            </div>

            <!-- Licenciamiento por Escuelas -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-center mb-4">Licenciamiento por Escuelas</h2>
                <div class="flex items-center justify-center p-6 bg-yellow-50 rounded-lg border-2 border-yellow-200">
                    <div class="flex items-center space-x-3">
                        <svg class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <p class="text-lg text-yellow-700">El proceso de licenciamiento por escuelas se encuentra actualmente en estado de espera.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection