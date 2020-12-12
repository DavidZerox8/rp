<?php

  session_start();

  // isset verifica si existe una variable. 
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Soluciones RP</title>
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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">


    <!-- Estilos Principales de la página -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- ======= Encabezado ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.php">Soluciones&nbsp;<span>RP</span></a></h1>
                <!-- Usar linea debajo una vez tengamos el logo -->
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="nav" class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Inicio</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#team">Equipo</a></li>
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

                    <li><a name="button" id="login" class="iniciar-sesion hover page-scroll" data-toggle="modal" data-target="#Modal">Iniciar Sesión</a></li>
                </ul>
            </nav><!-- fin del .nav-menu -->

        </div>
    </header><!-- Fin encabezado -->

    <!-- ======= Sección del Slider ======= -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="assets/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
                <img src="assets/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
                <img src="assets/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
            </div>

            <!-- Slider 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- linea 1 -->
                                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Conocenos.</h2>
                                </div>
                                <!-- linea 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h1 class="title2">Estamos a tus ordenes para mejorar tu negocio.</h1>
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
                                    <h2 class="title1">¿Buscas capacitaci&oacute;n?</h2>
                                </div>
                                <!-- linea 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Contamos con modalidades para todo tipo de ambiente.</h1>
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
                                    <h2 class="title1">¿Buscar agilizar tus procesos?</h2>
                                </div>
                                <!-- linea 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Contamos con el software que necesitas.</h1>
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
                        <div class=" text-center">
                            <h2>¿Qui&eacute;nes Somos?</h2>
                            <table border="0" width="100%">
                                <td style="text-align: center;">
                                    <div class="services-details">
                                        <h4 style="cursor: pointer;" class="info_b page-scroll" data-toggle="modal" data-target="#vision">Visi&oacute;n</h4>
                                    </div>
                                </td>

                                <td style="text-align: center;">
                                    <div class="services-details">
                                        <h4 style="cursor: pointer;" class="info_b  page-scroll" data-toggle="modal" data-target="#mision">Misi&oacute;n</h4>
                                    </div>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Inicio single-well -->
                    <div class="col-md-6 col-sm-6 col-xs-12"> <br> <br>
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="assets/img/about/uno.jpg" alt="">
                                </a>
                            </div>
                        </div> <br> <br>

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
                                <p>Nuestras soluciones tecnológicas se apegan a
                                    estadares de calidad y facilitan el cumplimiento
                                    de las reformas fiscales actuales.</p>
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
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <h4 style="color:#3EC1D5">Asesoria "Aspel"</h4>
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
                                        <i class="fa fa-users"></i>
                                    </a>
                                    <h4 style="color:#3EC1D5">Polizas Presenciales</h4>
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
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-file-word-o"></i>
                                    </a>
                                    <h4 style="color:#3EC1D5">Creaci&oacute;n de Formatos</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                    <!-- Fin de las priemras 3 columnas -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- fin col-md-4 -->
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-gears"></i>
                                    </a>
                                    <h4 style="color:#3EC1D5">Capacitaci&oacute;n</h4>
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
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-desktop"></i>
                                    </a>
                                    <h4 style="color:#3EC1D5">Instalación de Software</h4>
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
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-code"></i>
                                    </a>
                                    <h4 style="color:#3EC1D5">Desarrollo Web</h4>
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- fin de sección servicio -->
                        </div>
                    </div>
                </div>
            </div> <br>
            <center><a href="servicios.php"><button class="btn btn-rp">Conocer m&aacute;s sobre nuestros servicios</button></a></center>
        </div><!-- fin seccion servicios -->

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



                <!-- Injcio segunda columna -->
                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12">

                    </div>

                    <div class="col-sm-3 col-sm-4 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/img/team/5.jpg" alt="">
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
                                <h4>Lic. Ericka Monroy</h4>
                                <p>Coordinadora de Proyectos Aspel</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">

                    </div>

                </div>

                <!-- Fin de la segunda columna -->

                <div class="row">
                    <div class="col-gd-2 col-sm-3 col-xs-12">
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
                                <h4>Lic. Cesar Zamora</h4>
                                <p>Coordinador de operaciones</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de columna -->
                    <div class="col-gd-2 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/img/team/6.jpg" alt="">
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
                                <h4>Lileana Blanco</h4>
                                <p>Coordinadora de Ventas</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de columna -->
                    <div class="col-gd-2 col-sm-3 col-xs-12">
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
                                <h4>Frida Reyes</h4>
                                <p>Asistente Administrativa</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de columna -->
                    <div class="col-gd-2 col-sm-3 col-xs-12">
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
                                <h4>David Mart&iacute;nez</h4>
                                <p>Soporte T&eacute;cnico Especializado</p>
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

                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <br>
                        <h2>¿Interesado?</h2>
                        <h5 style="text-align: justify; text-justify: inter-word;">Contamos con un equipo de trabajo de alto calibre que puede ayudarte a alcanzar el nivel que deseas .</h5>
                        <a href="#contact" class="ready-btn scrollto">Obten una cotizaci&oacute;n</a>
                        <br> <br>
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
                                    <a href="#" data-filter=".capacitacion">Capacitaci&oacute;n</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".software">Software</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".redes">Redes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row awesome-project-content">
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 capacitacion">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/1.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/1.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->

                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 capacitacion">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/20.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/20.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 software">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/12.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/12.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 capacitacion">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/4.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/4.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 capacitacion">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/9.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/9.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 redes">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/21.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/21.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 software">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/7.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/7.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 redes">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/15.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/15.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin single-awesome-project  -->
                    <!-- inicio single-awesome-project -->
                    <div class="col-md-4 col-sm-4 col-xs-12 redes">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="assets/img/portfolio/capac/23.JPG" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/capac/23.JPG">
                                            <h4>Capacitaci&oacute;n</h4>
                                            <span>ASPEL</span>
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

        <!-- Modal Login -->
        <div class="modal fade" id="Modal" style="position: fixed !important; z-index: 10000;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Iniciar Sesi&oacute;n</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="controller/loginController.php" method="post">
                            <div class="form-group">
                                <label for="email">Usuario:</label>
                                <input name="usuario_l" type="text" class="form-control" placeholder="Ingrese su correo" id="usuario_l">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contrase&ntilde;a:</label>
                                <input name="clave_l" type="password" class="form-control" placeholder="Escriba su contraseña" id="clave_l">
                            </div>

                            <button name="login" type="submit" class="btn btn-success" style="background-color: #3ec1d5; border-color: #3ec1d5;">Acceder</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal de mision -->

        <div class="modal fade" id="vision">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nuestra visi&oacute;n</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p style="text-align: justify; text-justify: inter-word;">Ser una empresa referente con soluciones
                            tecnol&oacute;gicas para implementar procesos
                            exitosos acorde a las necesidades de nuestros
                            cliente y un servicio basado en la empatía.
                        </p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal de vision -->

        <div class="modal fade" id="mision">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nuestra misi&oacute;n</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p style="text-align: justify; text-justify: inter-word;">Proveer a las pequeñas y medianas empresas
                            con avanzadas e innovadoras herramientas
                            tecnol&oacute;gicas para automatizar sus procesos
                            productivos.

                        </p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

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
                                    Tenemos el prop&oacute;sito de ayudar a alcanzar la excelencia de nuestros clientes, apoy&aacute;ndolos en el aumento de su competitividad y a lograr su objetivo organizacional.
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
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +52 55-5362-0004.</p>
                                    <p><span>Email:</span> info@solucionesrp.com.</p>
                                    <p><span>Horario:</span> 9am a 6pm.</p>
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

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/appear/jquery.appear.js"></script>
    <script src="assets/vendor/knob/jquery.knob.js"></script>
    <script src="assets/vendor/parallax/parallax.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Js Principal de la página -->
    <script src="assets/js/main.js"></script>

</body>

</html>
