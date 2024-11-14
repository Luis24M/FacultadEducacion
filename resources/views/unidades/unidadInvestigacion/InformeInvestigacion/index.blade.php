@extends('layouts.app')
@section('content')
    <div class="w-full mx-auto p-8 bg-white rounded-lg shadow-xl mt-10">
        <h1 class="text-4xl font-extrabold text-center mb-6 text-gray-900">UNIDAD DE INVESTIGACIÓN</h1>
        <p class="text-center text-gray-700 mb-8 text-lg">
            Nuestra principal motivación es el desempeño académico de cada uno de nuestros alumnos. Su progreso nos llena de alegría y es nuestra mejor carta de presentación al mundo.
        </p>
        
        <div class="flex lg:flex-row flex flex-col w-full h-full space-x-5 fit">
            <div class="flex flex-col lg:w-1/4 w-full">
                <!-- Botones con documentos PDF -->
                <button 
                    onclick="handlePDFClick('{{ asset('pdfs/reglamento_docente_investigador.pdf') }}')" 
                    class="px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3">
                    Reglamento del Docente Investigador y Promoción de la Investigación de la UNT
                </button>
                <button 
                    onclick="handlePDFClick('{{ asset('pdfs/reglamento_propiedad_intelectual.pdf') }}')" 
                    class="px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3">
                    Reglamento de propiedad intelectual de la UNT
                </button>
                <button 
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3">
                    Directiva de evaluación de grado de similitud de informe de Invitación Docente
                </button>
            </div>
            <!-- Visor de PDF - Solo visible en desktop -->
            <div class="lg:w-3/4 hidden lg:block">
                <iframe id="visorPDF" src="" class="w-full h-96 border border-gray-300 rounded-lg shadow-md transition-transform duration-300" style="display: none;"></iframe>
            </div>
        </div>
    </div>
    <script>
    function handlePDFClick(ruta) {
        // Verificar si estamos en vista móvil usando matchMedia
        const isMobile = window.matchMedia("(max-width: 1023px)").matches;
        
        if (isMobile) {
            // En móvil, abrir en nueva pestaña
            window.open(ruta, '_blank');
        } else {
            // En desktop, mostrar en el visor
            const visor = document.getElementById('visorPDF');
            visor.src = ruta;
            visor.style.display = 'block';
            
            visor.onerror = function() {
                console.error('Error al cargar el PDF:', this.error);
                alert('Lo sentimos, ocurrió un error al cargar el PDF.');
            };
        }
    }
    </script>
@endsection