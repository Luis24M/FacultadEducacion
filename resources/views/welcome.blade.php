@extends('layouts.home')
@section('content')
<div class="p-10" >
    <div class="flex flex-col lg:flex-row my-10 border-2" id="bienvenida">
        <img class="min-w-[50%] object-cover" src="{{ asset('imagenes/index/decana.png') }}"
            alt="decana Elizabeth Aurea Rafael Sánchez">
        <div class=" bg-white p-4 lg:p-20 lg:max-w-[50%] rounded-e-md text-center flex flex-col justify-center" id="bienvenida-text">
            <h3 class="text-3xl font-semibold">Bienvenida</h3>
            <br>
            <p>"Bienvenidos a la Facultad de Educación y Ciencias de la Comunicación, un espacio donde la excelencia
                académica se encuentra con la innovación y la pasión por el aprendizaje. En nuestra facultad, nos
                enorgullece nutrir no solo las mentes brillantes de hoy, sino también los líderes del mañana. Estamos
                comprometidos con la creación de un ambiente educativo que fomente la curiosidad, la creatividad y el
                pensamiento crítico. Aquí, cada estudiante es más que un número; son parte de una comunidad académica
                diversa y vibrante. Con un cuerpo docente dedicado y programas de vanguardia, aspiramos a impulsar el
                crecimiento intelectual y personal de cada individuo que cruza nuestras puertas. Juntos, construiremos
                un
                futuro donde el conocimiento se traduzca en impacto, y donde cada logro sea una prueba de la dedicación
                y el
                compromiso de nuestros estudiantes y educadores.
                ¡Bienvenidos a una experiencia educativa que va más allá de las aulas y trasciende fronteras!"
                <br>
                <br>
                <strong>
                    Elizabeth Aurea Rafael Sánchez
                    <br>
                    Decana
                </strong>
            </p>
        </div>
    </div>
</div>
<hr>
    <div class="py-10">
        <h2 class="text-5xl text-center my-8 font-bold">Noticias</h2>
        <section class="flex lg:flex-row flex-col p-4 gap-4 justify-around mx-auto max-w-7xl">
            @if($noticias->isEmpty())
                <p class="text-gray-500">No hay noticias disponibles.</p>
            @else
                @foreach($noticias as $noticia)
                    <x-card-noticias titulo="{{ $noticia->nombrePublicacion }}" fecha="{{ $noticia->fechaPublicacion }}"
                        imagen="{{ asset($noticia->imgPublicacion) }}" descripcion="{{ $noticia->desPublicacion }}" />
                @endforeach
            @endif
            </section>
        <div class="w-full text-center py-4">
            <a href="/noticias" id="noticias" class="text-xl md:max-w-[400px] bg-neutral-950 p-3 text-white hover:shadow-2xl">
                <span class="md:px-6 lg:py-3 lg:text-lg">
                    Ver todas las noticias
                </span>
            </a>
        </div>
    </div>
    <hr>
    <div class="py-10 bg-[#fff]">
        <h2 class="text-5xl text-center my-8 font-bold">Eventos</h2>
        <section class="flex lg:flex-row flex-col p-4 gap-4 justify-around mx-auto max-w-7xl">
            @if($eventos->isEmpty())
                <p class="text-gray-500">No hay eventos disponibles.</p>
            @else
                @foreach($eventos as $evento)
                    <div class="border shadow rounded-xl">
                        <img src="{{ asset($evento->imgPublicacion)}}" width="500px" class="rounded-xl" alt="{{$evento->nombrePublicacion}}">
                        {{-- <div class="flex justify-between px-3">
                            <h2 class="text-2xl">{{ $evento->nombrePublicacion }}</h2>
                            <p class="text-gray-600">{{ $evento->fechaPublicacion }}</p>
                        </div> --}}
                    </div>
                @endforeach
            @endif
        </section>
    </div>
    <hr>

    <section class="py-8">
        <div class="container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
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
        <!-- Eventos ocultos inicialmente -->
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
    
    <div class="py-10 bg-white">
        <h2 class="text-5xl text-center my-8 font-bold">Nuestras Escuelas Profesionales</h2>
        <section class="p-4 flex lg:flex-row flex-col flex-wrap justify-around gap-4 lg:gap-1">
            <x-card-escuelas name="Educación Inicial" url="/pregrado/inicial"
                img="{{ asset('imagenes/index/inicial.jpg') }}" />
            <x-card-escuelas name="Educación Primaria" url="/pregrado/primaria"
                img="{{ asset('imagenes/index/primaria.jpg') }}" />
            <x-card-escuelas name="Educación Secundaria" url="/pregrado/secundaria"
                img="{{ asset('imagenes/index/secundaria.jpg') }}" />
            <x-card-escuelas name="Ciencias de la Comunicación" url="/pregrado/cdlc"
                img="{{ asset('imagenes/index/ciencias.jpg') }}" />
        </section>
    </div>




  
    <script type="text/javascript">
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

    (function(d, t) {
        var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
        v.onload = function() {
            window.voiceflow.chat.load({
            verify: { projectID: '6722932bfb0d295a57c92361' },
            url: 'https://general-runtime.voiceflow.com',
            versionID: 'production'
            });
        }
            v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
        })(document, 'script');
    </script>

    <style>
        .decorated-button {
            position: relative;
            padding-right: 2rem; /* Espacio para la esquina decorativa */
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
            transform: translate3d(200px,0,0);
        }
        .timeline ul li:nth-child(even) div {
            transform: translate3d(-200px,0,0);
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
                left: -289px; /*250+45-6*/
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

        #noticias {
            position: relative;
            display: flex;
            max-width: 300px;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            background: #183153;
            box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            cursor: pointer;
            border: none;
        }

        #noticias:after {
            content: " ";
            width: 0%;
            height: 100%;
            background: #ffd401;
            position: absolute;
            transition: all 0.4s ease-in-out;
            right: 0;
        }

        #noticias:hover::after {
            right: auto;
            left: 0;
            width: 100%;
        }

        #noticias span {
            text-align: center;
            text-decoration: none;
            width: 100%;
            padding: 4px 8px;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            z-index: 20;
            transition: all 0.3s ease-in-out;
        }

        #noticias:hover span {
            color: #183153;
            animation: scaleUp 0.3s ease-in-out;
        }

    @media(max-width: 1300px) {
        #bienvenida {
            display: flex;
            flex-direction: column;
        }

        #bienvenida-text {
            min-width: 100%;
        }
    }
    </style>
@endsection
