@extends('layouts.home')

@section('content')

<section class="bg-[#483D8B] text-white py-8 flex items-center justify-center">
        <div class="text-center">
        <h1 class="text-4xl font-extrabold">Unidad de Calidad</h1>
         </div>
</section>


<div class="flex justify-center p-4">
    <div class="grid grid-cols-4 gap-4 w-full max-w-6xl bg-gray-100 p-6 rounded-lg shadow-lg">
        <div class="col-span-1 flex justify-center items-center">
            <img src="/colaboradores//ICON2.png" alt="Imagen 1" class="w-full h-full object-cover rounded-lg shadow-md">
        </div>
        
        <div class="col-span-2 flex flex-col justify-center text-center px-4">
            <h2 class="text-3xl font-extrabold mb-5">Auditoria Interna</h2>
            <p class="text-gray-700">La auditoría interna en la Facultad de Educación es un proceso sistemático y objetivo diseñado para evaluar y mejorar la eficacia de los procesos de gestión de riesgos, control y gobierno académico. Su objetivo principal es proporcionar una evaluación independiente sobre la adecuación y efectividad de los controles internos y los procesos operativos dentro de la facultad.</p>
        </div>

        <div class="col-span-1 flex justify-center items-center">
            <img src="/colaboradores/ICON.png" alt="Imagen 2" class="w-full h-full object-cover rounded-lg shadow-md">
        </div>
    </div>
</div>


<div class="flex justify-center p-4">
    <div class="grid grid-cols-1 gap-4 w-full max-w-6xl p-6">
        <div class="flex flex-col items-center">
            <!-- Inicio de cuadro para Características -->
            <div class="col-span-1 flex justify-center items-center mb-8">
                <div class="w-100 max-w-3xl bg-white shadow-lg rounded-lg overflow-hidden">
                    <table class="w-full text-left border border-gray-300">
                        <thead>
                            <tr>
                                <th colspan="2" class="bg-blue-500 text-white text-center py-3 text-xl font-semibold">
                                    Características
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="independenciaTd">
                                    <button class="characteristic-button" onclick="showCharacteristicText('independencia', this)">Independencia</button>
                                </td>
                                <td rowspan="6" id="characteristicText" class="border border-gray-300 p-4 align-middle text-center">
                                    La auditoría interna debe operar de manera independiente de las actividades académicas y administrativas que audita.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="enfoqueRiesgoTd">
                                    <button class="characteristic-button" onclick="showCharacteristicText('enfoque_riesgo', this)">Enfoque en el riesgo</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="evaluacionControlesTd">
                                    <button class="characteristic-button" onclick="showCharacteristicText('evaluacion_controles', this)">Evaluación de controles internos</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="mejoraContinuaTd">
                                    <button class="characteristic-button" onclick="showCharacteristicText('mejora_continua', this)">Mejora continua</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="cumplimientoNormativoTd">
                                    <button class="characteristic-button" onclick="showCharacteristicText('cumplimiento_normativo', this)">Cumplimiento normativo</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="informesDireccionTd">
                                    <button class="characteristic-button" onclick="showCharacteristicText('informes_direccion', this)">Informes a la dirección</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Termino de cuadro-->

            <!-- Inicio de cuadro para Proceso de Auditoría Interna -->
            <div class="col-span-1 flex justify-center items-center">
                <div class="w-80 max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
                    <table class="w-full text-left border border-gray-300">
                        <thead>
                            <tr>
                                <th colspan="2" class="bg-blue-500 text-white text-center py-3 text-xl font-semibold">
                                    Proceso de Auditoría Interna
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="planificacionTd">
                                    <button class="process-button" onclick="showText('planificacion', this)">Planificación</button>
                                </td>
                                <td rowspan="4" id="processText" class="border border-gray-300 p-4 align-middle text-center">
                                    Se elabora un plan de auditoría que identifica áreas críticas dentro de la facultad.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="ejecucionTd">
                                    <button class="process-button" onclick="showText('ejecucion', this)">Ejecución</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="informeTd">
                                    <button class="process-button" onclick="showText('informe', this)">Informe</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-4 text-center align-middle" id="seguimientoTd">
                                    <button class="process-button" onclick="showText('seguimiento', this)">Seguimiento</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Termino de cuadro-->
        </div>
    </div>
</div>


        
        <!-- Agregar el modal para el código de acceso -->
        <div id="accessCodeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h3 class="text-xl font-bold mb-4">Código de Acceso Requerido</h3>
                <input type="password" id="accessCodeInput" class="border rounded px-3 py-2 mb-4 w-full" placeholder="Ingrese el código de acceso">
                <div class="flex justify-end space-x-3">
                    <button onclick="closeAccessCodeModal()" class="bg-gray-300 px-4 py-2 rounded">Cancelar</button>
                    <button onclick="validateAccessCode()" class="bg-blue-500 text-white px-4 py-2 rounded">Verificar</button>
                </div>
            </div>
        </div>

        <!-- Agregar botones para cada año con código de acceso -->
        <div class="year-buttons flex justify-center space-x-6 my-4">
            <button onclick="showAccessCodePrompt('https://drive.google.com/drive/folders/10boks3g14eWqWCrU9Qxs_lSoDDYL0d4z?usp=sharing')" class="year-button bg-blue-500 text-white px-6 py-3 rounded flex items-center text-lg">
                2021 <i class="fas fa-download ml-3 text-xl"></i>
            </button>
            <button onclick="showAccessCodePrompt('https://drive.google.com/drive/folders/10SxO-7ALy_3bJfzhp-XG19htSV5HIxDp?usp=sharing')" class="year-button bg-blue-500 text-white px-6 py-3 rounded flex items-center text-lg">
                2022 <i class="fas fa-download ml-3 text-xl"></i>
            </button>
            <button onclick="showAccessCodePrompt('https://drive.google.com/drive/folders/1pHrQWoFZeivU6I_3oOtJvQeo8yQFxt6C?usp=sharing')" class="year-button bg-blue-500 text-white px-6 py-3 rounded flex items-center text-lg">
                2023 <i class="fas fa-download ml-3 text-xl"></i>
            </button>
            <button onclick="showAccessCodePrompt('https://drive.google.com/drive/folders/1mTXFjaIePQMN_Ajsx9XqDQKKa4rwu5kH?usp=sharing')" class="year-button bg-blue-500 text-white px-6 py-3 rounded flex items-center text-lg">
                2024 <i class="fas fa-download ml-3 text-xl"></i>
            </button>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    let currentPdfUrl = '';
    const ACCESS_CODE = 'facedu2024'; // Código de acceso

    function showAccessCodePrompt(pdfUrl) {
        currentPdfUrl = pdfUrl;
        document.getElementById('accessCodeModal').classList.remove('hidden');
        document.getElementById('accessCodeInput').value = '';
    }

    function closeAccessCodeModal() {
        document.getElementById('accessCodeModal').classList.add('hidden');
    }

    function validateAccessCode() {
        const inputCode = document.getElementById('accessCodeInput').value;
        if (inputCode === ACCESS_CODE) {
            window.open(currentPdfUrl, '_blank');
            closeAccessCodeModal();
        } else {
            alert('Código de acceso incorrecto');
        }
    }

    function showText(process, button) {
        const processText = {
            planificacion: "Se elabora un plan de auditoría que identifica áreas críticas dentro de la facultad.",
            ejecucion: "Se llevan a cabo pruebas y evaluaciones de procesos académicos y administrativos seleccionados.",
            informe: "Se elabora un informe que resume los hallazgos, conclusiones y recomendaciones.",
            seguimiento: "Se realiza un seguimiento de la implementación de las recomendaciones en el ámbito académico."
        };

        // Mostrar el texto correspondiente
        document.getElementById('processText').innerText = processText[process];

        // Resaltar el <td> correspondiente
        const tds = document.querySelectorAll('#planificacionTd, #ejecucionTd, #informeTd, #seguimientoTd');
        tds.forEach(td => {
            td.style.backgroundColor = ''; // Limpiar el fondo
        });

        // Resaltar el <td> del botón seleccionado
        button.parentElement.style.backgroundColor = '#A2EAED'; // Resaltar el cuadrado
    }

    function showCharacteristicText(characteristic, button) {
        const characteristicText = {
            independencia: "La auditoría interna debe operar de manera independiente de las actividades académicas y administrativas que audita.",
            enfoque_riesgo: "Se centra en identificar y evaluar los riesgos que afectan la calidad educativa y la gestión de programas académicos.",
            evaluacion_controles: "Revisa la efectividad de los controles establecidos para garantizar el cumplimiento de políticas educativas y estándares académicos.",
            mejora_continua: "Proporciona recomendaciones para optimizar los procesos académicos y administrativos.",
            cumplimiento_normativo: "Asegura que la facultad cumpla con las regulaciones educativas y estándares institucionales.",
            informes_direccion: "Comunica hallazgos y recomendaciones a la decanatura y otros cuerpos de gobierno de la facultad."
        };

        // Mostrar el texto correspondiente
        document.getElementById('characteristicText').innerText = characteristicText[characteristic];

        // Resaltar el <td> correspondiente
        const tds = document.querySelectorAll('#independenciaTd, #enfoqueRiesgoTd, #evaluacionControlesTd, #mejoraContinuaTd, #cumplimientoNormativoTd, #informesDireccionTd');
        tds.forEach(td => {
            td.style.backgroundColor = ''; // Limpiar el fondo
        });

        // Resaltar el <td> del botón seleccionado
        button.parentElement.style.backgroundColor = '#A2EAED'; // Resaltar el cuadrado
    }

    // Resaltar el botón de Planificación y mostrar su texto al cargar la página
    window.onload = function() {
        // Resaltar Planificación
        const planificacionButton = document.querySelector('#planificacionTd .process-button');
        planificacionButton.click(); // Simula un clic en el botón de Planificación

        // Resaltar Independencia
        const independenciaButton = document.querySelector('#independenciaTd .characteristic-button');
        independenciaButton.click(); // Simula un clic en el botón de Independencia
    };
</script>

@endsection