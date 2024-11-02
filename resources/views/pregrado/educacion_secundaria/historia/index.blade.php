@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('style/style2.css')}}">

@section('content')
<div id="main-container">
    <section class="titulo">
        <h1>Mención Historia y Geografia</h1>
    </section>

    <section class="contenedor-informacion">
        <section class="contenedor-navegacion px-14">
            <button class="btn-nav active" data-target="nosotros">
                Nosotros
                <i class="fa-solid fa-angles-down"></i>
            </button>
            <button class="btn-nav" data-target="consejo">
                Datos
                <i class="fa-solid fa-angles-down"></i>
            </button>
            <button class="btn-nav" data-target="comentarios">
                Comentarios
                <i class="fa-solid fa-angles-down"></i>
            </button>
            <button class="btn-nav" data-target="contactanos">
                Contactanos
                <i class="fa-solid fa-angles-down"></i>
            </button>
        </section>

        <section class="contenedor-contenido p-14">
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
                <section class="contenedor-contador">
                    <section class="contenedor-primario" data-aos="fade-right" data-aos-duration="1000">
                        <section class="contenedor-logo">
                            <img src="{{ asset('imagenes/idiomas/Icono-Profesor.png') }}" alt="Logotipo De Profesor">
                        </section>
                        <section class="contenedor-numero">
                            <span class="numero" data-objetivo="150">150</span>
                            <h4>Profesores</h4>
                        </section>
                    </section>

                    <section class="contenedor-primario" data-aos="fade-down" data-aos-duration="1000">
                        <section class="contenedor-logo">
                            <img src="{{ asset('imagenes/idiomas/Icono-Estudiante.png') }}" alt="Logotipo De Estudiante">
                        </section>
                        <section class="contenedor-numero">
                            <span class="numero" data-objetivo="1200">1200</span>
                            <h4>Estudiantes</h4>
                        </section>
                    </section>

                    <section class="contenedor-primario" data-aos="fade-down" data-aos-duration="1000">
                        <section class="contenedor-logo">
                            <img src="{{ asset('imagenes/idiomas/Icono-Excelencia.png') }}" alt="Logotipo De Excelencia Academica">
                        </section>
                        <section class="contenedor-numero">
                            <span class="numero" data-objetivo="10">10</span>
                            <h4>Años De Excelencia</h4>
                        </section>
                    </section>

                    <section class="contenedor-primario" data-aos="fade-down" data-aos-duration="1000">
                        <section class="contenedor-logo">
                            <img src="{{ asset('imagenes/idiomas/Icono-Investigacion.png') }}" alt="Logotipo De Proyectos">
                        </section>
                        <section class="contenedor-numero">
                            <span class="numero" data-objetivo="50">50</span>
                            <h4>P. De Investigación</h4>
                        </section>
                    </section>

                    <section class="contenedor-primario" data-aos="fade-left" data-aos-duration="1000">
                        <section class="contenedor-logo">
                            <img src="{{ asset('imagenes/idiomas/Icono-Investigacion.png') }}" alt="Logotipo De Proyectos">
                        </section>
                        <section class="contenedor-numero">
                            <span class="numero" data-objetivo="50">50</span>
                            <h4>Alumnos Graduados</h4>
                        </section>
                    </section>
                </section>
            </section>

            <section class="contenido" id="informacion" style="display: none;">
                <h2>Hola3</h2>
            </section>

            <section class="contenido" id="comentarios" style="display: none;">
                <section class="seccion-comentarios">
                    <div class="contenedor-tarjetas">
                        <article class="tarjeta-comentario">
                            <figure>
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Juan Pérez" class="imagen-comentario">
                                <figcaption>
                                    <h3>Juan Pérez</h3>
                                    <p class="fecha">25/09/2024</p>
                                </figcaption>
                            </figure>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                        <article class="tarjeta-comentario">
                            <figure>
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="María López" class="imagen-comentario">
                                <figcaption>
                                    <h3>María López</h3>
                                    <p class="fecha">20/09/2024</p>
                                </figcaption>
                            </figure>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                        <article class="tarjeta-comentario">
                            <figure>
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Carlos Sánchez" class="imagen-comentario">
                                <figcaption>
                                    <h3>Carlos Sánchez</h3>
                                    <p class="fecha">18/09/2024</p>
                                </figcaption>
                            </figure>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem eos dignissimos debitis temporibus asperiores
                                possimus saepe ea vel repudiandae, tempora praesentium
                                cum recusandae, accusamus veritatis. Velit nulla quisquam
                                deserunt optio.
                            </p>
                        </article>
                        <article class="tarjeta-comentario">
                            <figure>
                                <img src="{{ asset('imagenes/idiomas/Img-Nosotros.jpg') }}" alt="Laura Gómez" class="imagen-comentario">
                                <figcaption>
                                    <h3>Laura Gómez</h3>
                                    <p class="fecha">15/09/2024</p>
                                </figcaption>
                            </figure>
                            <p>
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
                <section class="contenedor-formulario">
                    <form action="../PHP/guardar_datos.php" method="POST">
                        <section class="contenedor-entrada">
                            <section class="entrada-uno">
                                <section class="contenedor-icono">
                                    <ion-icon name="person-outline"></ion-icon>
                                </section>
                                <section class="contenedor-input">
                                    <input type="text" placeholder="Escriba su nombre" id="Nombres" name="Nombres">
                                </section>
                            </section>

                            <section class="entrada-uno">
                                <section class="contenedor-icono">
                                    <ion-icon name="person-outline"></ion-icon>
                                </section>
                                <section class="contenedor-input">
                                    <input type="text" placeholder="Escriba su apellido" id="Apellidos" name="Apellidos">
                                </section>
                            </section>
                        </section>

                        <section class="contenedor-entrada">
                            <section class="entrada-uno">
                                <section class="contenedor-icono">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </section>
                                <section class="contenedor-input">
                                    <input type="text" placeholder="Ingrese su correo" id="Correo" name="Correo">
                                </section>
                            </section>

                            <section class="entrada-uno">
                                <section class="contenedor-icono">
                                    <ion-icon name="call-outline"></ion-icon>
                                </section>
                                <section class="contenedor-input">
                                    <input type="text" placeholder="Escriba su N° celular" id="Celular" name="Celular">
                                </section>
                            </section>
                        </section>
                        <section class="contenedor-entrada">
                            <section class="entrada-uno contenedor-entrada-opcion">
                                <section class="contenedor-icono contenedor-entrada-icono">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </section>
                                <section class="contenedor-input">
                                    <select id="opciones" name="Opciones">
                                        <option value="" disabled selected>Selecciona una opción</option>
                                        <option value="Docente">Docente</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Egresado">Egresado</option>
                                        <option value="Administrativo">Administrativo</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </section>
                            </section>
                        </section>
                        <section class="contenedor-comentario">
                            <textarea name="Comentarios" id="Comentarios" placeholder="Escribe Tu Mensaje Aquí"></textarea>
                        </section>
                        <section class="botones">
                            <input type="submit" id="enviar" name="enviar" value="Enviar">
                            <input type="reset" id="borrar" name="borrar" value="Borrar">
                        </section>
                    </form>
                </section>
            </section>
        </section>
    </section>

</div>
<script src="{{ asset('js/main.js')}}"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection