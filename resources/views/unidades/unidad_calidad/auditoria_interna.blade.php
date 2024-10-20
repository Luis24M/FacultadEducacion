@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 p-8">
    <div class="w-full   rounded-lg p-10">
        <h2 class="text-4xl font-bold mb-8 text-center">Auditoría Interna en la Facultad de Educación</h2>
        <p class="mb-8 text-lg leading-relaxed">
            La auditoría interna en la Facultad de Educación es un proceso sistemático y objetivo diseñado para evaluar y mejorar la eficacia de los procesos de gestión de riesgos, control y gobierno académico. Su objetivo principal es proporcionar una evaluación independiente sobre la adecuación y efectividad de los controles internos y los procesos operativos dentro de la facultad.
        </p>
        
        <h3 class="text-3xl font-semibold mb-6">Características de la auditoría interna:</h3>
        <ul class="list-disc list-inside mb-8 space-y-2">
            <li><strong>Independencia:</strong> La auditoría interna debe operar de manera independiente de las actividades académicas y administrativas que audita.</li>
            <li><strong>Enfoque en el riesgo:</strong> Se centra en identificar y evaluar los riesgos que afectan la calidad educativa y la gestión de programas académicos.</li>
            <li><strong>Evaluación de controles internos:</strong> Revisa la efectividad de los controles establecidos para garantizar el cumplimiento de políticas educativas y estándares académicos.</li>
            <li><strong>Mejora continua:</strong> Proporciona recomendaciones para optimizar los procesos académicos y administrativos.</li>
            <li><strong>Cumplimiento normativo:</strong> Asegura que la facultad cumpla con las regulaciones educativas y estándares institucionales.</li>
            <li><strong>Informes a la dirección:</strong> Comunica hallazgos y recomendaciones a la decanatura y otros cuerpos de gobierno de la facultad.</li>
        </ul>

        <h3 class="text-3xl font-semibold mb-6">Proceso de auditoría interna:</h3>
        <ol class="list-decimal list-inside mb-8 space-y-2">
            <li><strong>Planificación:</strong> Se elabora un plan de auditoría que identifica áreas críticas dentro de la facultad.</li>
            <li><strong>Ejecución:</strong> Se llevan a cabo pruebas y evaluaciones de procesos académicos y administrativos seleccionados.</li>
            <li><strong>Informe:</strong> Se elabora un informe que resume los hallazgos, conclusiones y recomendaciones.</li>
            <li><strong>Seguimiento:</strong> Se realiza un seguimiento de la implementación de las recomendaciones en el ámbito académico.</li>
        </ol>
        <div class="flex justify-center space-x-4">
    <button class="bg-[#483D8B] text-white font-bold py-3 px-6 rounded hover:bg-blue-700 text-lg">
        2021
    </button>
    <button class="bg-[#483D8B] text-white font-bold py-3 px-6 rounded hover:bg-blue-700 text-lg">
        2022
    </button>
    <button class="bg-[#483D8B] text-white font-bold py-3 px-6 rounded hover:bg-blue-700 text-lg">
        2023
    </button>
    <button class="bg-[#483D8B] text-white font-bold py-3 px-6 rounded hover:bg-blue-700 text-lg">
        2024
    </button>
</div>
    </div>
</div>



@endsection