@extends('layouts.app')

@section('content')
    <style>
        button.active {
            background-color: #FFD700;
            color: #8B0000
        }
    </style>
    
    <h1 class="text-3xl md:text-5xl text-[#8B0000] bg-[#FFD700] w-full p-4 font-bold">Filosofía, Psicología y CCSS</h1>

    <section class="max-w-[1050px] mx-auto p-5 md:px-0">
        <section class="md:px-11 px-6 py-5 flex flex-wrap gap-4 max-w-[800px]">
            <button
                class="btn-nav active bg-gray-50 bg-opacity-15 text-[#dac134] flex-1  font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="nosotros">
                Nosotros
            </button>
            <button
                class="btn-nav bg-gray-50 bg-opacity-15 text-[#dac134] flex-1 font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="consejo">
                Datos
            </button>
            <button
                class="btn-nav bg-gray-50 bg-opacity-15 text-[#dac134] flex-1 font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="comentarios">
                Comentarios
            </button>
            <button
                class="btn-nav bg-gray-50 bg-opacity-15 text-[#dac134] flex-1 font-bold px-4 py-4 rounded-lg shadow-md text-xs md:text-base hover:-translate-y-2 transition-all ease-linear duration-200"
                data-target="contactanos">
                Contactanos
            </button>
        </section>

        <section class="contenedor-contenido [&>section]:p-5 md:[&>section]:px-20 md:[&>section]:py-10">
            <section class="contenido active" id="nosotros">
                <p id="nosotros">
                    En un mundo en constante cambio, la educación desempeña un papel
                    crucial en la formación de individuos capaces de enfrentar los
                    desafíos actuales y futuros. Nuestro programa está diseñado para
                    replantear nuevos enfoques en la formación integral del estudiante,
                    desde el nivel básico hasta el superior. Gracias a la implementación
                    del MOEDUNT versión 2, hemos rediseñado nuestro plan curricular para
                    destacar el desarrollo de capacidades, habilidades y actitudes que son
                    altamente exigidas por el contexto social. <br>

                    Al elegir esta carrera, te estás equipando con las habilidades, conocimientos,
                    destrezas y cualidades necesarias para un desempeño óptimo en la sociedad, ya
                    sea como docente, investigador o líder comunitario con una actuación responsable.
                    Nuestro enfoque basado en competencias te permitirá adquirir una formación sólida
                    a través de asignaturas que abarcan estudios generales, educación y ciencias conexas,
                    y áreas especializadas en educación matemática.

                    Te invitamos a ser parte de esta emocionante travesía académica que no solo potenciará
                    tu crecimiento profesional, sino que también te permitirá contribuir significativamente
                    al desarrollo de la sociedad. ¡Únete a nosotros y marca la diferencia en el campo de la
                    educación matemática!
                </p>
            </section>

            <section class="contenido" id="consejo" style="display: none;">
                <section
                    class="flex flex-col md:flex-row flex-wrap flex-1 md:justify-evenly justify-center items-center gap-4">
                    <section
                        class="rounded-md bg-[#8B0000] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] text-white min-h-52 w-52 flex flex-col items-center justify-center"
                        data-aos="fade-right" data-aos-duration="1000">
                        <img class="w-20 h-20" src="{{ asset('imagenes/idiomas/Icono-Profesor.png') }}"
                            alt="Logotipo De Profesor">
                        <span class="numero font-bold text-5xl " data-objetivo="150">150</span>
                        <h4 class="text-lg">Profesores</h4>
                    </section>

                    <section
                        class="rounded-md bg-[#8B0000] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] text-white min-h-52 w-52 flex flex-col items-center justify-center"
                        data-aos="fade-right" data-aos-duration="1000">
                        <img class="h-20 w-20" src="{{ asset('imagenes/idiomas/Icono-Estudiante.png') }}"
                            alt="Logotipo De Estudiante">
                        <span class=" font-bold text-5xl numero" data-objetivo="1200">1200</span>
                        <h4 class="text-lg">Estudiantes</h4>
                    </section>

                    <section
                        class="rounded-md bg-[#8B0000] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] text-white min-h-52 w-52 flex flex-col items-center justify-center"
                        data-aos="fade-right" data-aos-duration="1000">
                        <img class="w-20 h-20" src="{{ asset('imagenes/idiomas/Icono-Excelencia.png') }}"
                            alt="Logotipo De Excelencia Academica">
                        <span class="numero font-bold text-5xl" data-objetivo="10">10</span>
                        <h4 class="text-lg">Años De Excelencia</h4>
                    </section>

                    <section
                        class="rounded-md bg-[#8B0000] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] text-white min-h-52 w-52 flex flex-col items-center justify-center"
                        data-aos="fade-right" data-aos-duration="1000">
                        <img class="w-20 h-20" src="{{ asset('imagenes/idiomas/Icono-Investigacion.png') }}"
                            alt="Logotipo De Proyectos">
                        <span class=" font-bold text-5xl numero" data-objetivo="50">50</span>
                        <h4 class="text-lg">P. De Investigación</h4>
                    </section>

                    <section
                        class="rounded-md bg-[#8B0000] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] text-white min-h-52 w-52 flex flex-col items-center justify-center"
                        data-aos="fade-right" data-aos-duration="1000">
                        <img class="w-20 h-20" src="{{ asset('imagenes/idiomas/Icono-Investigacion.png') }}"
                            alt="Logotipo De Proyectos">
                        <span class=" font-bold text-5xl numero" data-objetivo="50">50</span>
                        <h4 class="text-lg">Alumnos Graduados</h4>
                    </section>
                </section>
            </section>

            <section class="contenido" id="comentarios" style="display: none;">
                <section class="seccion-comentarios">
                    <div class="flex flex-wrap justify-center gap-5">
                        <article
                            class="w-[400px] h-[300px] p-5 rounded-lg border-2 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] border-[#8B0000] bg-white">
                            <figure class="flex gap-5">
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Juan Pérez"
                                    class="rounded-full w-20 h-20 border border-[#8B0000]">
                                <figcaption class="flex flex-col justify-around">
                                    <h3 class="font-medium text-lg md:text-xl">Juan Pérez</h3>
                                    <p class="text-[#8B0000] text-xs md:text-sm">25/09/2024</p>
                                </figcaption>
                            </figure>
                            <p class="pt-4 md:text-base text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                        <article
                            class="w-[400px] h-[300px] p-5 rounded-lg border-2 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] border-[#8B0000] bg-white">
                            <figure class="flex gap-5">
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Juan Pérez"
                                    class="rounded-full w-20 h-20 border border-[#8B0000]">
                                <figcaption class="flex flex-col justify-around">
                                    <h3 class="font-medium text-lg md:text-xl">Juan Pérez</h3>
                                    <p class="text-[#8B0000] text-xs md:text-sm">25/09/2024</p>
                                </figcaption>
                            </figure>
                            <p class="pt-4 md:text-base text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                        <article
                            class="w-[400px] h-[300px] p-5 rounded-lg border-2 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] border-[#8B0000] bg-white">
                            <figure class="flex gap-5">
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Juan Pérez"
                                    class="rounded-full w-20 h-20 border border-[#8B0000]">
                                <figcaption class="flex flex-col justify-around">
                                    <h3 class="font-medium text-lg md:text-xl">Juan Pérez</h3>
                                    <p class="text-[#8B0000] text-xs md:text-sm">25/09/2024</p>
                                </figcaption>
                            </figure>
                            <p class="pt-4 md:text-base text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                        <article
                            class="w-[400px] h-[300px] p-5 rounded-lg border-2 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] border-[#8B0000] bg-white">
                            <figure class="flex gap-5">
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Juan Pérez"
                                    class="rounded-full w-20 h-20 border border-[#8B0000]">
                                <figcaption class="flex flex-col justify-around">
                                    <h3 class="font-medium text-lg md:text-xl">Juan Pérez</h3>
                                    <p class="text-[#8B0000] text-xs md:text-sm">25/09/2024</p>
                                </figcaption>
                            </figure>
                            <p class="pt-4 md:text-base text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                    </div>
                </section>
            </section>

            <section class="contenido" id="contactanos" style="display: none;">
                <form action="" method="POST" class="border-2 border-[#8B0000] gap-3 shadow-xl max-w-[600px] mx-auto rounded-lg p-5 grid md:grid-cols-2 [&>section>img]:bg-[#8B0000] [&>section]:flex [&>section>img]:p-2 [&>section]:rounded-md [&>section]:border [&>section]:border-[#8B0000] [&>section>img]:rounded-l-[5px] [&>section>input]:w-full [&>section>input]:rounded-r-md [&>section>input]:px-2 [&>section>input]:bg-transparent ">
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
                    <textarea name="Comentarios" id="Comentarios" placeholder="Escribe Tu Mensaje Aquí" class="md:col-span-2 rounded-md p-3 border border-[#8B0000] bg-transparent"></textarea>
                    <input class="py-2 bg-[#8B0000] rounded-md text-white font-bold cursor-pointer" type="submit" id="enviar" name="enviar" value="Enviar">
                    <input class="py-2 border-2 border-[#8B0000] rounded-md text-[#8B0000] font-bold cursor-pointer" type="reset" id="borrar" name="borrar" value="Borrar">

                </form>
            </section>
        </section>
    </section>

    <script src="{{ asset('js/main.js') }}" ></script> 
@endsection
