@extends('layouts.home')
@section('content')
    <div class="flex flex-col w-full min-h-[calc(100dvh-230px)]  bg-white rounded-lg shadow-xl ">
        <div class="w-full text-4xl font-bold bg-blue-400 h-300px  ">
            <h1 class="p-5 text-black">UNIDAD DE INVESTIGACIÓN</h1>
        </div>

        <div class="flex flex-col w-full min-h-[calc(100dvh-230px)] space-x-5  justify-center items-center my-5">
            <div class="flex lg:flex-row flex-col justify-center  gap-x-3 flex-wrap w-full min-h-[calc(100dvh-230px)]  ">
                <!-- Botones con documentos PDF -->
                 
                <a 
                    href="https://drive.google.com/file/d/1GNyj_cC5WbOlc2dpdJPuome18kNylU2-/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]" >
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M19.875 8c.621 0 1.125 .512 1.125 1.143v5.714c0 .631 -.504 1.143 -1.125 1.143h-15.875a1 1 0 0 1 -1 -1v-5.857c0 -.631 .504 -1.143 1.125 -1.143h15.75z"></path> <path d="M9 8v2"></path> <path d="M6 8v3"></path> <path d="M12 8v3"></path> <path d="M18 8v3"></path> <path d="M15 8v2"></path> </svg> 
                    </div>
                    Reglamento del Docente Investigador y Promoción de la Investigación de la UNT
                </a>

                
                <a 
                    href="https://drive.google.com/file/d/1Cg5riiniNxemybZKw1NthfC7h6ozM_Kh/view"
                    class="flex flex-col justify-center self-center items-center items-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]" >
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 19.875c0 .621 -.512 1.125 -1.143 1.125h-5.714a1.134 1.134 0 0 1 -1.143 -1.125v-15.875a1 1 0 0 1 1 -1h5.857c.631 0 1.143 .504 1.143 1.125z"></path> <path d="M12 9h-2"></path> <path d="M12 6h-3"></path> <path d="M12 12h-3"></path> <path d="M12 18h-3"></path> <path d="M12 15h-2"></path> <path d="M21 3h-4"></path> <path d="M19 3v18"></path> <path d="M21 21h-4"></path> </svg> 
                    </div>
                    <p>Reglamento de propiedad intelectual de la UNT</p>
                </a>
                <a 
                     href="https://drive.google.com/file/d/1_JLuK_NUSq_HVEeSAdKdWKdcpaJS0_rg/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]"  >
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path> <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path> <path d="M9 12v-1h6v1"></path> <path d="M12 11v6"></path> <path d="M11 17h2"></path> </svg> 
                    </div>
                    Directiva de evaluación de grado de similitud de informe de Invitación Docente
                </a>
                <a href="https://drive.google.com/file/d/1lFDVhomssrnDYIrrDBcDQtX4BFjRTSZZ/view"  
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4 text-center h-[100px]" >
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path> <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path> <path d="M3 6l0 13"></path> <path d="M12 6l0 13"></path> <path d="M21 6l0 13"></path> </svg> 
                    </div>
                    Guia de productos de investigacion
                </a>
                <a href="https://drive.google.com/file/d/1UeZwTd6bbv_5wYEC1phqaZTXfYrPSaHz/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg text-center h-[100px] my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path> <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path> </svg> 
                    </div>
                    Información de Investigación - Formativa y fin de carrera
                </a>
                <a href="https://drive.google.com/file/d/18jreYyfUr2lFwxyRgJNEJjSDHyaTw98h/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg text-center h-[100px] shadow-lg my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M14 3v4a1 1 0 0 0 1 1h4"></path> <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path> <path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path> <path d="M18.5 19.5l2.5 2.5"></path> </svg> 
                    </div>
                    INFORME FINAL 2024 - V Jornada de Investigación y II Jornada Internacional
                </a>
                <a href="https://drive.google.com/file/d/1DawksQEnfB8ZSMJqng7dDWoFQyJjzdSN/view" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M3 8h18"></path> <path d="M3 16h18"></path> <path d="M8 3v18"></path> <path d="M16 3v18"></path> </svg> 
                    </div>
                    Matriz de articulacion
                </a>
                <a href="https://drive.google.com/file/d/1DawksQEnfB8ZSMJqng7dDWoFQyJjzdSN/view" 
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95"></path> <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44"></path> <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92"></path> <path d="M8.56 20.31a9 9 0 0 0 3.44 .69"></path> <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95"></path> <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44"></path> <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92"></path> <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69"></path> <path d="M9 12l2 2l4 -4"></path> </svg> 
                    </div>
                    Metas-ODS
                </a>
                <a href="https://drive.google.com/file/d/1_6utgRSJe7Gcazd3gmKgEaWFY8vQadAr/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M14 3v4a1 1 0 0 0 1 1h4"></path> <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path> <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path> </svg> 
                    </div>
                    Oficio 280 -2024 - Dirección De Investigación RSU
                </a>
                <a href="https://drive.google.com/file/d/1JCWJbDmxH-yRRfyOeB2y02Bd8ORx0BqE/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path> <path d="M21 21l-6 -6"></path> <path d="M10 13l0 .01"></path> <path d="M10 10a1.5 1.5 0 1 0 -1.14 -2.474"></path> </svg> 
                    </div>
                    Propuesta de investigación formativa y fin de carrera
                </a>
                <a href="https://drive.google.com/file/d/1w_YbrcVMSyncD5PnYrHJDgLhSBzEuvUt/view"  
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path> <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path> <path d="M5 8h4"></path> <path d="M9 16h4"></path> <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path> <path d="M14 9l4 -1"></path> <path d="M16 16l3.923 -.98"></path> </svg> 
                    Líneas de Investigación Vigente
                </a>
                <a href="https://drive.google.com/file/d/1ua66SLnBskS4T_zXMYSVsIskOaDcBetR/view"
                    class="flex flex-col justify-center items-center self-center px-5 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-center h-[100px] rounded-lg shadow-lg my-3 lg:w-1/4 w-3/4">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path> <path d="M12 7a5 5 0 1 0 5 5"></path> <path d="M13 3.055a9 9 0 1 0 7.941 7.945"></path> <path d="M15 6v3h3l3 -3h-3v-3z"></path> <path d="M15 9l-3 3"></path> </svg> 
                    </div>
                    Requisitos y Condiciones para la Obtención del Grado de
                    Bachiller 
                </a>
            </div>
        </div>
    </div>
@endsection