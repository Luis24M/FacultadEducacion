 @extends('layouts.app')
 <link rel="stylesheet" href="{{asset('style/styles.css')}}">
 @section('content')
     <div id= "body" class="text-lg">
         <div class="hero">
             <div class="overlay">
                 <div class="content">
                     <h1>Educación Secundaria, <br> Mención: Idiomas: <br> Inglés-Francés <br> Inglés-Alemán</h1>
                     <p>¡Bienvenidos a Educación Secundaria con énfasis en inglés y, francés o alemán! En este viaje
                         educativo, formarás parte esencial y guiarás el aprendizaje profundo de dos idiomas
                         internacionales. ¡Comencemos juntos esta travesía hacia un futuro de descubrimientos en la
                         Educación Secundaria!</p>
                     <a href="#" class="btn">Ver Jornada de Investigación Científica</a>
                 </div>
             </div>
         </div>

         <section class="stats">
             <div class="stat">
                 <h3 id="years">200</h3>
                 <p>Año de fundación</p>
             </div>
             <div class="stat">
                 <h3 id="teachers">175</h3>
                 <p>Docentes</p>
             </div>
             <div class="stat">
                 <h3 id="students">2459</h3>
                 <p>Alumnos</p>
             </div>
             <div class="stat">
                 <h3 id="graduates">381</h3>
                 <p>Egresados 2012 - 2023</p>
             </div>
         </section>

         <!-- About Section -->
         <section class="about-section">
             <div class="about-images">
                 <img src="{{asset('imagenes/idiomas/imagen.jpg')}}" alt="Facultad de Educación">
             </div>
             <div class="about-text">
                 <h2>Departamento de Idiomas</h2>
                 <p>"Bienvenidos al programa de estudios de Idiomas"</p>
                 <p class= "parrafo">Un Licenciado en Educación Secundaria con Mención en Inglés-Frances o Inglés Alemán es
                     un profesional comprometido con la formación integral de estudiantes adolescentes. Este educador posee
                     sólidos conocimientos en pedagogía y didáctica, especializándose en la enseñanza de los idiomas inglés
                     y, francés o alemán. Su enfoque abarca el desarrollo de habilidades lingüísticas, la promoción de la
                     comunicación efectiva y la apertura a la diversidad cultural. Con una pasión por inspirar el amor por
                     los idiomas, este licenciado contribuye al crecimiento académico y personal de sus estudiantes,
                     preparándolos para enfrentar un mundo globalizado con confianza y competencia lingüística. <br>
                     <br>
                     Juntos, construiremos un futuro donde el conocimiento se traduzca en impacto, y donde cada logro
                     sea una prueba de la dedicación y el compromiso de nuestros estudiantes y educadores.
                 </p>
                 <ul>
                     <li>Duración de Estudios: 10 Semestres Académicos</li>
                     <li>Grado Académico: Bachiller en Educación Secundaria, Mención Idiomas: Inglés-Francés o Inglés-Alemán
                     </li>
                     <li>Título Profesional: Licenciado en Educación Secundaria, Mención Idiomas: Inglés-Francés o
                         Inglés-Alemán</li>
                 </ul>
                 <a href="#" class="btn">Ver Malla Curricular</a>
             </div>
         </section>

         <!-- mision y vision -->
         <!--mision, vision-->

         <h1>VISIÓN Y MISIÓN</h1>

<div class="cartas">
  <div class="card">
    <div class="card-header">
      <i class="icon fas fa-bullseye"></i>
      <h2>Misión</h2>
    </div>
    <p>Somos el primer programa de estudios del Perú que forma licenciados en Educación Secundaria
      con mención en Idiomas: Inglés-Francés e Inglés-Alemán, de excelencia académica y preparados
      para enfrentar los retos de un mundo complejo y globalizado buscando el desarrollo responsable
      y sostenible de nuestra región y país.</p>
  </div>
  <div class="card">
    <div class="card-header">
      <i class="icon fas fa-eye"></i>
      <h2>Visión</h2>
    </div>
    <p>En el 2024, seremos una unidad académica acreditada, que contribuye al desarrollo sustentable
      de la región, del país y del mundo, sensible a las exigencias sociales, que forma profesionales con
      excelencia académica en idiomas, se proyecta a la comunidad con responsabilidad social, realiza
      investigación científica, respeta la diversidad cultural y la ecología y contribuye a la formación
      integral del ser humano dentro de un marco de valores éticos y estéticos.</p>
  </div>
</div>
<!-- fin -->
 <br>
 <br>

<!-- ingles, frances y aleman -->
<section class="carreras">
        <h2>Mención: Idiomas</h2>
        <br>
        <div class="carreras-container">
            <div class="carrera">
                <h3>Inglés</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eveniet vel, modi qui nesciunt quam, eos itaque laborum eius quasi quaerat dolorem quod mollitia magni quo necessitatibus?</p>
                <img src="{{asset('imagenes/idiomas/PUENTE.jpg')}}" alt="Imagen de Londres">
            </div>
            <div class="carrera">
                <h3>Francés</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nesciunt, tenetur asperiores minima repellat perspiciatis natus deleniti ab cumque porro magnam fugiat?</p>
                <img src="{{asset('imagenes/idiomas/PARISS.jpg')}}" alt="Imagen de París">
            </div>
            <div class="carrera">
                <h3>Alemán</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis amet dolores accusamus. Amet, modi repellendus unde vitae, dolore nesciunt.</p>
                <img src="{{asset('imagenes/idiomas/ALEMAN.jpg')}}" alt="Imagen de Berlín">
            </div>
        </div>
    </section>

         <!-- fin -->



     </div>
     <script>
         // JavaScript for Animated Number Counting
         function animateValue(id, start, end, duration) {
             let obj = document.getElementById(id);
             let range = end - start;
             let startTime = new Date().getTime();
             let endTime = startTime + duration;
             let step = function() {
                 let now = new Date().getTime();
                 let remaining = Math.max((endTime - now) / duration, 0);
                 let value = Math.round(end - (remaining * range));
                 obj.innerHTML = value;
                 if (value == end) {
                     clearInterval(timer);
                 }
             };
             let timer = setInterval(step, 50);
             step();
         }

        // Start animations for each number
        window.onload = function() {
            animateValue("years", 0, 200, 2000);
            animateValue("teachers", 0, 175, 2000);
            animateValue("students", 0, 2459, 2000);
            animateValue("graduates", 0, 381, 2000);
        };
    </script>

      </div>

@endsection