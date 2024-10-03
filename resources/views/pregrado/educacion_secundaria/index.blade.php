@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación Secundaria</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-yellow-400 text-5xl mb-6 text-center">Carrera de Educación Secundaria</h1>

        @foreach ([
            'Institucional',
            'Presentación',
            'Reseña Histórica',
            'Organigrama',
            'Directorio Telefónico',
            'Equipo de Trabajo Institucional', 
            'Boletines de Gestión Facedu',
            'Informe de Gestión',
            'Presupuesto y Ejecución',
            'Galería de Ex Directores'
        ] as $section)
            <div class="bg-white rounded-lg shadow-md p-5 mb-6">
                <h2 class="text-3xl text-blue-500">{{ $section }}</h2>
                <p class="mt-2 text-gray-700">Descripción sobre {{ strtolower($section) }}.</p>
            </div>
        @endforeach

    </div>
</body>
</html>
@endsection

