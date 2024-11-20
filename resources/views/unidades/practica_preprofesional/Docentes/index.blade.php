@extends('layouts.home')

@section('content')

<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center mb-4 text-blue-600">Docentes</h1>

    <nav class="flex justify-center mb-8 space-x-4">
        <a href="#" onclick="showPrograms('inicial')" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-blue-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Prac. Preprof. Inicial
        </a>
        <a href="#" onclick="showPrograms('intermedia')" class="bg-green-600 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-green-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Prac. Preprof. Intermedia
        </a>
        <a href="#" onclick="showPrograms('final')" class="bg-red-600 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-red-700 transition duration-300 transform hover:scale-105 hover:shadow-lg">
            Prac. Preprof. Final
        </a>
    </nav>

    <div id="extraContent" class="bg-gradient-to-r from-green-400 to-blue-500 p-6 rounded-lg mb-6 text-center text-white h-auto min-h-[300px]">
        <h2 class="text-2xl font-semibold mb-2">Bienvenido al Comité de Docentes</h2>
        <p class="mb-4">Aquí encontrarás información importante sobre los docentes, sus roles y cómo contactarlos para obtener apoyo académico.</p>
        <img src="https://png.pngtree.com/thumb_back/fw800/background/20220730/pngtree-welcome-banner-image_1440284.jpg" alt="Descripción de la imagen" class="mt-4 rounded-md shadow-lg mx-auto" />
    </div>

    <div id="programsSection" class="hidden text-center">
        <h2 id="programTitle" class="text-2xl font-semibold mb-4">Seleccione una opción</h2>
        <p id="programDescription" class="mb-4">Descripción de las áreas disponibles. Selecciona una para ver más detalles.</p>
        <div id="programButtons" class="grid grid-cols-3 gap-4 justify-center"></div>
    </div>

    <div id="cardsSection" class="hidden mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center"></div>
</div>

<script>
    // Datos de los docentes para cada área específica
    const programsData = {
        'inicial': {
            'Educación Primaria': [{
                    name: 'Juan Pérez',
                    role: 'Docente',
                    email: 'juan@ejemplo.com',
                    phone: '+51 988 888 888',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Pedro Jiménez',
                    role: 'Coordinador',
                    email: 'pedro.jimenez@ejemplo.com',
                    phone: '+51 988 999 999',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ana Martínez',
                    role: 'Docente',
                    email: 'ana.martinez@ejemplo.com',
                    phone: '+51 988 666 555',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Filosofía, Psicología y CcSs': [{
                    name: 'María López',
                    role: 'Docente',
                    email: 'maria@ejemplo.com',
                    phone: '+51 988 777 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'José Ruiz',
                    role: 'Docente',
                    email: 'jose.ruiz@ejemplo.com',
                    phone: '+51 988 555 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Cecilia Gómez',
                    role: 'Docente',
                    email: 'cecilia.gomez@ejemplo.com',
                    phone: '+51 988 222 444',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Idiomas': [{
                    name: 'Carlos Soto',
                    role: 'Docente',
                    email: 'carlos@ejemplo.com',
                    phone: '+51 988 555 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Lucía Mendoza',
                    role: 'Coordinadora',
                    email: 'lucia.mendoza@ejemplo.com',
                    phone: '+51 988 333 333',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ricardo Varela',
                    role: 'Docente',
                    email: 'ricardo.varela@ejemplo.com',
                    phone: '+51 988 444 333',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Lengua y Literatura': [{
                    name: 'Antonio Martínez',
                    role: 'Docente',
                    email: 'antonio.martinez@ejemplo.com',
                    phone: '+51 988 444 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Verónica Pérez',
                    role: 'Docente',
                    email: 'veronica.perez@ejemplo.com',
                    phone: '+51 988 111 333',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Francisco Ruiz',
                    role: 'Docente',
                    email: 'francisco.ruiz@ejemplo.com',
                    phone: '+51 988 333 555',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Historia y Geografía': [{
                    name: 'Ricardo Ramírez',
                    role: 'Docente',
                    email: 'ricardo@ejemplo.com',
                    phone: '+51 988 333 222',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Felipe García',
                    role: 'Docente',
                    email: 'felipe.garcia@ejemplo.com',
                    phone: '+51 988 444 666',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Patricia López',
                    role: 'Docente',
                    email: 'patricia.lopez@ejemplo.com',
                    phone: '+51 988 222 111',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias Matemáticas': [{
                    name: 'Eva Fernández',
                    role: 'Docente',
                    email: 'eva@ejemplo.com',
                    phone: '+51 988 123 456',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Andrés Martínez',
                    role: 'Docente',
                    email: 'andres.martinez@ejemplo.com',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Carla Silva',
                    role: 'Docente',
                    email: 'carla.silva@ejemplo.com',
                    phone: '+51 988 777 888',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias Naturales': [{
                    name: 'Raquel Fernández',
                    role: 'Docente',
                    email: 'raquel.fernandez@ejemplo.com',
                    phone: '+51 988 111 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Sofía Gómez',
                    role: 'Coordinadora',
                    email: 'sofia@ejemplo.com',
                    phone: '+51 988 222 222',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Martín López',
                    role: 'Docente',
                    email: 'martin.lopez@ejemplo.com',
                    phone: '+51 988 333 555',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Educación Inicial': [{
                    name: 'Carlos Bravo',
                    role: 'Docente',
                    email: 'carlos.bravo@ejemplo.com',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Diana Pérez',
                    role: 'Docente',
                    email: 'diana.perez@ejemplo.com',
                    phone: '+51 988 555 666',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Esteban Ríos',
                    role: 'Coordinador',
                    email: 'esteban.rios@ejemplo.com',
                    phone: '+51 988 222 333',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias de la Comunicación': [{
                    name: 'Mónica Rivas',
                    role: 'Docente',
                    email: 'monica.rivas@ejemplo.com',
                    phone: '+51 988 666 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Juan Pérez',
                    role: 'Docente',
                    email: 'juan.perez@ejemplo.com',
                    phone: '+51 988 111 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'María López',
                    role: 'Docente',
                    email: 'maria.lopez@ejemplo.com',
                    phone: '+51 988 333 555',
                    img: 'https://via.placeholder.com/150'
                }
            ]
        },
        'intermedia': {
            'Educación Primaria': [{
                    name: 'Carlos Pinto',
                    role: 'Docente',
                    email: 'carlos.pinto@ejemplo.com',
                    phone: '+51 988 777 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Elena Salas',
                    role: 'Coordinadora',
                    email: 'elena@ejemplo.com',
                    phone: '+51 988 666 666',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Martín González',
                    role: 'Docente',
                    email: 'martin.gonzalez@ejemplo.com',
                    phone: '+51 988 333 222',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Filosofía, Psicología y CcSs': [{
                    name: 'Pedro Jiménez',
                    role: 'Docente',
                    email: 'pedro@ejemplo.com',
                    phone: '+51 988 999 999',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Antonio Fernández',
                    role: 'Docente',
                    email: 'antonio.fernandez@ejemplo.com',
                    phone: '+51 988 111 000',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Sandra López',
                    role: 'Docente',
                    email: 'sandra.lopez@ejemplo.com',
                    phone: '+51 988 444 666',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Idiomas': [{
                    name: 'Raquel Fernández',
                    role: 'Docente',
                    email: 'raquel.fernandez@ejemplo.com',
                    phone: '+51 988 111 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Sofía Gómez',
                    role: 'Coordinadora',
                    email: 'sofia@ejemplo.com',
                    phone: '+51 988 222 222',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Martín López',
                    role: 'Docente',
                    email: 'martin.lopez@ejemplo.com',
                    phone: '+51 988 333 555',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Lengua y Literatura': [{
                    name: 'Laura Sánchez',
                    role: 'Docente',
                    email: 'laura.sanchez@ejemplo.com',
                    phone: '+51 988 888 888',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'José Díaz',
                    role: 'Docente',
                    email: 'jose.diaz@ejemplo.com',
                    phone: '+51 988 333 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Andrea Sánchez',
                    role: 'Docente',
                    email: 'andrea.sanchez@ejemplo.com',
                    phone: '+51 988 555 666',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Historia y Geografía': [{
                    name: 'Carlos Bravo',
                    role: 'Docente',
                    email: 'carlos.bravo@ejemplo.com',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Esteban Ríos',
                    role: 'Coordinador',
                    email: 'esteban.rios@ejemplo.com',
                    phone: '+51 988 222 333',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ana Gómez',
                    role: 'Docente',
                    email: 'ana.gomez@ejemplo.com',
                    phone: '+51 988 111 222',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias Matemáticas': [{
                    name: 'Sandra Pérez',
                    role: 'Docente',
                    email: 'sandra.perez@ejemplo.com',
                    phone: '+51 988 999 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ricardo García',
                    role: 'Docente',
                    email: 'ricardo.garcia@ejemplo.com',
                    phone: '+51 988 555 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Laura Pérez',
                    role: 'Docente',
                    email: 'laura.perez@ejemplo.com',
                    phone: '+51 988 333 555',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias Naturales': [{
                    name: 'Juan Sánchez',
                    role: 'Docente',
                    email: 'juan.sanchez@ejemplo.com',
                    phone: '+51 988 555 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Felipe Jiménez',
                    role: 'Docente',
                    email: 'felipe.jimenez@ejemplo.com',
                    phone: '+51 988 777 222',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Verónica García',
                    role: 'Docente',
                    email: 'veronica.garcia@ejemplo.com',
                    phone: '+51 988 888 333',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Esucación Inicial': [{
                    name: 'Ricardo Ramírez',
                    role: 'Docente',
                    email: 'ricardo@ejemplo.com',
                    phone: '+51 988 222 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Carlos Medina',
                    role: 'Docente',
                    email: 'carlos.medina@ejemplo.com',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Laura Sánchez',
                    role: 'Docente',
                    email: 'laura.sanchez@ejemplo.com',
                    phone: '+51 988 333 444',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias de la Comunicación': [{
                    name: 'Lucía Martínez',
                    role: 'Docente',
                    email: 'lucia.martinez@ejemplo.com',
                    phone: '+51 988 333 333',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Juan Pérez',
                    role: 'Docente',
                    email: 'juan.perez@ejemplo.com',
                    phone: '+51 988 444 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ana Gómez',
                    role: 'Docente',
                    email: 'ana.gomez@ejemplo.com',
                    phone: '+51 988 555 888',
                    img: 'https://via.placeholder.com/150'
                }
            ]
        },
        'final': {
            'Educación Primaria': [{
                    name: 'Ricardo Torres',
                    role: 'Docente',
                    email: 'ricardo.torres@ejemplo.com',
                    phone: '+51 988 333 222',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Martín Romero',
                    role: 'Coordinador',
                    email: 'martin.romero@ejemplo.com',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Verónica Díaz',
                    role: 'Docente',
                    email: 'veronica.diaz@ejemplo.com',
                    phone: '+51 988 777 888',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Filosofía, Psicología y CcSs': [{
                    name: 'Dra. liz Maribel García Salirrosas',
                    role: 'Docente',
                    email: 'lgarcias@unitru.edu.pe',
                    phone: '+51 988 111 000',
                    img: "{{asset('imagenes/unidades/practicaPreprofesional/docentes/final/Filosofia-psicologia-y-ccss/DraLizMaribelGarciaSalirrosas.jpg')}}"
                },
                {
                    name: 'Flor del Rosario Diaz Diaz',
                    role: 'Docente',
                    email: 'fdiazd@unitru.edu.pe',
                    phone: '+51 988 222 333',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Loreley Vasquez Correa',
                    role: 'Docente',
                    email: 'lvasquez@unitru.edu.pe',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Idiomas': [{
                    name: 'Carlos Ruiz',
                    role: 'Docente',
                    email: 'carlos.ruiz@ejemplo.com',
                    phone: '+51 988 555 666',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'José López',
                    role: 'Coordinador',
                    email: 'jose.lopez@ejemplo.com',
                    phone: '+51 988 666 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ana García',
                    role: 'Docente',
                    email: 'ana.garcia@ejemplo.com',
                    phone: '+51 988 333 222',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Lengua y Literatura': [{
                    name: 'Carlos Mendoza',
                    role: 'Docente',
                    email: 'carlos.mendoza@ejemplo.com',
                    phone: '+51 988 444 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Patricia Jiménez',
                    role: 'Docente',
                    email: 'patricia.jimenez@ejemplo.com',
                    phone: '+51 988 555 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Javier Torres',
                    role: 'Docente',
                    email: 'javier.torres@ejemplo.com',
                    phone: '+51 988 777 333',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Historia y Geografía': [{
                    name: 'Carlos Ramírez',
                    role: 'Docente',
                    email: 'carlos.ramirez@ejemplo.com',
                    phone: '+51 988 888 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Luz Martínez',
                    role: 'Docente',
                    email: 'luz.martinez@ejemplo.com',
                    phone: '+51 988 333 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ana Ramos',
                    role: 'Coordinadora',
                    email: 'ana.ramos@ejemplo.com',
                    phone: '+51 988 444 999',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias Matemáticas': [{
                    name: 'Ricardo Pérez',
                    role: 'Docente',
                    email: 'ricardo.perez@ejemplo.com',
                    phone: '+51 988 666 888',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'César Rodríguez',
                    role: 'Docente',
                    email: 'cesar.rodriguez@ejemplo.com',
                    phone: '+51 988 777 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Sandra Díaz',
                    role: 'Docente',
                    email: 'sandra.diaz@ejemplo.com',
                    phone: '+51 988 111 333',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias Naturales': [{
                    name: 'María González',
                    role: 'Docente',
                    email: 'maria.gonzalez@ejemplo.com',
                    phone: '+51 988 222 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Juan Alberto',
                    role: 'Docente',
                    email: 'juan.alberto@ejemplo.com',
                    phone: '+51 988 333 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Felipe Ramírez',
                    role: 'Docente',
                    email: 'felipe.ramirez@ejemplo.com',
                    phone: '+51 988 555 777',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Educación Inicial': [{
                    name: 'Pedro Gómez',
                    role: 'Docente',
                    email: 'pedro.gomez@ejemplo.com',
                    phone: '+51 988 444 555',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ana Salazar',
                    role: 'Docente',
                    email: 'ana.salazar@ejemplo.com',
                    phone: '+51 988 222 444',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Ricardo López',
                    role: 'Docente',
                    email: 'ricardo.lopez@ejemplo.com',
                    phone: '+51 988 555 333',
                    img: 'https://via.placeholder.com/150'
                }
            ],
            'Ciencias de la Comunicación': [{
                    name: 'Elena Mendoza',
                    role: 'Docente',
                    email: 'elena.mendoza@ejemplo.com',
                    phone: '+51 988 333 777',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Luis Fernández',
                    role: 'Docente',
                    email: 'luis.fernandez@ejemplo.com',
                    phone: '+51 988 222 111',
                    img: 'https://via.placeholder.com/150'
                },
                {
                    name: 'Isabel Torres',
                    role: 'Docente',
                    email: 'isabel.torres@ejemplo.com',
                    phone: '+51 988 444 999',
                    img: 'https://via.placeholder.com/150'
                }
            ]
        }
    };

    //
    function showPrograms(area) {
        // Ocultar la sección extraContent y cardsSection antes de mostrar la nueva información
        document.getElementById('extraContent').style.display = 'none';
        document.getElementById('cardsSection').classList.add('hidden'); // Aseguramos que cardsSection esté oculto
        document.getElementById('programsSection').classList.remove('hidden'); // Mostrar la sección de programas

        let programTitle = '';
        let programDescription = '';
        let bgColor = '';

        // Definir el título, descripción y color de fondo según el área seleccionada
        if (area === 'inicial') {
            programTitle = 'Prac. Preprof. Inicial';
            programDescription = 'Aquí encontrarás los programas relacionados con la educación inicial y el comienzo de la formación docente.';
            bgColor = 'bg-blue-500';
        } else if (area === 'intermedia') {
            programTitle = 'Prac. Preprof. Intermedia';
            programDescription = 'Programas dirigidos a la formación docente intermedia, cubriendo diversas disciplinas académicas.';
            bgColor = 'bg-green-500';
        } else if (area === 'final') {
            programTitle = 'Prac. Preprof. Final';
            programDescription = 'Programas para la formación avanzada, enfocados en las últimas etapas de la educación docente.';
            bgColor = 'bg-red-500';
        }

        // Actualizar el contenido de título y descripción del programa
        document.getElementById('programTitle').innerText = programTitle;
        document.getElementById('programDescription').innerText = programDescription;
        document.getElementById('programsSection').className = `text-center p-6 rounded-lg mb-6 ${bgColor} bg-opacity-75 text-white`;

        // Preparar los botones dinámicamente para cada programa
        const buttonNames = Object.keys(programsData[area]).map((program, index) => {
            const colors = [
                'bg-purple-500', 'bg-teal-500', 'bg-orange-500',
                'bg-pink-500', 'bg-indigo-500', 'bg-yellow-500',
                'bg-gray-500', 'bg-blue-500', 'bg-red-500'
            ];

            return {
                name: program,
                color: colors[index] || 'bg-gray-500'
            };
        });

        const programButtons = document.getElementById('programButtons');
        programButtons.innerHTML = ''; // Limpiar botones previos

        // Crear el estilo para los botones seleccionados
        const style = document.createElement('style');
        style.innerHTML = `
    .selected-button {
        border: 2px solid black !important; /* Aplica borde negro */
        outline: none !important;          /* Elimina el borde de enfoque predeterminado */
    }`;
        document.head.appendChild(style); // Añadir estilo al encabezado

        // Crear los botones dinámicos
        buttonNames.forEach(button => {
            const btn = document.createElement('button');
            btn.className = `text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-opacity-80 transition duration-300 transform hover:scale-105 hover:shadow-lg ${button.color}`;
            btn.innerText = button.name;

            // Evento de selección de botón
            btn.onclick = () => {
                // Eliminar la clase 'selected-button' de todos los botones
                const allButtons = programButtons.querySelectorAll('button');
                allButtons.forEach(b => b.classList.remove('selected-button'));

                // Agregar la clase al botón seleccionado
                btn.classList.add('selected-button');

                // Llamar a la función showCards con los parámetros correspondientes
                showCards(area, button.name);
            };

            programButtons.appendChild(btn); // Añadir el botón al contenedor
        });
    }

    //

    // Mostrar las personas de acuerdo al programa seleccionado
    function showCards(area, programName) {
        document.getElementById('cardsSection').classList.remove('hidden');
        const cardsSection = document.getElementById('cardsSection');
        cardsSection.innerHTML = '';

        const availablePeople = programsData[area][programName];

        // Asegurarse de mostrar solo las personas para la selección actual
        availablePeople.forEach(person => {
            const card = document.createElement('div');
            card.className = `bg-white p-4 rounded-lg shadow-md ${getColorForArea(area)}`;

            const img = document.createElement('img');
            img.src = person.img;
            img.alt = person.name;
            img.className = 'w-32 h-32 rounded-full mx-auto mb-4';

            const name = document.createElement('h3');
            name.className = 'text-xl font-semibold text-center mb-2';
            name.innerText = person.name;

            const role = document.createElement('p');
            role.className = 'text-center text-gray-600 mb-2';
            role.innerText = person.role;

            const email = document.createElement('p');
            email.className = 'text-center text-blue-500 mb-2';
            email.innerText = `Email: ${person.email}`;

            const phone = document.createElement('p');
            phone.className = 'text-center text-gray-500';
            phone.innerText = `Tel: ${person.phone}`;

            card.appendChild(img);
            card.appendChild(name);
            card.appendChild(role);
            card.appendChild(email);
            card.appendChild(phone);

            cardsSection.appendChild(card);
        });
    }

    function getColorForArea(area) {
        switch (area) {
            case 'inicial':
                return 'bg-blue-100';
            case 'intermedia':
                return 'bg-green-100';
            case 'final':
                return 'bg-red-100';
            default:
                return 'bg-gray-100';
        }
    }
</script>

@endsection