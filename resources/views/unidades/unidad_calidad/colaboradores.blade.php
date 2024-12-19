@extends('layouts.home')

@section('content')


<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Colaboradores</h1>

    <!-- Ajuste de columnas usando proporciones 1/4 y 3/4 -->
    <div class="grid grid-cols-4 gap-6">
        <!-- Columna izquierda ocupando 1/4 del espacio total - Esta se mantiene fija -->
        <div class="col-span-4 lg:col-span-1 lg:sticky top-0">
            <!-- Botón de Educación Inicial con círculo interactivo -->
            <div class="flex flex-col gap-4 bg-blue-200 p-4 rounded-lg shadow-lg mb-6">
                <!-- Botón Educación Inicial -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Educación Inicial</span>
                    <button onclick="toggleOption('inicial')" id="toggleButton" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>
                
                <!-- Botón Educación Primaria -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Educación Primaria</span>
                    <button onclick="toggleOption('primaria')" id="toggleButton2" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Filosofia, Psicologia y CCSS -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Filosofia Psicologia y CCSS</span>
                    <button onclick="toggleOption('Filosofia Psicologia y CCSS')" id="toggleButton3" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Ciencias Matemáticas -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Ciencias Matemáticas</span>
                    <button onclick="toggleOption('Ciencias Matemáticas')" id="toggleButton4" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Idiomas -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Idiomas</span>
                    <button onclick="toggleOption('Idiomas')" id="toggleButton5" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Lengua y literatura -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Lengua y literatura</span>
                    <button onclick="toggleOption('Lengua y literatura')" id="toggleButton6" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Historia y Geografia -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Historia y Geografia</span>
                    <button onclick="toggleOption('Historia y Geografia')" id="toggleButton7" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Ciencias Naturales -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Ciencias Naturales</span>
                    <button onclick="toggleOption('Ciencias Naturales')" id="toggleButton8" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>

                <!-- Botón Ciencias de la comunicación -->
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-blue-900">Ciencias de la comunicación</span>
                    <button onclick="toggleOption('Ciencias de la comunicación')" id="toggleButton9" class="w-10 h-10 bg-blue-300 rounded-full text-center text-sm font-bold text-blue-900 hover:bg-blue-400 border border-black">
                        ✔
                    </button>
                </div>


            </div>
        </div>

        <!-- Columna derecha ocupando 3/4 del espacio total - Esta tendrá scroll -->
        <div class="col-span-4 lg:col-span-3 h-[calc(100vh-200px)] overflow-y-auto mx-auto">
            <!-- Contenedor para todas las tarjetas -->
            <div class="grid grid-cols-1 gap-6">
                <!-- Tarjetas de Colaboradores de educación inicial -->
                <div class="educacion-inicial grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Carla Camacho</h2>
                        <p class="text-gray-700 text-center">La vida es bella</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Carla Camacho" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Yackeline Silva</h2>
                        <p class="text-gray-700 text-center">Mejorar cada día</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Yackeline Silva" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Maria Sanchez</h2>
                        <p class="text-gray-700 text-center">El futuro es hoy</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Maria Sanchez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Hilda Jara Leon</h2>
                        <p class="text-gray-700 text-center">Con la mente siempre en alto</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Hilda Jara Leon" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Juliana Rebaza</h2>
                        <p class="text-gray-700 text-center">Mi hermoso futuro</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Juliana Rebaza" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Liliana Palonio</h2>
                        <p class="text-gray-700 text-center">Seguir adelante es la mejor defensa y ataque</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Liliana Palonio" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Karem Arce Gutierrez</h2>
                        <p class="text-gray-700 text-center">La educacion y yo formamos el futuro</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Karem Arce Gutierrez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Hilda Jara León</h2>
                        <p class="text-gray-700 text-center">Quien soy y a donde voy</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Hilda Jara León" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de educación primaria -->
                <div class="educacion-primaria hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dra. Olga Estela Mendoza León</h2>
                        <p class="text-gray-700 text-center">Licenciada en educación Primaria, Doctora en Educación</p>
                        <img src="/colaboradores/OLGA ESTELA MENDOZA LEÓN.jpg" alt="Imagen de Olga Estela Mendoza León" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dr. Manuel Quipuscoa Silvestre</h2>
                        <p class="text-gray-700 text-center">Maestría en Educación, Doctor en Ciencias de la Educación</p>
                        <img src="/colaboradores/MANUEL QUIPUSCOA SILVESTRE.jpg" alt="Imagen de Olga Estela Mendoza León" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dra. Magna Ruth Meregildo Gómez</h2>
                        <p class="text-gray-700 text-center">Licenciada en Educación Primaria y Psicología, Doctora en Ciencias de la Educación</p>
                        <img src="/colaboradores/MAGNA RUTH MEREGILDO GOMÉZ.jpg" alt="Imagen de Olga Estela Mendoza León" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dra. Cecilia del Pilar Vásquez Mondragón</h2>
                        <p class="text-gray-700 text-center">Licenciada en Educación Primaria, Doctora en Educación</p>
                        <img src="/colaboradores/CECILIA DEL PILAR VÁSQUEZ MONDRAGÓN.jpg" alt="Imagen de Olga Estela Mendoza León" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dr. Anthony Joel Gonzales Pacheco</h2>
                        <p class="text-gray-700 text-center">Licenciado en Educación Primaria, Doctorado en Educación</p>
                        <img src="/colaboradores/ANTHONY JOEL GONZALES PACHECO.jpg" alt="Imagen de Olga Estela Mendoza León" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dra. Jessica Isabel Alva Chávez</h2>
                        <p class="text-gray-700 text-center">Licenciada en Educación Primaria, Doctora en Ciencias de la Educación</p>
                        <img src="/colaboradores/JESSICA ISABEL ALVA CHÁVEZ.jpg" alt="Imagen de Olga Estela Mendoza León" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de Filosofia, Psicologia y CCSS -->
                <div class="educacion-filosofia-psicologia-y-ccss hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Carlos Lázaro</h2>
                        <p class="text-gray-700 text-center">La educacion es el futuro</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Carlos Lázaro" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Iris Vásquez</h2>
                        <p class="text-gray-700 text-center">Como mejorar bien</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Iris Vásquez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Walter Jampa</h2>
                        <p class="text-gray-700 text-center">Dandolo todo para triunfar</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Walter Jampa" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Violeta Diaz</h2>
                        <p class="text-gray-700 text-center">Nunca rendirse es lo que te saca adelante</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Violeta Diaz" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Elena Miranda</h2>
                        <p class="text-gray-700 text-center">El exito esta en el fracaso</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Elena Miranda" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Liz Maribel Garcia Salirrosas</h2>
                        <p class="text-gray-700 text-center">La calidad se desarrolla</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Walter Jampa" class="w-full h-auto mt-4 rounded">
                    </div>

                </div>

                <!-- Tarjetas de Colaboradores de Ciencias Matemáticas -->
                <div class="educacion-ciencias-matemáticas hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Liliana Marcelo Mendoza Montoya</h2>
                        <p class="text-gray-700 text-center">Dando lo mejor cada dia</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Liliana Marcelo Mendoza Montoya" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Teresa Ortiz Távara</h2>
                        <p class="text-gray-700 text-center">Resultados, esperate a futuro</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Teresa Ortiz Távara" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Elizabeth Rafael Sánchez</h2>
                        <p class="text-gray-700 text-center">Arriba laos numeros</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Rafael Sánchez" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de Idiomas -->
                <div class="educacion-idiomas hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Rosa Anticona Sandoval</h2>
                        <p class="text-gray-700 text-center">El estudio lleva un esfuerzo mental grande</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Rosa Anticona Sandoval" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Carlos Calderón Calderón</h2>
                        <p class="text-gray-700 text-center">Los estudiantes deben resolver problemas</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Carlos Calderón Calderón" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Maruzzela Beltrán Centurión</h2>
                        <p class="text-gray-700 text-center">Seguir adelante siempre proyectandose</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Maruzzela Beltrán Centurión" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Erika Aguilar Carrera</h2>
                        <p class="text-gray-700 text-center">Por un mejor futuro la enseñanza es lo que vale</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Erika Aguilar Carrera" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Tatiana Calderón Rodriguez</h2>
                        <p class="text-gray-700 text-center">Los estudiantes deben disfrutar de un ambiente favorable</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Tatiana Calderón Rodriguez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Silvia Veronica Rodriguez Sanchez</h2>
                        <p class="text-gray-700 text-center">La educacion es la clave del éxito</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Silvia Veronica Rodriguez Sanchez" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de Lengua y Literatura -->
                <div class="educacion-lengua-y-literatura hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Cecilio Venegas Piminchumo</h2>
                        <p class="text-gray-700 text-center">A por un mejor futuro</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Silvia Veronica Rodriguez Sanchez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Julia Castañeda Azavache</h2>
                        <p class="text-gray-700 text-center">La educacion es la clave del triunfo</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Julia Castañeda Azavache" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Maribel Pizarro</h2>
                        <p class="text-gray-700 text-center">La educacion es la resiliencia de la vida</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Maribel Pizarro" class="w-full h-auto mt-4 rounded">
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Zorán Herrera Mejia</h2>
                        <p class="text-gray-700 text-center">Emocionate que aprender es parte de la vida</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Zorán Herrera Mejia" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Elsa Tatiana Chavez Gutierrez</h2>
                        <p class="text-gray-700 text-center">Caminando a un mejor educacion</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Elsa Tatiana Chavez Gutierrez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Viviana Villoslada</h2>
                        <p class="text-gray-700 text-center">Profesional de la educacion</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Viviana Villoslada" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de Historia y Geografia -->
                <div class="educacion-historia-y-geografia hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Ángel la Cruz Torres</h2>
                        <p class="text-gray-700 text-center">No dejes para mañana lo que puedes enseñar hoy</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Ángel la Cruz Torres" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Rider Vergara de la Cruz</h2>
                        <p class="text-gray-700 text-center">Atado a las riendas del saber</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Rider Vergara de la Cruz" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Max Orbegoso Chamorro</h2>
                        <p class="text-gray-700 text-center">Caminando en conocimiento</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Max Orbegoso Chamorro" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Emilio Fernandez salas</h2>
                        <p class="text-gray-700 text-center">Educarte es mejorar tu estilo de vida</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Emilio Fernandez salas" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Edilberto Castro Ponce</h2>
                        <p class="text-gray-700 text-center">La historia es reeducación</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Edilberto Castro Ponce" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Max Orbegoso Chamorro</h2>
                        <p class="text-gray-700 text-center">Rebobinando el conocimiento</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Max Orbegoso Chamorro" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de Ciencias Naturales -->
                <div class="educacion-ciencias-naturales hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Incognito</h2>
                        <p class="text-gray-700 text-center">Frase Oculta</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Max Orbegoso Chamorro" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Incognito</h2>
                        <p class="text-gray-700 text-center">Frase Oculta</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Max Orbegoso Chamorro" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Incognito</h2>
                        <p class="text-gray-700 text-center">Frase Oculta</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Max Orbegoso Chamorro" class="w-full h-auto mt-4 rounded">
                    </div>
                </div>

                <!-- Tarjetas de Colaboradores de Ciencias de la comunicación -->
                <div class="educacion-ciencias-de-la-comunicación hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Dra. María Luisa Bazán Guzmán</h2>
                        <p class="text-gray-700 text-center">Presidente de calidad de ciencias de la comunicación</p>
                        <img src="/colaboradores/Dra. María Luisa Bazán Guzmán.jpg" alt="Imagen de Maria Luisa Bazán Guzmán" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Pepe Alexánder Hidalgo Jiménez</h2>
                        <p class="text-gray-700 text-center">Comunicarse bien implica conocerse bien</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Pepe Alexánder Hidalgo Jiménez" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Alfieri Díaz Arias</h2>
                        <p class="text-gray-700 text-center">La buena comunicación resuelve conflictos</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Alfieri Díaz Arias" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Anthony Paolo Carranza Mostacero</h2>
                        <p class="text-gray-700 text-center">Se un exelente profesor para tus alumnos</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Anthony Paolo Carranza Mostacero" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Yanet Jacqueline Varas Castillo</h2>
                        <p class="text-gray-700 text-center">Enseña como te gustaria que te enseñen a ti</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Yanet Jacqueline Varas Castillo" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Narso Alberto Sáez Valle</h2>
                        <p class="text-gray-700 text-center">Dar una buena presentacion es comunicarse bien</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Narso Alberto Sáez Valle" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Miguel Álvarez Carrasco</h2>
                        <p class="text-gray-700 text-center">Velando por una mejor educación</p>
                        <img src="/colaboradores/HOMBRE DEFAULT.jpg" alt="Imagen de Miguel Álvarez Carrasco" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Martha Lamela Rios</h2>
                        <p class="text-gray-700 text-center">El futuro es incierto el pasado se conoce y se aprende</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Martha Lamela Rios" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Karinn Jacquelin Chávez Días</h2>
                        <p class="text-gray-700 text-center">Vamos a aprender mas</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Karinn Jacquelin Chávez Días" class="w-full h-auto mt-4 rounded">
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <h2 class="text-xl font-semibold text-center">Jara Cabanillas</h2>
                        <p class="text-gray-700 text-center">El entendimiento depende del estudio</p>
                        <img src="/colaboradores/MUJER DEFAULT.jpg" alt="Imagen de Jara Cabanillas" class="w-full h-auto mt-4 rounded">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Variables globales para controlar las secciones - todas inicializadas en true
    const opciones = {
        'inicial': true,
        'primaria': true,
        'Filosofia Psicologia y CCSS': true,
        'Ciencias Matemáticas': true,
        'Idiomas': true,
        'Lengua y literatura': true,
        'Historia y Geografia': true,
        'Ciencias Naturales': true,
        'Ciencias de la comunicación': true
    };

    // Mapeo de opciones a IDs de botones
    const botonesIds = {
        'inicial': 'toggleButton',
        'primaria': 'toggleButton2',
        'Filosofia Psicologia y CCSS': 'toggleButton3',
        'Ciencias Matemáticas': 'toggleButton4',
        'Idiomas': 'toggleButton5',
        'Lengua y literatura': 'toggleButton6',
        'Historia y Geografia': 'toggleButton7',
        'Ciencias Naturales': 'toggleButton8',
        'Ciencias de la comunicación': 'toggleButton9'
    };

    // Función para mostrar u ocultar las opciones
    function toggleOption(opcion) {
        opciones[opcion] = !opciones[opcion]; // Cambia el estado de la opción
        
        // Actualiza el botón
        document.getElementById(botonesIds[opcion]).textContent = opciones[opcion] ? "✔" : " ";
        
        // Actualiza la visibilidad de las tarjetas
        const seccionClase = `educacion-${opcion.toLowerCase().replace(/\s+/g, '-')}`;
        const seccion = document.querySelector(`.${seccionClase}`);
        if (seccion) {
            seccion.classList.toggle('hidden', !opciones[opcion]);
        }

        // Verifica que al menos una opción esté activa
        const algunaOpcionActiva = Object.values(opciones).some(valor => valor);
        if (!algunaOpcionActiva) {
            opciones[opcion] = true; // Mantiene la opción actual activa
            document.getElementById(botonesIds[opcion]).textContent = "✔";
            const seccion = document.querySelector(`.${seccionClase}`);
            if (seccion) {
                seccion.classList.remove('hidden');
            }
        }
    }

    // Inicializa la visibilidad al cargar la página
    window.onload = function() {
        updateVisibility();
    }

    // Función para actualizar la visibilidad al cargar
    function updateVisibility() {
        Object.keys(opciones).forEach(opcion => {
            const seccionClase = `educacion-${opcion.toLowerCase().replace(/\s+/g, '-')}`;
            const seccion = document.querySelector(`.${seccionClase}`);
            if (seccion) {
                seccion.classList.toggle('hidden', !opciones[opcion]);
            }
            document.getElementById(botonesIds[opcion]).textContent = opciones[opcion] ? "✔" : " ";
        });
    }
</script>




@endsection