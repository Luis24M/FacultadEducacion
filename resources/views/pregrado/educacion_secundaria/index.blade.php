@extends('layouts.home')

@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación Secundaria</title>
</head>

<body class="bg-gray-100">
    <!-- Header Image -->
    <!--<div class="flex w-full bg-[#03045e] h-64 bg-cover bg-center text-base text-center items-center justify-center" style="background-blue">
        <h1 class="text-white text-center text-5xl"><b>Escuela Profesional de Educación Secundaria</b></h1>
    </div>-->

    <h1 class="text-3xl md:text-5xl text-[#FFFFFF] bg-[#1976D2] w-full p-4 font-bold">Escuela Profesional de Educación Secundaria</h1>


    <!---->
    <section class="datos order-first p-5 md:px-20 mx-auto my-6 grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            <!-- Primera columna: Bienvenida -->
            <div class="bg-[#D1E8FF] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">🤝</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Bienvenida</h3>
                <p class="text-black">"Bienvenidos a la Escuela Profesional de Educación Secundaria, un espacio donde
 		la excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."</p>
            </div>

            <!-- Segunda columna: Dr. Manuel Quipuscoa Silvestre -->
            <div class="bg-[#FFF4E1] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👨‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Dr. Carlos Oswaldo Caballero Alayo</h3>
                <p class="text-black">Director de la Escuela Profesional de Secundaria<br>Universidad Nacional de Trujillo</p>
                <a href="mailto:inicial@unitru.edu.pe" class="text-md font-bold text-black mb-2">secundaria@unitru.edu.pe</a>
            </div>

            <!-- Tercera columna: Mg. Patricia Roxana Vela Gálvez -->
            <div class="bg-[#D1E8FF] p-6 rounded-lg shadow-lg text-center">
                <div class="text-red-500 text-6xl mb-4">👩‍💼</div> <!-- Icono personalizado -->
                <h3 class="text-xl font-bold text-black mb-2">Sra. Mercedes Pilar Chuica Flores</h3>
                <p class="text-black">Asistente Administrativa.</p>
            </div>
        </section>
    <!---->



    <div class="container mx-auto p-8 selection:bg-fuchsia-300 selection:text-fuchsia-900">
        <div class="text-center py-16 px-5 bg-white">
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
        </div>

        <!--Formulario-->
        <section class="lg:flex p-5 md:px-20 justify-center">
            <x-form-programa programa="Educación Secundaria" color="[#2C76D2]"/>
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