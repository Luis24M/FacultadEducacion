@extends('layouts.home')

@section('content')

<section class="bg-[#483D8B] text-white py-5 flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-extrabold">Repositorio Documental</h1>
    </div>
</section>

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


    <div class="flex justify-center items-center p-4 h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-2/4">
        <!-- Primer grid -->
        <div class="flex flex-col justify-center items-center">
        <img src="/colaboradores/UNT X SINEACE.png" alt="Imagen 1" class="w-full h-auto rounded shadow mb-4">
        <a href="https://repositorio.sineace.gob.pe/repositorio/bitstream/handle/20.500.12982/5490/Explicaci%c3%b3n%20de%20est%c3%a1ndares%20del%20modelo%20de%20acreditaci%c3%b3n.pdf?sequence=1&isAllowed=y" target="_blank" class="bg-blue-500 text-white px-6 py-3 rounded flex items-center justify-center text-lg w-full h-16">
            SINEACE <img src="{{ asset('icons/arrow.svg') }}" alt="Icono de Descarga" class="ml-2">
        </a>
        </div>
        
        <!-- Segundo grid -->
        <div class="flex flex-col justify-center items-center">
        <img src="/colaboradores/ISO 9001.png" alt="Imagen 2" class="w-full h-auto rounded shadow mb-4">
        <button onclick="showAccessCodePrompt('https://www.iso.org/obp/ui/#iso:std:iso:9001:ed-5:v1:es')" class="bg-blue-500 text-white px-6 py-3 rounded flex items-center justify-center text-lg w-full h-16">
            NORMA ISO 9001 <img src="{{ asset('icons/download.svg') }}" alt="Icono de Descarga" class="ml-2">
        </button>
        </div>
        
        <!-- Tercer grid -->
        <div class="flex flex-col justify-center items-center">
        <img src="/colaboradores/ISO 24001.png" alt="Imagen 3" class="w-full h-auto rounded shadow mb-4">
        <button onclick="showAccessCodePrompt('https://normasiso.org/norma-iso-24001/')" class="bg-blue-500 text-white px-6 py-3 rounded flex items-center justify-center text-lg w-full h-16">
            NORMA ISO 24001 <img src="{{ asset('icons/download.svg') }}" alt="Icono de Descarga" class="ml-2">
        </button>
        </div>
    </div>
    </div>



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
    </script>

@endsection
