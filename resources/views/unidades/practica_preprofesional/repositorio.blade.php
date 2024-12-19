@extends('layouts.home')
@section('content')
    <div class="flex flex-col w-full min-h-[calc(100dvh-230px)]  bg-white rounded-lg shadow-xl ">
        <div class="w-full text-4xl font-bold bg-blue-400 h-300px  ">
            <h1 class="p-5 text-black">UNIDAD DE PRÁCTICA PRE-PROFESIONAL</h1>
        </div>

        <div class="flex flex-col w-full h-full space-x-5  justify-center items-center my-5">
            <div class="flex lg:flex-row flex-col justify-center  gap-x-3 flex-wrap w-full  ">
                <!-- Botones con documentos PDF -->
                <a href="{{ route('unidades.practica_preprofesional.informeInvestigacion.showDocument','1') }}"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg text-center h-[100px] shadow-lg my-3 lg:w-1/4 w-3/4">
                    Ficha de monitoreo de Tutoria
                </a>
                <a href="{{ route('unidades.practica_preprofesional.informeInvestigacion.showDocument','2') }}" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    Ficha para Evaluar la Sesioón de Aprendizaje
                </a>
                <a href="{{ route('unidades.practica_preprofesional.informeInvestigacion.showDocument','3') }}" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    Registro de Asistencia
                </a>                
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