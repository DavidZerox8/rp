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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#about">Nosotros</a></li>
                    <li class="active"><a href="index.php#services">Servicios</a></li>
                    <li><a href="index.php#team">Equipo</a></li>
                    <li><a href="index.php#contact">Contacto</a></li>

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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="page-head-blog">
                            <div class="single-blog-page">

                                <!-- barra de busqueda -->
                                <form>
                                    <input type="search" name="buscar" placeholder="&#xF002; Buscar" id="myInput" onkeyup="myFunction()">
                                    <!--    <input type="button" class="btn btn-rp" value="Ir"> -->
                                </form>
                                <!-- fin de la barra de busqueda -->
                            </div>
                            <br>

                            <div class="single-blog-page">
                                <div class="left-blog" style="background: white;">
                                    <ul id="myUL" style="display: none;">
                                        <li>
                                            <a href="index.php">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="about.html">Nosotros</a>
                                        </li>
                                        <li>
                                            <a href="services.html">Servicios</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contacto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

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
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- inicio seccion -->
                                <article class="blog-post-wrapper">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/blog/6.jpg" alt="" />
                                    </div>
                                    <div class="post-information">
                                        <h2 style="color:#3EC1D5">Asesor&iacute;a ASPEL</h2>
                                        <div class="entry-content">
                                            <p style="text-align: justify; text-justify: inter-word;">Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse
                                                potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>
                                            <blockquote>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                                                    tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                            </blockquote>
                                            <p style="text-align: justify; text-justify: inter-word;">Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae
                                                lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                        </div>

                                        <!-- ======= seccion polizas ======= -->
                                        <div id="pricing" class="pricing-area area-padding" style="background: #F9F9F9 !important;">
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
                                    </div>
                                </article>
                                <div class="single-post-comments">
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">¿Interesado el algun servicio?</h3>
                                        <span class="email-notes">Llene el siguiente formulario y a la brevedad nos pondremos en contacto con usted. *</span>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p>Nombre *</p>
                                                    <input type="text" required />
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p>Correo *</p>
                                                    <input type="email" required />
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <p>Asunto *</p>
                                                    <input type="text" required />
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                    <p>Mensaje *</p>
                                                    <textarea id="message-box" cols="30" rows="10" required></textarea>
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

    </main><!-- fin del #main -->

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
                                    <a href="#"><img src="assets/img/portfolio/capac/1.JPG" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/capac/2.JPG" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/capac/3.JPG" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/capac/4.JPG" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/capac/5.JPG" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/capac/6.JPG" alt=""></a>
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

    <!-- Funcion para buscar dentro del sitio -->
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            document.getElementById("myUL").style.display = "block";
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                    /*document.getElementById("alerta").innerHTML = "No se encontraron resultados";*/
                }
            }
        }

    </script>
    <!-- Fin de la funcion de buscar -->

</body>

</html>
