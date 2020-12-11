<?php
session_start();
 
if(!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 2){
    header('Location: ../../index.php');
    exit;
} else {
    // Show users the page!
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Administrador</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons - Insertar una vez tengamos el icono nuevo 
    
    https://code.tutsplus.com/es/tutorials/create-a-php-login-form--cms-33261
    
    
    -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!--Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- CSS Externos -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Estilos Principales de la página -->
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- ======= Encabezado ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html">Soluciones&nbsp;<span>RP</span></a></h1>
                <!-- Usar linea debajo una vez tengamos el logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#"><?php echo $_SESSION['nombre']; ?></a></li>
                    <li class="active"><a href="#header">Inicio</a></li>                    
                    <li><a href="panel.php">Panel</a></li>
                    <li><a href="#contact">Contacto</a></li>

                    <li>
                        <!-- Menu desplegable -->
                        <div class="dropdown show"><a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                M&aacute;s
                            </a>

                            <div class="dropdown-menu" aria-labelledby="Menu desplegable">
                                <a style="color: black" class="dropdown-item" href="#">Portafolio</a>
                                <div class="dropdown-divider"></div>
                                <a style="color: black" class="dropdown-item" href="#">Noticias</a>
                                <div class="dropdown-divider"></div>
                                <a style="color: black" href="#" class="dropdown-item">Cotizaci&oacute;n</a>
                                <div class="dropdown-divider"></div>
                                <a style="color: black" href="#" class="dropdown-item">Preguntas frecuentes</a>
                            </div>
                        </div>

                    </li>

                    <li><a class="iniciar-sesion hover page-scroll" href="../../controller/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
                </ul>
            </nav><!-- fin del .nav-menu -->

        </div>
    </header><!-- Fin encabezado -->

    <!-- ======= Sección del Slider ======= -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="../../assets/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
                <img src="../../assets/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
                <img src="../../assets/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
            </div>

            <!-- Slider 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- linea 1 -->
                                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Soluciones acordes a tus necesidades</h2>
                                </div>
                                <!-- linea 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h1 class="title2">Estamos a tus ordenes para mejorar tu negocio</h1>
                                </div>
                                <!-- linea 3 -->
                                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">Ver Servicios</a>
                                    <a class="ready-btn page-scroll" href="#about">&#43; informaci&oacute;n</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                                <!-- linea 1 -->
                                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">¿Neceistas capacitaci&oacute;n?</h2>
                                </div>
                                <!-- linea 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Contamos con modalidades para todo tipo de ambiente</h1>
                                </div>
                                <!-- linea 3 -->
                                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">Consultar modalidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- linea 1 -->
                                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Contamos con el Software que necesitas para mejorar tus procesos</h2>
                                </div>
                                <!-- linea 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Consulta las formas de implementación</h1>
                                </div>
                                <!-- linea 3 -->
                                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">Ver Software</a>
                                    <a class="ready-btn page-scroll" href="#about">M&aacute;s información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- fin Slider -->

    <main id="main">

        <!-- ======= Seccion nosotros ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>¿Qui&eacute;nes Somos?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Inicio single-well -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="assets/img/about/uno.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Fin single-well -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">Soluciones tecnol&oacute;gicas de alto nivel</h4>
                                </a>
                                <p style="text-align: justify; text-justify: inter-word;">
                                    Somos un proyecto mexicano que brinda soluciones tecnológicas a las pequeñas y medianas empresas, especializados en la automatización de procesos administrativos con las mejores alternativas para el cliente.
                                </p>
                                <ul>
                                    <a href="#">
                                        <h4 class="sec-head">Nuestros Valores</h4>
                                    </a>
                                    <li>
                                        <i class="fa fa-check"></i> Empat&iacute;a.
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Honestidad.
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Integridad Laboral.
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Responsabilidad.
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Disciplina.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- fin columnas-->
                </div>
            </div>
        </div><!-- Fin de nosostros -->

        <!-- ======= Seccion Servicios ======= -->
        <div id="services" class="services-area area-padding ocultar-div">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline services-head text-center">
                            <h2>Nuestros Servicios</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- inicio Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-code"></i>
                                    </a>
                                    <h4>Desarrollo Web</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque velit dicta, delectus incidunt porro officiis fugiat, dolore explicabo. Dolor ipsum dolore debitis, culpa dolorem libero maxime, incidunt mollitia adipisci tenetur.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                    <h4>Diseño Gr&aacute;fico</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- fin col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-wordpress"></i>
                                    </a>
                                    <h4>Mejora de procesos</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- fin col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                    <h4>Marketing Digital</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                    <!-- fin Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-bar-chart"></i>
                                    </a>
                                    <h4>Analisis de negocio</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                    <!-- fin Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-ticket"></i>
                                    </a>
                                    <h4>Soporte Técnico 24/7</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- fin seccion servicios -->

        <!-- ======= Seccion habilidades/multiproposito ======= -->
        <div class="our-skill-area fix hidden-sm">
            <div class="test-overly"></div>
            <div class="skill-bg area-padding-2">
                <div class="container">
                    <!-- fin section-heading  -->
                    <div class="row">
                        <!-- inicio single-skill  -->
                        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled> <!-- Quitar los porcentajes en el Main JS  -->
                                    <h3 class="progress-h4">Diseño Web</h3>
                                </div>
                            </div>
                        </div>
                        <!-- fin single-skill  -->
                        <!-- inicio single-skill  -->
                        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                    <h3 class="progress-h4">Diseño Gr&aacute;fico</h3>
                                </div>
                            </div>
                        </div>
                        <!-- fin single-skill  -->
                        <!-- inicio single-skill  -->
                        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                    <h3 class="progress-h4">Desarrollo BackEnd</h3>
                                </div>
                            </div>
                        </div>
                        <!-- fin single-skill  -->
                    </div>
                </div>
            </div>
        </div><!-- fin seccion habilidades -->

        <!-- ======= Seccion equipo [Recorda colocar los enlaces a las redes solciales correspondientes a cada miembro del equipo]======= -->
        <div id="team" class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Nuestro Equipo</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/img/team/1.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Erick Blanco</h4>
                                <p>Seo</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de columna -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/img/team/2.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Andres Mora</h4>
                                <p>Desarrollador Web</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de columna -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/img/team/3.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Carmen Salazar</h4>
                                <p>Diseñadora Web</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de columna -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/img/team/4.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Jhon P&eacute;rez</h4>
                                <p>Contador</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de comlumna -->
                </div>
            </div>
        </div><!-- Fin seccion equipo -->

        <!-- ======= Seccion cotizaciones ======= -->
        <div class="reviews-area">
            <div class="row no-gutters">
                <div class="col-lg-6 py-0">
                    <img src="assets/img/about/2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <h2>¿Interesado en nuestro trabajo?</h2>
                        <h5 style="text-align: justify; text-justify: inter-word;">Contamos con un equipo de trabajo de alto calibre que puede ayudarte a alcanzar el nivel que deseas .</h5>
                        <a href="#contact" class="ready-btn scrollto">Obten una cotizaci&oacute;n</a>
                    </div>
                </div>
            </div>
        </div><!-- fin seccion cotizaciones -->

        <!-- ======= inicio Seccion portafolio ======= -->
        <div id="portfolio" class="portfolio-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Nuestro trabajo</h2>
                        </div>
                    </div>
                </div>
                <div class="row wesome-project-1 fix">
                    <!-- inicio pagina de portafolio -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="awesome-menu ">
                            <ul class="project-menu">
                                <li>
                                    <a href="#" class="active" data-filter="*">Todo</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".development">Desarrollo</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".design">Diseño</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".photo">Photoshop</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row awesome-project-content">
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/1.jpg">
                                            <h4>Negocios</h4>
                                            <span>Desarrollo Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project  -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/2.jpg">
                                            <h4>Ideas</h4>
                                            <span>Photoshop</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project  -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/3.jpg">
                                            <h4>Naturaleza</h4>
                                            <span>Diseño Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project  -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/4.jpg">
                                            <h4>Equipo Creativo</h4>
                                            <span>Diseño Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project  -->
                    <div class="col-md-4 col-sm-4 col-xs-12 development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                                <div class="add-actions text-center text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/5.jpg">
                                            <h4>Otras opciones</h4>
                                            <span>Desarrollo Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project  -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/6.jpg">
                                            <h4>M&aacute;s</h4>
                                            <span>Photoshop</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                </div>
            </div>
        </div><!-- fin seccion portafolio -->

        <!-- ======= seccion polizas ======= -->
        <div id="pricing" class="pricing-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Polizas</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
                            <h3>b&aacute;sico <br /> <span>$1600 / mes</span></h3>
                            <ol>
                                <li class="check">Sistema Online</li>
                                <li class="check cross">Acceso completo</li>
                                <li class="check">App m&oacute;vil</li>
                                <li class="check">Multiples plataformas</li>
                                <li class="check cross">Capacitaci&oacute;n</li>
                                <li class="check cross">Soporte 24/7</li>
                                <li class="check">Transacciones en lineas</li>
                                <li class="check cross">Asesoria</li>
                            </ol>
                            <button>Solicitar ahora</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list active">
                            <span class="saleon">Oferta</span>
                            <h3>Essentials <br /> <span>$3000 / mes</span></h3>
                            <ol>
                                <li class="check">Sistema Online</li>
                                <li class="check">Acceso completo</li>
                                <li class="check">App m&oacute;vil</li>
                                <li class="check">Multiples plataformas</li>
                                <li class="check cross">Capacitaci&oacute;n</li>
                                <li class="check">Soporte 24/7</li>
                                <li class="check">Transacciones en lineas</li>
                                <li class="check cross">Asesoria</li>
                            </ol>
                            <button>Solicitar ahora</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
                            <h3>premium <br /> <span>$4200 / mes</span></h3>
                            <ol>
                                <li class="check">Sistema Online</li>
                                <li class="check">Acceso completo</li>
                                <li class="check">App m&oacute;vil</li>
                                <li class="check">Multiples plataformas</li>
                                <li class="check">Capacitaci&oacute;n</li>
                                <li class="check">Soporte 24/7</li>
                                <li class="check">Transacciones en lineas</li>
                                <li class="check">Asesoria</li>
                            </ol>
                            <button>Solicitar ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- fin polizas -->

        <!-- ======= seccion de testimonios [Consultar viabilidad y personas que puedan dar su testimonio] ======= -->
        <div class="testimonials-area">
            <div class="testi-inner area-padding">
                <div class="testi-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- Start testimonials Start -->
                            <div class="testimonial-content text-center">
                                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                                <!-- start testimonial carousel -->
                                <div class="owl-carousel testimonial-carousel">
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <p style="text-align: justify; text-justify: inter-word;" s>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum iure, doloribus alias amet explicabo sed molestiae et iste! Deserunt magni iste deleniti consequuntur reprehenderit, porro tempora tempore quae et quia.
                                            </p>
                                            <h6>Julieta - Aspel M&eacute;xico</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <p style="text-align: justify; text-justify: inter-word;">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo possimus quod laborum voluptas similique vero tempora ducimus nostrum debitis praesentium alias a, ipsam. Corporis alias ut, ullam, pariatur ipsa ad!
                                            </p>
                                            <h6>Eduardo - Soluciones RP</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <p style="text-align: justify; text-justify: inter-word;">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ex totam odio quae, et fuga sunt. Sit neque tempora quod quibusdam ex inventore praesentium commodi explicabo modi, cupiditate necessitatibus cumque.
                                            </p>
                                            <h6>Frida - SEDEMAR</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                            <!-- End testimonials end -->
                        </div>
                        <!-- End Right Feature -->
                    </div>
                </div>
            </div>
        </div><!-- fin seccion testimonios -->

        <!-- ======= Seccion noticias ======= -->
        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>&Uacute;ltimas Noticias</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--  -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">13 comentarios</a> <!-- Generar funcion en PHP para extraer el numero de comentarios, de mantener la opción de noticias -->
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2020-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Assumenda repud eum veniam</a>
                                    </h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Leer más</a>
                                </span>
                            </div>
                        </div>
                        <!-- -->
                        <!--  -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">130 comentarios</a> <!-- Generar funcion en PHP para extraer el numero de comentarios -->
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2020-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Explicabo magnam quibusdam.</a>
                                    </h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Leer m&aacute;s</a>
                                </span>
                            </div>
                            <!--  -->
                        </div>
                        <!-- -->
                        <!-- -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">10 comentarios</a> <!-- Generar funcion en PHP para extraer el numero de comentarios -->
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2020-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Leer m&aacute;s</a>
                                </span>
                            </div>
                        </div>
                        <!-- -->
                    </div>
                </div>
            </div>
        </div><!--  -->

        <!-- ======= Seccio de cotizaciones ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>¿Te ha gustado nuestro trabajo?</h3>
                            <a class="sus-btn" href="#">Solicita una cotizaci&oacute;n </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- fin de cotizaciones -->

        <!-- ======= inicio seccion de contacto y mapa ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contactanos :D</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- columnas -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        Tel: +52 55-5362-0004<br>
                                        <span>Lunes a Viernes (9am-6pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- columnas -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        Correo: info@solucionesrp.com<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- columnas -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        Av. Mariano Escobedo 33, Zaragoza<br>
                                        <span>54457 Villa Nicolás Romero, Méx.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Mapa de google -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Start Map -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3757.9554146372557!2d-99.3241631!3d19.6292038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2191e6a1a801f%3A0xf759d47ce52d8660!2sSoluciones%20RP!5e0!3m2!1ses-419!2smx!4v1606688515176!5m2!1ses-419!2smx" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <!-- End Map -->
                        </div>
                        <!-- fin mapa -->

                        <!-- formulario -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form contact-form">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su nombre" data-rule="minlen:6" data-msg="Por favor ingrese minimo 6 caracteres" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Escriba su correo" data-rule="email" data-msg="Favor de ingresar un correo valido" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-msg="Especifique el asunto" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba su mensaje, por favor" placeholder="¿En que podemos ayudarle?"></textarea>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="loading">Cargando...</div>
                                        <div class="error-message">Algo ha salido mal :c</div>
                                        <div class="sent-message">Su mensaje ha sido enviado, Gracias!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Enviar</button></div>
                                </form>
                            </div>
                        </div>
                        <!-- fin formulario -->
                    </div>
                </div>
            </div>
        </div><!-- fin seccion contacto-->

    </main><!-- fin del #main -->

    <!-- ======= pie de pagina ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h2>Soluciones&nbsp;<span>RP</span></h2>
                                </div>
                                <p style="text-align: justify; text-justify: inter-word;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure minus perferendis ab. Voluptatum repudiandae doloremque doloribus esse magni nam sed fuga eos hic eum distinctio similique, tenetur iure architecto beatae?
                                </p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin columna 1 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Informaci&oacute;n</h4>
                                <p style="text-align: justify; text-justify: inter-word;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +52 55-5362-0004</p>
                                    <p><span>Email:</span> info@solucionesrp.com</p>
                                    <p><span>Horario:</span> 9am a 6pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin columna 2 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>Soluciones RP</strong>. <br>Todos los derechos reservados
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- fin pie de página -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JS Externo -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>
    <script src="../../assets/vendor/appear/jquery.appear.js"></script>
    <script src="../../assets/vendor/knob/jquery.knob.js"></script>
    <script src="../../assets/vendor/parallax/parallax.js"></script>
    <script src="../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../../assets/vendor/venobox/venobox.min.js"></script>

    <!-- Js Principal de la página -->
    <script src="../../assets/js/main.js"></script>

   
   

</body>

</html>
