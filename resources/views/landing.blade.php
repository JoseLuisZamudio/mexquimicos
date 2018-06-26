<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Mexquimicos</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.min.css" rel="stylesheet">

    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="#" target="_blank">
                <strong>Mexquimicos</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Productos
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link border border-light rounded">
                            <i></i>Login
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view">

                    <!--Video source-->
                    <video class="" autoplay loop>
                        <source src="https://mdbootstrap.com/img/video/city.mp4" type="video/mp4" />
                    </video>

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Bienvenido a Mexquimicos</strong>
                            </h1>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Calidad y servicio que nos respaldan.</strong>
                            </p>

                            <a target="_blank" href=# class="btn btn-outline-white btn-lg">Regístrate con nosotros
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view">

                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                    </video>

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Bienvenido a Mexquimicos</strong>
                            </h1>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Calidad y servicio que nos respaldan.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Regístrate con nosotros
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view">

                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                    </video>

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Bienvenido a Mexquimicos</strong>
                            </h1>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Calidad y servicio que nos respaldan.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Regístrate con nosotros
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Main info-->
            <section class="mt-5 wow fadeIn">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <img src="{{asset('img/Female-scientist-iStock_000050271018_Small.jpg')}}" class="img-fluid z-depth-1-half" alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Servicios profesionales</h3>
                        <p>En Mexquimicos contamos con profesionales altamente capacitados</p>
                        <p>Lee los detalles a continución</p>
                        <!-- Main heading -->

                        <hr>

                        <p>
                            <strong>15+</strong> Ingenieros químicos
                            <strong>600+</strong> Productos distintos,
                            <strong>74+</strong> Servicios al cliente</strong>
                        </p>

                        <!-- CTA -->
                        <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-grey btn-md">Descargar información adicional
                            <i class="fa fa-download ml-1"></i>
                        </a>
                        <a target="_blank" href="https://mdbootstrap.com/components/" class="btn btn-grey btn-md">Demostración gratuita
                            <i class="fa fa-image ml-1"></i>
                        </a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Main info-->

            <hr class="my-5">

            <!--Section: Main features & Quick Start-->
            <section>

                <h3 class="h3 text-center mb-5">Acerca de Mexquimicos</h3>

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 px-4">

                        <!--First row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fa fa-handshake-o "aria-hidden="true"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Comprometidos</h5>
                                <p class="grey-text">En Mexquimicos estamos comprometidos con nustros clientes, es por eso que brindamos la mejor atención posible</p>
                            </div>
                        </div>
                        <!--/First row-->

                        <div style="height:30px"></div>

                        <!--Second row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fa fa-book fa-2x blue-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Gran documentación</h5>
                                <p class="grey-text">Puedes encontrar una amplia documentación de todos nuestros productos
                                </p>
                            </div>
                        </div>
                        <!--/Second row-->

                        <div style="height:30px"></div>

                        <!--Third row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fa fa-graduation-cap fa-2x cyan-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Gran soporte</h5>
                                <p class="grey-text">Nuestros ingenieros químicos son de excelencia, por lo que puedes realizar cualquier pregunta y  ellos te resolveran adecuadamente</p>
                            </div>
                        </div>
                        <!--/Third row-->

                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12">

                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="{{asset('img/Mira-estas-6-increibles-reacciones-quimicas-000.jpg')}}" class="img-fluid z-depth-1-half" alt="">
                        </div>
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/Grid row-->

            </section>
            <!--Section: Main features & Quick Start-->



        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">



        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="#" target="_blank"> mexquimicos.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
    </body>
</html>
