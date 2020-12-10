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

    <style>
        input[type=search] {
            width: 80%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            padding: 12px 12px 12px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=search]:focus {
            width: 100%;
        }

    </style>

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
                    <li class="active"><a href="index.php">Inicio</a></li>
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

    <main id="main">

        <!-- ======= Encabezado de la seccion ======= -->
        <div class="header-bg page-area">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                    <h1 class="title2">Nuestros servicios</h1>
                                </div>
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <h2 class="title3">Encuentra aquello que necesitas aqui:</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- fin del encabezado -->

        <!-- ======= contenido principal de la pagina de servicios======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="page-head-blog">
                            <div class="single-blog-page">

                                <!-- barra de busqueda -->
                                <form>
                                    <input type="search" name="buscar" placeholder="Buscar..">
                                    <!--    <input type="button" class="btn btn-rp" value="Ir"> -->
                                </form>
                                <!-- fin de la barra de busqueda -->
                            </div>
                            <br>
                            <!-- Barra laterial de secciones -->
                            <div class="single-blog-page">
                                <div class="left-blog">
                                    <h4>Categorias</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Portafolio</a>
                                        </li>
                                        <li>
                                            <a href="#">Proyectos</a>
                                        </li>
                                        <li>
                                            <a href="#">Diseño</a>
                                        </li>
                                        <li>
                                            <a href="#">Web</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Secciones disponibles -->
                            <div class="single-blog-page">
                                <div class="left-tags blog-tags">
                                    <div class="popular-tag left-side-tags left-blog">
                                        <h4>Etiquetas populares</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Portafolio</a>
                                            </li>
                                            <li>
                                                <a href="#">Proyectos</a>
                                            </li>
                                            <li>
                                                <a href="#">Diseño</a>
                                            </li>
                                            <li>
                                                <a href="#">Web</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin de barra lateral -->
                    <!-- inicio de seccion del blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- inicio seccion -->
                                <article class="blog-post-wrapper">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/blog/6.jpg" alt="" />
                                    </div>
                                    <div class="post-information">
                                        <h2>Blog image post layout</h2>
                                        <div class="entry-meta">
                                            <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i> march 28, 2016</span>
                                            <span class="tag-meta">
                                                <i class="fa fa-folder-o"></i>
                                                <a href="#">painting</a>,
                                                <a href="#">work</a>
                                            </span>
                                            <span>
                                                <i class="fa fa-tags"></i>
                                                <a href="#">tools</a>,
                                                <a href="#"> Humer</a>,
                                                <a href="#">House</a>
                                            </span>
                                            <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                                        </div>
                                        <div class="entry-content">
                                            <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse
                                                potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>
                                            <blockquote>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                                                    tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                            </blockquote>
                                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae
                                                lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                        </div>
                                    </div>
                                </article>
                                <div class="clear"></div>
                                <div class="single-post-comments">
                                    <div class="comments-area">
                                        <div class="comments-heading">
                                            <h3>6 comments</h3>
                                        </div>
                                        <div class="comments-list">
                                            <ul>
                                                <li class="threaded-comments">
                                                    <div class="comments-details">
                                                        <div class="comments-list-img">
                                                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                                                        </div>
                                                        <div class="comments-content-wrap">
                                                            <span>
                                                                <b><a href="#">demo</a></b>
                                                                Post author
                                                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                                                <a href="#">Reply</a>
                                                            </span>
                                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-details">
                                                        <div class="comments-list-img">
                                                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                                                        </div>
                                                        <div class="comments-content-wrap">
                                                            <span>
                                                                <b><a href="#">admin</a></b>
                                                                Post author
                                                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                                                <a href="#">Reply</a>
                                                            </span>
                                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="threaded-comments">
                                                    <div class="comments-details">
                                                        <div class="comments-list-img">
                                                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                                                        </div>
                                                        <div class="comments-content-wrap">
                                                            <span>
                                                                <b><a href="#">demo</a></b>
                                                                Post author
                                                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                                                <a href="#">Reply</a>
                                                            </span>
                                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">¿Interesado el agun servicio?</h3>
                                        <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p>Name *</p>
                                                    <input type="text" />
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p>Email *</p>
                                                    <input type="email" />
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p>Website</p>
                                                    <input type="text" />
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                    <p>Website</p>
                                                    <textarea id="message-box" cols="30" rows="10"></textarea>
                                                    <input type="submit" value="Post Comment" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- single-blog end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Final de la pagina de servicios-->

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

    <!-- Vendor JS Files -->
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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
