@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <title>UNT-EDUCACION PRIMARIA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Educacion Primaria...</span></div>
    </div>

    <div class="container-fluid bg-light p-0"
        style="background: linear-gradient(to bottom, #2A73FF, #A6CFFF); color: white; height: 60px;">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Av. Juan Pablo II, Trujillo 13011</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+51 955378006</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1"
                        href="https://www.facebook.com/primariafacedunt.oficial"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0"
                        href="https://www.instagram.com/primaria.unt/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-#ff6600; navbar-light shadow sticky-top p-0"
        style="top: -100px;background-color: #ff6600; height: 140px;">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="../paginaEducacionPrimariaUNT/img/logoPrimariaUNT.png" alt="" width="100" height="100">
            <h2 style="color: azure;"></i>Educacion Primaria</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="" class="nav-item nav-link">Nosotros</a>
                <a href="" class="nav-item nav-link">Admision</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programa de Estudio</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="" class="dropdown-item">Ciencias de la Comunicacion</a>
                        <a href="" class="dropdown-item">Educacion Inicial</a>
                        <a href="" class="dropdown-item">Educacion Primaria</a>
                        <a href="" class="dropdown-item">Educacion Secundaria</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">SGA FACEDU</a>
                <a href="" class="nav-item nav-link">Contacto</a>
    </nav>

    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/fotoprofesores.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h4 class="text-white text-uppercase mb-3 animated slideInDown"> UNT</h4>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">EDUCACION PRIMARIA
                                    </h1>
                                    <h5 style="color: white;">¡Bienvenidos a la Carrera de Educación Primaria! Este
                                        espacio educativo te
                                        invita a sumergirte en la asombrosa travesía de formar parte de la enseñanza
                                        fundamental. Prepárate para iniciar un viaje significativo, donde cultivarás
                                        habilidades esenciales y descubrirás la gratificación de guiar los primeros
                                        pasos en el aprendizaje de los más jóvenes. Estamos emocionados de acompañarte
                                        en este camino educativo, contribuyendo al desarrollo integral de los
                                        estudiantes en sus años iniciales de educación. ¡Comencemos juntos este
                                        emocionante viaje hacia un futuro repleto de descubrimientos y aprendizaje en la
                                        Educación Primaria!</h5>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Bienvenida</h5>
                            <p>"Bienvenidos a la Facultad de Educación y Ciencias de la Comunicación, un espacio donde
                                la excelencia académica se encuentra con la innovación y la pasión por el aprendizaje."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Dr. Manuel Quipuscoa Silvestre </h5>
                            <p> Director del Programa de Estudios de Educación Primaria
                                Universidad Nacional de Trujillo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="d-flex py-5 px-4">
                        <img style="width: 15; height: 15;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAExklEQVR4nO2bC4gVVRjHf7a5uuZGCT1EtO1lBoJFCEUqEhoFBb2MHlaC1GamURJBr1XYXpSQlpQEPdYoKKlEKnohVKZREKUIFearpAxNKs1W68YH/4HDMDN35t6ZM7N5/3Dg3jtnznf+c8585zv/71zIB2cA9wAfAJuA34FaTPkb2A58BjwNTAMGM0BwHvBxArm05WdgbpWJDwNWOB3eDTwPXAacCXQm3NsOjAYmAYuAb5x2vgUmUDGMAr5UB/8AeoDhTbZ5KbBRbf4JXEFFcLTTse81mnnhSL3T1vY/wCWUjDbgXXXoK+DYguwsko29wDhKxC2OgxlToJ1BwCuyZQ6xNCf1kzpxpQd75vR+kT17v73jVhlfrxHwgbmyuZYS8J6Mz/Ros0Me2xzYSI926VR0dBAY4dMw8KYe9M0+jU6Q0a8L8g1DE64vkO3FeMRFMmpLUp6YIY9v6/mQmDrXyPareMQNMtqXU3snACtDsbQteVG4QNc/wiNmyegLORB9WAFFEEKucGLxqLV9qq6vYYAQPgI4H1gG7HdGdKU2EK5jsql9+kAjfBRwjl6D55zgIYiPVwFTIlaBz53NSC9wXFUIj5KjeShCALCt3b8Re90twJMRoxcm3RcSCS6uAuGpMR2waXtIHd0AvCYFZHxGW5OdreeDVSZsOEZbvGaxcKAQzgstwrRG+P85pXsOt3e4p0W4hBGerM+WNSgKj8jGfVUY4XFO9FQUXpKN7ioQ7gD6gQPKIBSBNbJXidDS8IW+T6cYof+AYvIRVSH8gL4/U4Ct69T2On2vBOEuCXp/OXvavDIbG0OiXSUIG17Uby+Tv/a91RH2KkP4ROA3/X5bDjYmasZYe1c7v1eGsOFyOReb3tfTOM4GdsqGqSQuTgb2SSIKcJrSPXafd4lnga4Z8cfqaMxhDJIUtE9tvB0j13Y46Z1eSUWBMrI6o81cNK1urc1WZ5vqm7aV5JymKVqrOb6gXscvdOSfNxy9zNKr3kW8iaGjC/v19E37mifdeaFk2V+devZ5doxIb+/tZqfs0T33q04Q5lpcgDMDNughNHxeJK1q2aZk27qUB1n6Y3JVVyXcc0hnQwLhb7cSfQHed+ouL5qwCxPVb9QIL1d5ApijXNUOtXlWQmh5N3BKqBwfqtsZGsnBigD75UyH+iJcD8sS0jdbdM0CnEaxtZk2ZqUgPBZYmuEoxKmKmWuaCWkIz5D0m6bsKYpwm5aWIAi5PUO7852MxLw6hIeElqO0pSsvwuPlEX9wGn9da2YWBMeUdtQhHDizR1OWvXkQfge4V27ffYrfyTtnPfsxXOmZmtqtRzgLmmpjfsRU2SXHM6nBQy6WpfhEbW0KzYxSCc9RZBNk9vqkRCSlVCyuvkOkwmjXnvdHtbkzolOlEZ7pxMlLnBRmPQQOzGLkD4GngMeVB97lzJJPY7x6KYRHa0RrIQ+aBlMUVsZ5Vdvk35QwS0oh3Ksb3mryiIMdiLlTsfS1wElFdDaPNjbrhnPxD++E2zUdDxYoxVaK8BhVtv8lcDgQ7vKQXUhCi3ADaI1wElpT2jPWyoc0Kv2OlaZmq4yd1q38CHc3sO+NKva/iVSwnYtt+fI6PZsVtvu6K7TXzlJMCX027s9i/wGLkGJO0I0pmwAAAABJRU5ErkJggg==">
                        <div class="ps-4">
                            <h5 class="mb-3">Mg. Patricia Roxana Vela Gálvez</h5>
                            <p>Miembro Representante Administrativo del Programa de Estudios de Educación Primaria.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/datosdelacarrera.png"
                            style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">199 <span class="fs-4">Años</span></h1>
                            <h4 class="text-white">Experiencia</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// Educación Primaria //</h6>
                    <h1 class="mb-4"><span class="text-primary">DATOS</span> DE LA CARRERA</h1>
                    <p class="mb-4">El licenciado en Educación Primaria es un profesional que contribuye al proceso de
                        formación de los niños en edad escolar (seis a once años de edad), jóvenes y adultos que cursan
                        educación primaria. Su formación es integral en los aspectos científicos, tecnológicos y
                        humanísticos.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>MISIÓN:</h6>
                                    <span>Formar licenciados en educación primaria, competitivos, con una sólida
                                        formación científica, tecnológica, pedagógica, humanística, ética e inclusiva
                                        para la mejora de la calidad educativa a través de la investigación, innovación
                                        y desarrollo sostenible de la localidad, región y el país.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>VISIÓN: </h6>
                                    <span>Al 2024 somos una Escuela Académica de Educación Primaria de la UNT,
                                        acreditada que forma líderes de cambio altamente calificados con conocimiento
                                        científico, tecnológico y humanístico capaces de satisfacer la demanda de la
                                        Educación Básica de la localidad, la región y el país. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>OBJETIVOS EDUCACIONALES</h6>
                                    <span>OE 1: Demuestra competencias profesionales de gestión del proceso de
                                        aprendizaje enseñanza para la formación integral a fin de que
                                        estos actúen como ciudadanos globales. <br>
                                        OE 2: Gestiona procesos de organización y dirección de instituciones educativas
                                        asociados a proyectos de investigación científica, innovación e intervención
                                        sociocultural. <br>
                                        OE 3: Demuestra una actitud de compromiso para su superación continua ante los
                                        desafíos socioeducativos, evidenciando identidad profesional y eticidad
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.youtube.com/embed/6mmdvUizSbk?si=FeLkyF947RocMboP"
                        class="btn btn-primary py-3 px-5">Ver mas<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">199</h2>
                    <p class="text-white mb-0">Años de experiencia</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">+1234</h2>
                    <p class="text-white mb-0">Técnicos expertos</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">+1999</h2>
                    <p class="text-white mb-0">Alumnos satisfechos</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <img style="background-color: aliceblue;"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB2klEQVR4nO2ZzysEYRjHPwoRh72ypRwclKODklYcpJSc5Obk4OBCTm5yITc3hSTlyklKIqE4SP4AXMiFpUTLo6ln9bZ+7IxdeWZ3vvW0szvf95n5zLPP+87sAmwDEvLYw8BJ5Cv42AipJAIxJokqYkwSVSTsFZH/Wh+yqHhBrEoiEGOSou0RKRQQq5IIxJikaHtECgXEqiQCCahKoJwQV6QCWAJegSdgghCB1ALzwCFwpHlfgDfd3tKYAqqsgpQC5xkzzq3CtWtl3H2rGAVp0zynQBPQC9Q7+5uBHqAVSAIp/fqZAxnXPAs+vOnKdVgDmXHyjPrwr6jXq0q/FZC4NvMz0Bmgn0b1uJcYAWnQ8ddAWYBxjTruBiMgJc5/LHM+x3iN/6hjxjDUI32aY8enf0D9++QuySfIbMCrG1P/HcZAJp2KdGdZH1qAafVfYAwkDlw5uda/8Q1lrO6DGFwQY06ulM5KXcAaMAxUAwcBH5r+7abRzxPfWZhAFoF74BgY0dnpQe986/8aRHKIT0n9HjzjveRyDnsFALJLnvVbEHOSCMR4RRLAiUbiB585iUYNsOz86JCODaAuTCBJ53VMw/0sNCDiXP20vqqSWW3qau72Q6a8fZ7H8+ZN7/RZjxX95Q5RAAAAAElFTkSuQmCC">
                    <h2 class="text-white mb-2" data-toggle="counter-up">+200</h2>
                    <p class="text-white mb-0">Proyectos completos</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl service py-5">
        <div class="container">
            <h6 class="text-primary text-uppercase">// Nuestros Servicios //</h6>
            <h1 class="mb-5"></h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <img
                            src="data:image/png;base64,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">
                        <h4 class="m-0">Prueba</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                        data-bs-target="#tab-pane-2" type="button">
                        <img
                            src="data:image/png;base64,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">
                        <h4 class="m-0">Servicio</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                        data-bs-target="#tab-pane-3" type="button">
                        <img
                            src="data:image/png;base64,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">
                        <h4 class="m-0">E.Primaria</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.png"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Educación Primaria</h3>
                                <p class="mb-4">Ejercicio profesional en instituciones de Educación Básica Regular y
                                    Educación Básica Alternativa, tanto en entornos públicos como privados. Implica la
                                    aplicación de conocimientos pedagógicos para el desarrollo integral de estudiantes
                                    en diferentes contextos educativos.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Conocimientos básicos en razonamiento
                                    verbal.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Conocimientos básicos en razonamiento
                                    matemático.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Conocimientos básicos de cultura
                                    general.</p>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.png"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Perspectivas Ocupacionales</h3>
                                <p class="mb-4">Esta área implica compartir conocimientos especializados, facilitar
                                    el aprendizaje y contribuir al crecimiento académico de los estudiantes en niveles
                                    más avanzados.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Gerencia y gestión de instituciones
                                    educativas, abarcando la planificación estratégica, administración de recursos y
                                    liderazgo. </p>
                                <p><i class="fa fa-check text-success me-3"></i>Asesoramiento y gestión en proyectos
                                    educativos de desarrollo social. </p>
                                <p><i class="fa fa-check text-success me-3"></i>Promoción social, cultural y comunal,
                                    contribuyendo al desarrollo de comunidades a través de actividades que fomentan la
                                    inclusión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpeg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">UNT-Universidad Nacional de Trujillo</h3>
                                <p class="mb-4">Estamos emocionados de acompañarte en este camino educativo,
                                    contribuyendo al desarrollo integral de los estudiantes en sus años iniciales de
                                    educación.</p>
                                <p><i class="fa fa-check text-success me-3"></i>GESTIONA la formación integral para que los estudiantes</p>
                                <p><i class="fa fa-check text-success me-3"></i>INVESTIGA sobre prácticas pedagógicas y la Educación Primaria</p>
                                <p><i class="fa fa-check text-success me-3"></i>LIDERA la gestión educativa de manera democrática</p>
                                <p><i class="fa fa-check text-success me-3"></i>REFLEXIONA Y DEMUESTRA acciones en su práctica pedagógica</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
  
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s"
        style="background: #ff6600;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Complete el siguiente formulario para que podamos responder las
                            inquietudes que existan sobre nosotros</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Completa el formulario</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="NOMBRE"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="APELLIDO"
                                        style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="CORREO ELECTRONICO"
                                        style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date" class="form-control border-0 datetimepicker-input"
                                            placeholder="FECHA" data-target="#date1" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="MENSAJE"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-primary text-uppercase">// DOCENTES //</h6>
                <h1 class="mb-5">DOCENTES PRIMARIA</h1>
            </div>
            <div class="row g-6">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-left: 50px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">CECILIA DEL PILAR VÁSQUEZ MONDRAGÓN</h5>
                            <small>Licenciada en educación Primaria
                                Maestra Mención en INVESTIGACIÓN Y DOCENCIA UNIVERSITARIA
                                Doctora en educación
                                Segunda especialidad en Administración y planeamiento
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-left: 90px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">OLGA ESTELA MENDOZA LEÓN</h5>
                            <small>Licenciada en educación Primaria
                                Maestra Mención en Problemas de aprendizaje
                                Doctora en educación
                                Segunda especialidad en Neuropsicología infantil <br>
                            </small>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-left: 90px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">ANTHONY JOEL GONZALES PACHECO</h5>
                            <small>Licenciado en Educación Primaria
                                Maestría en Educación con mención en Pedagogía Universitaria
                                Doctorado en Educación
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
            </div>
            <div class="row g-6">
                <div class="col-lg-3 col-md-6 wow fadeInUp" style="margin-left: 50px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpeg" alt="" style="height: 329.40px; ">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">MANUEL QUIPUSCOA SILVESTRE</h5>
                            <small>Licenciado en Educación Primaria
                                Maestría en Educación, Mención en Pedagogía Universitaria
                                Segunda Especialidad en Tecnologías Educativa, Mención en Currículo y Estrategias de
                                Enseñanza y Aprendizaje
                                Licenciatura en Psicología
                                Doctor en Ciencias de la Educación
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp"  style="margin-left: 90px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-5.jpeg" alt="" style="height: 329.40px;">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">JESSICA ISABEL ALVA CHÁVEZ</h5>
                            <small>Licenciado en Educación Primaria
                                Maestría en Educación, Mención en Pedagogía Universitaria
                                Segunda Especialidad en Didáctica en la Comunicación
                                Doctora en Ciencias de la Educación
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" style="margin-left: 91px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-6.jpeg" alt="" style="height: 329.40px;">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Magna Ruth Meregildo Gómez</h5>
                            <small>Licenciada en Educación Primaria
                                Maestría en Educación, mención Gestión y Acreditación Educativa
                                Especialista en Tecnología Educativa, mención Administración y planeamiento educativo
                                Doctora en Ciencias de la Educación
                                <br>
                            </small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonio //</h6>
                <h1 class="mb-5">Testimonio de Nustros Estudiantes!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <a class="border-bottom"
                        href="https://drive.google.com/file/d/1VMYZe2kslEwPLTi37YcKvxByxQNAY3Oi/view?t=3">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                            style="width: 95px; height: 95px;"></a>☝
                    <h5 class="mb-0">Kimberli Jael Baltodano Contreras</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">El enfoque integral de la escuela, me brindó una sólida base pedagógica. Además,
                            el acompañamiento de cada maestro ayudó a desarrollar en mí una actitud reflexiva y
                            crítica ante mi práctica docente.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <a class="border-bottom"
                        href="https://drive.google.com/file/d/1T9GqxENYcHez2RcTaFjBYvZQSFbKdkC8/view?t=1">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                            style="width: 95px; height: 95px;"></a>☝
                    <h5 class="mb-0">DIANA JANET ALFARO GIL</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Incursioné en política ocupando el cargo de regidora de mi distrito
                            Florencia de Mora, 2019 hasta el año 2022. Desde el año 2010 dirijo mi propia
                            INSTITUCIÓN EDUCATIVA “TRASCENDER”, cargo que ocupo hasta la actualidad.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <a class="border-bottom"
                        href="https://drive.google.com/file/d/1m1ZPt6QWK2STPFlEr75b5wyqY6aWwIF6/view?t=1">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                            style="width: 95px; height: 95px;"></a>☝
                    <h5 class="mb-0"> Rosibel Nohely Jara Vasquez</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">En los años siguientes he logrado ascender de escala y actualmente me ubico
                            en la Tercera Escala Magisterial, lo que me ha permitido participar, en el año
                            2023, en el Concurso de Acceso a Cargos Directivos, logrando ganar una plaza
                            directiva.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <a class="border-bottom"
                        href="https://drive.google.com/file/d/1VlC9UvBotTb-eDwFxBIptxDsoohZmSZy/view">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                            style="width: 95px; height: 95px;"></a>☝
                    <h5 class="mb-0">Erick Wilfredo Chávarri García</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">En la actualidad me desenvuelvo
                            como docente nombrado en la escuela Pedro
                            Mercedes Ureña, más conocido como “Centro Viejo”,
                            también quería comentarles que me encargo de
                            capacitar a docentes a nivel nacional,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">DIRECCIÓN</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. Juan Pablo II, Trujillo 13011</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(044) 205513</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>tdsgunt@unitru.edu.pe</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/primariafacedunt.oficial"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/primaria.unt/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Educacion Primaria</h4>
                    <h6 class="text-light">270+</h6>
                    <p class="mb-4">Áreas de estudio</p>
                    <h6 class="text-light">#28</h6>
                    <p class="mb-0">En las mejores universidades del mundo</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">DATOS DE LA CARRERA</h4>
                    <h6 class="text-light">Duración de Estudios:</h6>
                    <p class="mb-4">10 Semestres Académicos</p>
                    <h6 class="text-light">Título Profesional:</h6>
                    <p class="mb-0">Licenciado en Educación Primaria</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Mensaje</h4>
                    <p>Dejanos aqui tu comentario. Gracias por visitarnos </p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Nombre completo">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Your email">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Comentario">
                                <button type="button" class="btn btn-primary py-2 ">Enviar</button>
                            </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="" href="">© 2024 Facultad de Educación y Ciencias de la Comunicación (Decanato)</p>
                        <a class="border-bottom" href="https://facedu.unitru.edu.pe/"> Educacion Primaria</a> | Todos
                        los derechos reservados.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>

@endsection