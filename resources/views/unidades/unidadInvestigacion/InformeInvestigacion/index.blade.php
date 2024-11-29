@extends('layouts.home')
@section('content')
    <div class="flex flex-col w-full min-h-[calc(100dvh-230px)]  bg-white rounded-lg shadow-xl ">
        <div class="w-full text-4xl font-bold bg-blue-400 h-300px  ">
            <h1 class="p-5 text-black">UNIDAD DE INVESTIGACIÓN</h1>
        </div>

        <div class="flex flex-col w-full h-full space-x-5  justify-center items-center my-5">
            <div class="flex lg:flex-row flex-col justify-center  gap-x-3 flex-wrap w-full  ">
                <!-- Botones con documentos PDF -->
                <button 
                    onclick="handlePDFClick('{{ asset('pdfs/reglamento_docente_investigador.pdf') }}')" 
                    class="flex flex-col justify-center self-center items-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 w-300px lg:w-1/4 w-3/4 text-center text-wrap h-[100px]">
                    Reglamento del Docente Investigador y Promoción de la Investigación de la UNT
                </button>
                <button 
                    onclick="handlePDFClick('{{ asset('pdfs/reglamento_propiedad_intelectual.pdf') }}')" 
                    class="flex flex-col justify-center self-center items-center items-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]" >
                    Reglamento de propiedad intelectual de la UNT
                </button>
                <button 
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]"  >
                    Directiva de evaluación de grado de similitud de informe de Invitación Docente
                </button>
                <a href="https://drive.google.com/file/d/1lFDVhomssrnDYIrrDBcDQtX4BFjRTSZZ/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]" >
                    Guia de productos de investigacion
                </a>
                <a href="https://drive.google.com/file/d/1UeZwTd6bbv_5wYEC1phqaZTXfYrPSaHz/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg text-center h-[100px] my-3 lg:w-1/4 w-3/4">
                    Información de Investigación-Formativa y fin de carrera
                </a>
                <a href="https://drive.google.com/file/d/18jreYyfUr2lFwxyRgJNEJjSDHyaTw98h/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg text-center h-[100px] shadow-lg my-3 lg:w-1/4 w-3/4">
                    INFORME FINAL 2024 - V Jornada de Investigación y II Jornada Internacional
                </a>
                <a href="https://drive.google.com/file/d/1DawksQEnfB8ZSMJqng7dDWoFQyJjzdSN/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    Matriz de articulacion
                </a>
                <a href="https://drive.google.com/file/d/1DawksQEnfB8ZSMJqng7dDWoFQyJjzdSN/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    Metas-ODS
                </a>
                <a href="https://drive.google.com/file/d/1_6utgRSJe7Gcazd3gmKgEaWFY8vQadAr/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    OFICIO 280 -2024 - DIRECCIÓN DE INVESTIGACIÓN RSU
                </a>
                <a href="https://drive.google.com/file/d/1JCWJbDmxH-yRRfyOeB2y02Bd8ORx0BqE/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    Propuesta de investigación formativa y fin de carrera
                </a>
                <a href="hhttps://drive.google.com/file/d/1w_YbrcVMSyncD5PnYrHJDgLhSBzEuvUt/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    RCU-N-220-2022-UNT-LÍNEAS DE INVESTIGACIÓN-VIGENTE
                </a>
                <a href="https://drive.google.com/file/d/1ua66SLnBskS4T_zXMYSVsIskOaDcBetR/view"
                    onclick="handlePDFClick('{{ asset('pdfs/directiva_evaluacion.pdf') }}')" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    RCU-N-0568-2024-UNT
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