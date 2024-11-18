@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center mb-4 text-blue-600">Coordinadores de la Práctica Pre profesional de la Facultad de Educación y Ciencias de la Comunicacion</h1>

    <nav class="flex justify-center mb-8 space-x-4">
        <a href="#" onclick="showSection('Edu_Primaria')" class="bg-blue-600 text-white font-semibold py-2 px-6 rounded-md shadow hover:bg-blue-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Educación Primaria
        </a>
        <a href="#" onclick="showSection('Edu_Secundaria')" class="bg-green-600 text-white font-semibold py-2 px-6 rounded-md shadow hover:bg-green-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Educación Secundaria
        </a>
        <a href="#" onclick="showSection('Edu_Inicial')" class="bg-red-600 text-white font-semibold py-2 px-6 rounded-md shadow hover:bg-red-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Educación Inicial
        </a>
        <a href="#" onclick="showSection('Cc_Comunicacion')" class="bg-yellow-600 text-white font-semibold py-2 px-6 rounded-md shadow hover:bg-yellow-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Ciencias de la Comunicación
        </a>
    </nav>

    <!-- Apartado adicional -->
    <div id="extraContent" class="bg-gradient-to-r from-blue-500 to-purple-600 p-6 rounded-lg mb-6 text-center text-white h-auto min-h-[300px]">
        <h2 class="text-2xl font-semibold mb-2">Bienvenido al Comité</h2>
        <p class="mb-4">Aquí encontrarás información valiosa sobre los programas de estudio y sus administradores.</p>
        <img src="https://img.freepik.com/vector-premium/banner-bienvenida_647963-1017.jpg" alt="Descripción de la imagen" class="mt-4 rounded-md shadow-lg mx-auto" />
    </div>


</div>



<div class="mt-8" id="sections">

    <!-- Educación Primaria -->

    <div id="Edu_Primaria" class="hidden bg-blue-100 p-8 rounded-lg">
        <h2 class="text-3xl font-bold text-blue-600 text-center mb-6">Educación Primaria</h2>

        <p class="mt-2 text-gray-700 text-center">Contenido relacionado con la práctica preprofesional inicial y la organización de los cargos administrativos del programa de estudios de Educación Primaria.</p>

        <div class="mt-8">
            <h3 class="text-xl font-bold text-blue-500 mb-4">Cargos Administrativos</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Director" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-blue-600">Dr. Juan Pérez</h4>
                        <p class="text-gray-600 mt-2">Director del Programa de Educación Primaria</p>
                        <p class="text-gray-600 mt-2">Correo: juan.perez@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 999 999 999</p>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Coordinadora" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-blue-600">Lic. María López</h4>
                        <p class="text-gray-600 mt-2">Coordinadora Académica</p>
                        <p class="text-gray-600 mt-2">Correo: maria.lopez@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 988 888 888</p>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Asistente" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-blue-600">Lic. Carlos Gómez</h4>
                        <p class="text-gray-600 mt-2">Asistente de Coordinación</p>
                        <p class="text-gray-600 mt-2">Correo: carlos.gomez@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 977 777 777</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Educación Secundaria -->
    <div id="Edu_Secundaria" class="hidden p-8 rounded-lg">
        <h2 class="text-3xl font-bold text-green-600 text-center mb-6">Educación Secundaria</h2>

        <p class="mt-2 text-gray-700 text-center">Contenido relacionado con la práctica preprofesional inicial y la organización de los cargos administrativos del programa de estudios de Educación Secundaria.</p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <button id="btn-program1" onclick="showDetails('program1', this)" class="bg-indigo-600 text-white font-semibold py-3 px-6 rounded-md shadow hover:bg-indigo-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                Filosofía, Psicología y CcSs
            </button>
            <button id="btn-program2" onclick="showDetails('program2', this)" class="bg-blue-500 text-white font-semibold py-3 px-6 rounded-md shadow hover:bg-blue-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                Idiomas
            </button>
            <button id="btn-program3" onclick="showDetails('program3', this)" class="bg-teal-500 text-white font-semibold py-3 px-6 rounded-md shadow hover:bg-teal-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                Lengua y Literatura
            </button>
            <button id="btn-program4" onclick="showDetails('program4', this)" class="bg-orange-500 text-white font-semibold py-3 px-6 rounded-md shadow hover:bg-orange-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                Historia y Geografía
            </button>
            <button id="btn-program5" onclick="showDetails('program5', this)" class="bg-purple-600 text-white font-semibold py-3 px-6 rounded-md shadow hover:bg-purple-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                Ciencias Matemáticas
            </button>
            <button id="btn-program6" onclick="showDetails('program6', this)" class="bg-pink-500 text-white font-semibold py-3 px-6 rounded-md shadow hover:bg-pink-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                Ciencias Naturales
            </button>
        </div>


        <div id="details" class="hidden mt-8 p-4 rounded-lg">
            <h3 id="details-title" class="text-xl font-bold mb-4">Cargos Administrativos</h3>
            <div id="details-content" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"></div>
        </div>
    </div>



    <!-- Educación Inicial -->

    <div id="Edu_Inicial" class="hidden bg-red-100 p-8 rounded-lg">
        <h2 class="text-3xl font-bold text-red-600 text-center mb-6">Educación Inicial</h2>

        <p class="mt-2 text-gray-700 text-center">Contenido relacionado con la práctica preprofesional final y la organización de los cargos administrativos del programa de estudios de Educación Inicial.</p>

        <div class="mt-8">
            <h3 class="text-xl font-bold text-red-500 mb-4">Cargos Administrativos</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Director" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-red-600">Dr. Ana Torres</h4>
                        <p class="text-gray-600 mt-2">Directora del Programa de Educación Inicial</p>
                        <p class="text-gray-600 mt-2">Correo: ana.torres@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 911 111 111</p>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Coordinadora" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-red-600">Lic. Sofía Martínez</h4>
                        <p class="text-gray-600 mt-2">Coordinadora Académica</p>
                        <p class="text-gray-600 mt-2">Correo: sofia.martinez@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 922 222 222</p>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Asistente" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-red-600">Lic. Pedro García</h4>
                        <p class="text-gray-600 mt-2">Asistente de Coordinación</p>
                        <p class="text-gray-600 mt-2">Correo: pedro.garcia@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 933 333 333</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Ciencias de la Comunicación -->

    <div id="Cc_Comunicacion" class="hidden bg-yellow-100 p-8 rounded-lg">
        <h2 class="text-3xl font-bold text-yellow-600 text-center mb-6">Ciencias de la Comunicación</h2>

        <p class="mt-2 text-gray-700 text-center">Contenido relacionado con la práctica preprofesional final y la organización de los cargos administrativos del programa de Ciencias de la Comunicación.</p>

        <div class="mt-8">
            <h3 class="text-xl font-bold text-yellow-500 mb-4">Cargos Administrativos</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Director" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-yellow-600">Dr. Luis Ramírez</h4>
                        <p class="text-gray-600 mt-2">Director del Programa de Ciencias de la Comunicación</p>
                        <p class="text-gray-600 mt-2">Correo: luis.ramirez@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 944 444 444</p>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Coordinadora" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-yellow-600">Lic. Patricia Díaz</h4>
                        <p class="text-gray-600 mt-2">Coordinadora Académica</p>
                        <p class="text-gray-600 mt-2">Correo: patricia.diaz@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 955 555 555</p>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto Asistente" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-yellow-600">Lic. Andrés Muñoz</h4>
                        <p class="text-gray-600 mt-2">Asistente de Coordinación</p>
                        <p class="text-gray-600 mt-2">Correo: andres.munoz@universidad.edu</p>
                        <p class="text-gray-600 mt-2">Teléfono: +51 966 666 666</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>

<script>
    function showSection(sectionId) {
        // Ocultar el apartado adicional
        document.getElementById('extraContent').classList.add('hidden');

        // Ocultar todas las secciones
        const sections = document.querySelectorAll('#sections > div');
        sections.forEach(section => {
            section.classList.add('hidden');
        });
        // Mostrar la sección seleccionada
        document.getElementById(sectionId).classList.remove('hidden');
    }


    //CODIGO PARA EDUCACIÓN SECUNDARIA
    const programs = {
        program1: [{
                name: "Dr. Javier Soto",
                role: "Director",
                email: "javier.soto@universidad.edu",
                phone: "+51 999 111 111"
            },
            {
                name: "Lic. Elena Ruiz",
                role: "Coordinadora",
                email: "elena.ruiz@universidad.edu",
                phone: "+51 988 222 222"
            },
            {
                name: "Lic. Andrés Gómez",
                role: "Asistente",
                email: "andres.gomez@universidad.edu",
                phone: "+51 977 333 333"
            },
        ],
        program2: [{
                name: "Dr. Luis Vargas",
                role: "Director",
                email: "luis.vargas@universidad.edu",
                phone: "+51 911 444 444"
            },
            {
                name: "Lic. Patricia López",
                role: "Coordinadora",
                email: "patricia.lopez@universidad.edu",
                phone: "+51 922 555 555"
            },
            {
                name: "Lic. Sofia Castro",
                role: "Asistente",
                email: "sofia.castro@universidad.edu",
                phone: "+51 933 666 666"
            },
        ],
        program3: [{
                name: "Dr. Mario Jiménez",
                role: "Director",
                email: "mario.jimenez@universidad.edu",
                phone: "+51 944 777 777"
            },
            {
                name: "Lic. Ana Salinas",
                role: "Coordinadora",
                email: "ana.salinas@universidad.edu",
                phone: "+51 955 888 888"
            },
            {
                name: "Lic. Carlos Mendoza",
                role: "Asistente",
                email: "carlos.mendoza@universidad.edu",
                phone: "+51 966 999 999"
            },
        ],
        program4: [{
                name: "Dr. Samuel Torres",
                role: "Director",
                email: "samuel.torres@universidad.edu",
                phone: "+51 977 000 000"
            },
            {
                name: "Lic. Teresa Morales",
                role: "Coordinadora",
                email: "teresa.morales@universidad.edu",
                phone: "+51 988 111 111"
            },
            {
                name: "Lic. Fernando Ríos",
                role: "Asistente",
                email: "fernando.rios@universidad.edu",
                phone: "+51 999 222 222"
            },
        ],
        program5: [{
                name: "Dr. Miguel Álvarez",
                role: "Director",
                email: "miguel.alvarez@universidad.edu",
                phone: "+51 999 333 333"
            },
            {
                name: "Lic. Laura Villanueva",
                role: "Coordinadora",
                email: "laura.villanueva@universidad.edu",
                phone: "+51 988 444 444"
            },
            {
                name: "Lic. Pablo Fernández",
                role: "Asistente",
                email: "pablo.fernandez@universidad.edu",
                phone: "+51 977 555 555"
            },
        ],
        program6: [{
                name: "Dr. Ricardo Santos",
                role: "Director",
                email: "ricardo.santos@universidad.edu",
                phone: "+51 999 666 666"
            },
            {
                name: "Lic. Gabriela León",
                role: "Coordinadora",
                email: "gabriela.leon@universidad.edu",
                phone: "+51 999 777 777"
            },
            {
                name: "Lic. Mariana Córdova",
                role: "Asistente",
                email: "mariana.cordova@universidad.edu",
                phone: "+51 999 888 888"
            },
        ]
    };

    function showDetails(program, button) {
        // Limpiar cualquier color previo
        const detailsSection = document.getElementById('details');
        detailsSection.classList.remove('bg-red-100', 'bg-blue-100', 'bg-green-100', 'bg-yellow-100', 'bg-purple-100', 'bg-pink-100');

        detailsSection.classList.remove('hidden');
        document.getElementById('details-content').innerHTML = ''; // Limpiar contenido anterior

        // Establecer el color de fondo basado en el programa
        const colors = {
            program1: 'bg-red-100',
            program2: 'bg-blue-100',
            program3: 'bg-green-100',
            program4: 'bg-yellow-100',
            program5: 'bg-purple-100',
            program6: 'bg-pink-100'
        };

        detailsSection.classList.add(colors[program]);

        // Resaltar el botón activo
        const buttons = document.querySelectorAll('button');
        buttons.forEach(btn => {
            btn.classList.remove('font-bold', 'bg-opacity-70', 'border-2', 'border-opacity-50');
        });
        button.classList.add('font-bold', 'bg-opacity-70', 'border-2', 'border-black');

        programs[program].forEach(member => {
            const card = `
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Foto ${member.name}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-blue-600">${member.name}</h4>
                        <p class="text-gray-600 mt-2">${member.role}</p>
                        <p class="text-gray-600 mt-2">Correo: ${member.email}</p>
                        <p class="text-gray-600 mt-2">Teléfono: ${member.phone}</p>
                    </div>
                </div>
            `;
            document.getElementById('details-content').innerHTML += card;
        });
    }
</script>

@endsection