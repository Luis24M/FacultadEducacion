@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación Secundaria</title>
    <style>
        /* Personalización para las esquinas decorativas */
        .decorated-button {
            position: relative;
            padding-right: 2rem;
            /* Espacio para la esquina decorativa */
        }

        .decorated-button::after {
            content: '';
            position: absolute;
            bottom: 0.5rem;
            right: 0.5rem;
            width: 8px;
            height: 8px;
            border-right: 2px solid white;
            border-bottom: 2px solid white;
        }

        .active-button {
            background-color: #f97316;
            color: white;
        }

        .timeline ul li {
            list-style-type: none;
            position: relative;
            width: 6px;
            margin: 0 auto;
            padding-top: 50px;
            background: #FFB703;
        }

        .timeline ul li::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: inherit;
        }

        .timeline ul li div {
            position: relative;
            bottom: 0;
            width: 400px;
            padding: 15px;
            background: #03045e;
        }

        .timeline ul li div::before {
            content: '';
            position: absolute;
            bottom: 7px;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .timeline ul li:nth-child(odd) div {
            left: 45px;
        }

        .timeline ul li:nth-child(odd) div::before {
            left: -15px;
            border-width: 8px 16px 8px 0;
            border-color: transparent #03045e transparent transparent;
        }

        .timeline ul li:nth-child(even) div {
            left: -439px;
        }

        .timeline ul li:nth-child(even) div::before {
            right: -15px;
            border-width: 8px 0 8px 16px;
            border-color: transparent transparent transparent #03045e;
        }

        .timeline ul li::after {
            background: #fff;
            transition: background .5s ease-in-out;
        }

        .timeline ul li.in-view::after {
            background: #03045e;
        }

        .timeline ul li div {
            visibility: hidden;
            opacity: 0;
            transition: all .5s ease-in-out;
        }

        .timeline ul li:nth-child(odd) div {
            transform: translate3d(200px, 0, 0);
        }

        .timeline ul li:nth-child(even) div {
            transform: translate3d(-200px, 0, 0);
        }

        .timeline ul li.in-view div {
            transform: none;
            visibility: visible;
            opacity: 1;
        }

        @media screen and (max-width: 900px) {
            .timeline ul li div {
                width: 250px;
            }

            .timeline ul li:nth-child(even) div {
                left: -289px;
                /*250+45-6*/
            }
        }

        @media screen and (max-width: 600px) {
            .timeline ul li {
                margin-left: 20px;
            }

            .timeline ul li div {
                width: calc(100vw - 91px);
            }

            .timeline ul li:nth-child(even) div {
                left: 45px;
            }

            .timeline ul li:nth-child(even) div::before {
                left: -15px;
                border-width: 8px 16px 8px 0;
                border-color: transparent #6A00FF transparent transparent;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header Image -->
    <!--<div class="flex w-full bg-[#03045e] h-64 bg-cover bg-center text-base text-center items-center justify-center" style="background-blue">
        <h1 class="text-white text-center text-5xl"><b>Escuela Profesional de Educación Secundaria</b></h1>
    </div>-->

    <h1 class="text-3xl md:text-5xl text-[#FFFFFF] bg-[#1976D2] w-full p-4 font-bold">Escuela Profesional de Educación Secundaria</h1>


    <!---->
    <section class="datos order-first max-w-6xl px-5 md:px-20 mx-auto my-6 flex flex-col lg:flex-row justify-center gap-6 ">

        <!-- Primera columna: Bienvenida -->
        <div class="bg-[#D1E8FF] p-6 rounded-lg shadow-lg text-center flex flex-col justify-center lg:w-1/3">
            <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
            <h3 class="text-xl font-bold text-[#8B0000] mb-2">Bienvenida</h3>
            <p class="">"Bienvenidos a la Escuela Profesional de Educación Secundaria, un espacio donde la
            excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."</p>
        </div>

        <div class="flex flex-col justify-between lg:w-1/3">
            <img src="{{ asset('imagenes/index/director-secundaria.png')}}" class="rounded-t-lg lg:h-2/4 w-full " alt=""><!-- Icono personalizado -->
            <div class="bg-[#FFF4E1] h-1/2 p-6 rounded-b-lg shadow-lg text-center">
                <h3 class="text-xl font-bold text-[#8B0000] mb-2">Dr. Carlos Oswaldo Caballero Alayo</h3>
                <p class="text-black">Director de la Escuela Profesional de Secundaria</p>
                <a href="mailto:inicial@unitru.edu.pe"
                    class="text-md font-bold text-black mb-2 text-wrap">secundaria@unitru.edu.pe</a>
            </div>
        </div>

        <div class="flex flex-col lg:w-1/3">
            <img src="{{ asset('imagenes/index/asistente-secundaria.png')}}" class="rounded-t-lg lg lg:h-2/4 w-full" alt=""> <!-- Icono personalizado -->
            <div class="bg-[#D1E8FF] h-1/2 p-6 rounded-b-lg shadow-lg text-center">
                <h3 class="text-xl font-bold text-[#8B0000] mb-2">Sra. Mercedes Pilar Chuica Flores</h3>
                <p class="">Asistente administrativa</p>
            </div>
        </div>
    </section>
    <!---->


    <div class="container mx-auto p-8 selection:bg-fuchsia-300 selection:text-fuchsia-900">
        <div class="text-center py-16 bg-white">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Educación Secundaria</h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>

            <p class="text-black max-w-4xl mx-auto mb-16 leading-relaxed text-base">
                Desde hace algunos años, el Ministerio de Educación emprendió la tarea de actualizar el currículo para responder a las demandas de la sociedad del siglo XXI. En este
                marco, se realizaron consultas a diversos actores, en diferentes mesas de trabajo y de forma descentralizada. Estos aportes permitieron que el Currículo Nacional vaya
                tomando forma de manera progresiva y se convierta en un reflejo del deseo de todos los peruanos para que la educación contribuya a la formación de ciudadanos activos y
                comprometidos con el desarrollo sostenible de su país.
            </p>

            <!-- linea de tiempo -->
            <section class="py-8">
                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">
                        Nuestra Historia
                    </h2>
                    <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                    <p class="text-black max-w-4xl mx-auto mb-10 leading-relaxed text-base">
                        La Universidad Nacional de Trujillo (UNT) es una de las instituciones educativas más importantes del norte de Perú. Fundada en 1901, ha sido clave en la formación de
                        profesionales a lo largo de más de un siglo. Esta línea de tiempo destaca los hitos más relevantes de su historia, desde la creación de sus primeras facultades hasta
                        la expansión de su oferta académica. A través de estos momentos, se refleja el compromiso de la UNT con la educación y su papel en el desarrollo cultural y social de
                        la región.
                    </p>
                </div>
            </section>

            <!---
            <section class="timeline text-white leading-relaxed mb-8 text-base">
                <ul>
                    <li></li>
                    <li>
                        <div>
                            <time>1901:</time>
                            Según la Ley de Instrucción, la UNT se organiza en tres facultades: Letras, Jurisprudencia, y Ciencias Políticas y Administrativas.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>1909:</time>
                            El rector Dr. José María Checa plantea las primeras ideas sobre estudios pedagógicos.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>1911:</time>
                            En su memoria, el Dr. Checa subraya la necesidad de una cátedra de Pedagogía para mejorar la enseñanza.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>1923:</time>
                            El rector Dr. Carlos E. Uceda Meza también impulsa ideas pedagógicas, aunque no prosperan.
                        </div>
                    </li>
                    
                    <div id="hidden-timeline" class="hidden text-base">
                        <li>
                            <div>
                                <time>27 de junio de 1936:</time>
                                El Consejo Universitario aprueba el Plan para organizar la Sección Pedagógica, bajo la
                                presidencia del rector Dr. Ignacio Meave Seminario. Este evento marca el nacimiento de la formación de profesores en la UNT.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>1934-1935:</time>
                                El Dr. Julio Eduardo Mannucci Finochetti y el Dr. César Alfaro Larios dictan cursos de extensión al magisterio.
                            </div>
                        </li>

                        <li>
                            <div>
                                <time>1946-1948:</time>
                                Se crea la Facultad de Letras y Educación bajo el rectorado del Dr. Antenor Orrego Espinoza. El primer decano fue el Dr. Ramiro Ñique Espíritu.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>14 de mayo de 1946 a 30 de junio de 1948:</time>
                                Dr. Ramiro Ñique Espíritu ejerce como decano.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>18 de diciembre de 1983:</time>
                                Se promulga la Ley Universitaria Nº 23733, que reestructura la UNT, y se establece la Facultad de Educación como una de las 8 facultades.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>7 de noviembre de 1984:</time>
                                El Dr. Eduardo Quirós Sánchez asume como decano en la nueva etapa de la Facultad de Educación.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>1994:</time>
                                Se modifica el estatuto y la facultad pasa a llamarse Facultad de Educación y Ciencias de la Comunicación, con nuevas escuelas académicas.
                            </div>
                        </li>

                        <li>
                            <div>
                                <time>28 de febrero de 2011:</time>
                                Dr. Alberto Moya Obeso asume como decano mediante resolución rectoral Nº 0217-2011/UNT.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2011:</time>
                                El Lic. Juan L. Vásquez Sánchez es encargado como Profesor Secretario mediante la resolución rectoral Nº 0374-2011/UNT.
                            </div>
                        </li>
                    </div>
                    <div class="text-center mt-4">
                        <button id="show-more" class="mt-4 px-4 py-2 bg-[#FFB703] text-white text-base rounded-lg shadow-lg hover:bg-[#FFB703]">
                            Leer más</button>

                        <button id="show-less" class="mt-4 px-4 py-2 bg-[#FFB703] text-white text-base rounded-lg shadow-lg hover:bg-[#FFB703] hidden">
                            Ver menos
                        </button>
                    </div>
                </ul>
            </section>
            -->
            

            <!-- organigrama -->
            <!--<section class=" mx-auto ">
                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mt-6 mb-8">
                        Organigrama
                    </h2>
                    <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            </section>
            <section class="flex flex-col w-full bg-white rounded-lg p-6 text-center items-center justify-center">
                <div class="flex flex-col items-center justify-center pb-5  ">
                    <img src="{{asset('imagenes/homeSecundaria/organigramaUNT.png')}}" alt="Organigrama" class=" border border-black  border-h ">
                </div>
                <a href="rutadocumento.pdf" class="inline-block mt-4 px-4 py-2 bg-[#FFB703] text-white text-base rounded-lg hover:bg-[#FFB703]" download>
                    Descargar en PDF
                </a>
            </section>-->


            <!-- Ex directores-->
            <section class=" snap-x py-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Ex Directores</h2>
                    <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                </div>
                <div class="flex flex-row justify-center items-center gap-8 px-8 lg:px-24">
                    <div class=" scroll-ml-6 snap-start text-center">
                        <img class="mx-auto rounded-full w-48 h-48 object-cover border-4 border-[#1976D2]" src="https://via.placeholder.com/150" alt="">
                        <h3 class="mt-4 text-base font-semibold text-[#8B0000]">PROF. JULIA SIXTINA CASTAÑEDA AZABACHE</h3>
                        <p class="text-[#000000]">Directora</p>
                    </div>
                    <div class="scroll-ml-6 snap-start text-center">
                        <img class="mx-auto rounded-full w-48 h-48 object-cover border-4 border-[#1976D2]" src="https://via.placeholder.com/150" alt="">
                        <h3 class="mt-4 text-base font-semibold text-[#8B0000]">PROF. FELIPE TEMOCHE RUMICHE</h3>
                        <p class="text-[#000000]">Director</p>
                    </div>
                </div>
            </section>

            <!---->
            <!---->

        </div>

        <!--Formulario-->
        <section class="lg:flex p-5 md:px-20 justify-center">

            <img src="{{ asset('imagenes/index/inicial.jpg') }}" class="w-1/2 hidden lg:block" alt="">
            <form action="" method="POST"
                class="border-2 border-[#1976D2] gap-3 shadow-xl max-w-[600px] mx-auto rounded-lg p-5 grid md:grid-cols-2 [&>section>img]:bg-[#1976D2] [&>section]:flex [&>section>img]:p-2 [&>section]:rounded-md [&>section]:border [&>section]:border-[#1976D2] [&>section>img]:rounded-l-[5px] [&>section>input]:w-full [&>section>input]:rounded-r-md [&>section>input]:px-2 [&>section>input]:bg-transparent ">
                {{-- Predeterminado la escuela desde donde va --}}
                <section class="entrada-uno">
                    <img src="{{ asset('icons/user.svg') }}" alt="">
                    <input type="text" placeholder="Escriba su nombre" id="Nombres" name="Nombres">
                </section>
                <section class="entrada-uno">
                    <img src="{{ asset('icons/user.svg') }}" alt="">
                    <input type="text" placeholder="Escriba su apellido" id="Apellidos" name="Apellidos">
                </section>
                <section class="entrada-uno">
                    <img src="{{ asset('icons/email.svg') }}" alt="">
                    <input type="text" placeholder="Ingrese su correo" id="Correo" name="Correo">
                </section>
                <section class="entrada-uno">
                    <img src="{{ asset('icons/phone.svg') }}" alt="">
                    <input type="text" placeholder="Escriba su N° celular" id="Celular" name="Celular">
                </section>
                <section class="md:col-span-2 flex ">
                    <img src="{{ asset('icons/setting.svg') }}" alt="">
                    <select id="opciones" name="Opciones" class="w-full rounded-r-md bg-transparent">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="Docente">Docente</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Egresado">Egresado</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Otros">Otros</option>
                    </select>
                </section>
                <textarea name="Comentarios" id="Comentarios" placeholder="Escribe Tu Mensaje Aquí"
                    class="md:col-span-2 rounded-md p-3 border border-[#1976D2] bg-transparent"></textarea>
                <input class="py-2 bg-[#1976D2] rounded-md text-white font-bold cursor-pointer" type="submit"
                    id="enviar" name="enviar" value="Enviar">
                <input class="py-2 border-2 border-[#1976D2] rounded-md text-[#1976D2] font-bold cursor-pointer"
                    type="reset" id="borrar" name="borrar" value="Borrar">
            </form>
        </section>
        <!---->

        <!--Sección de menciones-->
        <div>
            <div id="lengua-literatura" class="hidden bg-black container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Lengua y Literatura
                </h2>
                <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet
                    cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit
                    venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin
                    etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus
                    posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat
                    nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
                </p>
            </div>
            <div id="filosofia-psicologia-ccss" class="hidden bg-white container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Filosofía, Psicología y CCSS
                </h2>
                <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet
                    cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit
                    venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin
                    etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus
                    posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat
                    nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
                </p>
            </div>
            <div id="ciencias-matematicas" class="hidden bg-white container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Ciencias Matemáticas
                </h2>
                <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet
                    cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit
                    venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin
                    etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus
                    posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat
                    nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
                </p>
            </div>
            <div id="idiomas" class="hidden bg-white container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Idiomas
                </h2>
                <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet
                    cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit
                    venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin
                    etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus
                    posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat
                    nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
                </p>
            </div>
            <div id="historia-geografia" class="hidden bg-white container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Historia y Geografía
                </h2>
                <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet
                    cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit
                    venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin
                    etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus
                    posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat
                    nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
                </p>
            </div>
            <div id="ciencias-naturales" class="hidden bg-white container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">
                    Ciencias Naturales
                </h2>
                <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
                <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet
                    cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit
                    venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin
                    etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus
                    posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat
                    nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
                </p>
            </div>
        </div>
        <!---->

        <!---->
        <style>
            @media(max-width:1100px) {
                .datos {
                    flex-direction: column;
                }

                .datos>div {
                    width: 100%;
                }

                .datos>div>img {
                    height: 350px;
                }
            }
        </style>
        <!---->

        <script>
            function showSection(sectionId) {
                // Ocultar todas las secciones
                const sections = document.querySelectorAll('.bg-white'); //cambiar siempre que se edite el color de fondo de las secciones de menciones
                sections.forEach(section => {
                    section.classList.add('hidden');
                });
                // Mostrar la sección seleccionada
                document.getElementById(sectionId).classList.remove('hidden');
            }



            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
            var items = document.querySelectorAll(".timeline li");
            // code for the isElementInViewport function 
            function callbackFunc() {
                for (var i = 0; i < items.length; i++) {
                    if (isElementInViewport(items[i])) {
                        items[i].classList.add("in-view");
                    }
                }
            }
            window.addEventListener("load", callbackFunc);
            window.addEventListener("scroll", callbackFunc);

            document.getElementById('show-more').addEventListener('click', function() {
                document.getElementById('hidden-timeline').classList.remove('hidden');
                document.getElementById('show-more').classList.add('hidden');
                document.getElementById('show-less').classList.remove('hidden');
            });

            document.getElementById('show-less').addEventListener('click', function() {
                document.getElementById('hidden-timeline').classList.add('hidden');
                document.getElementById('show-more').classList.remove('hidden');
                document.getElementById('show-less').classList.add('hidden');
            });
        </script>
</body>

</html>
@endsection