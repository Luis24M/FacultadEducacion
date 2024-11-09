@extends('layouts.app')
@section('content')
    <div class="py-10">
        <h2 class="text-5xl text-center my-8 font-bold">Noticias</h2>
        <section class="flex lg:flex-row flex-col p-4 gap-4 justify-around mx-auto max-w-7xl">
            <x-card-noticias titulo="Título de la noticia" fecha="09 Octubre 2024"
                imagen="{{ asset('imagenes/index/noticia1.png') }}" descripcion="Descripcion de prueba" />
            <x-card-noticias titulo="Título de la noticia" fecha="09 Octubre 2024"
                imagen="{{ asset('imagenes/index/noticia1.png') }}" descripcion="Descripcion de prueba" />
            <x-card-noticias titulo="Título de la noticia" fecha="09 Octubre 2024"
                imagen="{{ asset('imagenes/index/noticia1.png') }}" descripcion="Descripcion de prueba" />
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
        <div class="flex flex-col gap-5 items-center mx-auto lg:flex-row justify-around p-4">
            <img src="{{ asset('imagenes/index/auditorio.jpg') }}" class="rounded float lg:w-[40%] shadow-lg"
                alt="...">
            <img src="{{ asset('imagenes/index/juegos.jpg') }}" class="rounded float lg:w-[30%] shadow-lg" alt="...">
        </div>
    </div>
    <hr>
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
    <div class="py-10 bg-white">
        <h2 class="text-5xl text-center my-8 font-bold">Nuestras Escuelas</h2>
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
