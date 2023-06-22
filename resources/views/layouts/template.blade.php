<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio - José Miguel Repiso</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Home</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#services">Servicios</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre mí</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle border border-primary" src="assets/img/avataaars.svg" alt="mi foto" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0 lh-sm">¡Hola!<span class="saludar">👋🏻</span> <br> <span class="anim-title"> Soy José Miguel Repiso</span> </h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <h2 class="masthead-subheading font-weight-bold fs-1 mb-5"><span class="anim-subtitle"> Desarrollador web Full-Stack y de aplicaciones para dispositivos móviles</span> </h2>
                <div class=" d-flex justify-content-center align-items-center anim-img">
                    <img class="d-block w-75 p-3" src="./assets/img/portfolio/hero-devices.svg" alt="img portada">
                </div>
                 
            </div>
        </header>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @yield('content')
                   
                </div>
            </div>
        </section>

         <!-- Services Section-->
        <section class="page-section bg-secondary text-white" id="services">
            <!-- Services Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Servicios</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
             <!--Slider -->
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner p-3">
                    <div class="carousel-item active">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img class="p-3" src="./assets/img/portfolio/web_dev.svg" alt="item 1">
                            <div class="fs-3 text-primary p-3">
                                <h3 class="text-center font-weight-bold">Desarrollo web</h3>
                                <p class="text-center">Diseño y desarrollo web en el lado cliente y en el lado servidor</p>
                            </div>
                        </div>
                    </div>
                
                    <div class="carousel-item">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="p-3" src="./assets/img/portfolio/mobile_dev.svg" alt="item 2">
                            <div class="fs-3 p-3 text-primary">
                                <h3 class="text-center font-weight-bold">Desarrollo apps móviles</h3>
                                <p class="text-center">Diseño y desarrollo de apps para móviles y tablets</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="p-3" src="./assets/img/portfolio/server_dev.svg" alt="item 3">
                            <div class="fs-3 p-3 text-primary">
                                <h3 class="text-center font-weight-bold">Hosting y mantenimiento web</h3>
                                <p class="text-center">Alojamiento y mantenimiento de tu página web</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        < <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="p-3" src="./assets/img/portfolio/server_dev.svg" alt="item 4">
                            <div class="fs-3 p-3 text-primary">
                                <h3 class="text-center font-weight-bold">Mantenimiento de Hardware y redes</h3>
                                <p class="text-center">Instalación y mantenimiento de equipos informáticos en red</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

         <!-- About Section-->
         <section class="page-section bg-primary text-white" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre mí</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">
                          Técnico superior en desarrollo de aplicaciones multiplataforma y en desarrollo web. Experiencia en desarrollo de aplicaciones de escritorio, apps móviles, diseño y desarrollo web y bases de datos relacionales y no relacionales.
                        </p>
                    </div>
                    <div class="col-lg-4 me-auto">
                        <p class="lead">
                         Desarrollador web innovador, proactivo y con capacidad para desarrollar páginas web elegantes y diseños de aplicaciones atractivos. Organizado y con capacidad de multitarea y aprendizaje autónomo. Experiencia en programación de proyectos, mejora de diseños y verificación de código. Habilidades de desarrollo web y aplicaciones móviles.
                        </p>
                    </div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="#">
                        <i class="fas fa-download me-2"></i>
                        Descargar CV
                    </a>
                </div>
            </div>
        </section>

        <!-- Skills Section-->
        <section class="page-section border rounded ms-5 me-5 mb-5 bg-white" id="skils">
            <h2 class="text-uppercase text-center font-weight-bold">Mis aptitudes</h2>
            <!-- Icon Divider-->
           <!-- Icon Divider-->
           <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="container d-flex justify-space-around flex-wrap">
                <div class="col-sm-4 p-3 fs-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="./assets/img/portfolio/frontend.jpg" alt="image" class="img-fluid"/>
                    </div>          
                    <h2 class="text-capitalize text-center font-weight-bold">Frontend</h2>
                    <p>Valoro la estructura de contenido simple, los patrones de diseño limpios y las interacciones lógicas.</p>
                    <p class="text-primary text-capitalize font-weight-bold">Tecnologías:</p>
                    <ul class="list-langs">
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-html.svg" alt="html">HTML</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-css.svg" alt="css">CSS</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-js.svg" alt="js">JavaScript</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-jquery.svg" alt="jquery">Jquery</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-react.svg" alt="react">REACT</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-vuejs.svg" alt="vuejs">VUEjs</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-bootstrap.svg" alt="bootstrap">Bootstrap</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-tailwind-css.svg" alt="tailwindcss">TailWind CSS</li>
                    </ul>
                </div> 
                <div class="col-sm-4 p-3 fs-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="./assets/img/portfolio/backend.jpg" alt="image" class="img-fluid"/>
                    </div>          
                    <h2 class="text-capitalize text-center font-weight-bold">Backend</h2>
                    <p>Me gusta codificar cosas desde cero y disfruto dando vida a las ideas en el servidor.</p>
                    <p class="text-primary text-capitalize font-weight-bold">Tecnologías:</p>
                    <ul class="list-langs">
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-php.svg" alt="js">PHP</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-java.svg" alt="js">Java</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-python.svg" alt="js">Python</li> 
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-laravel.svg" alt="js">Laravel</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-spring-boot.svg" alt="js">SpringBoot</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-django.svg" alt="js">Django</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-nodejs.svg" alt="js">Nodejs</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-mysql.svg" alt="js">MySQL</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-mongodb.svg" alt="js">MongoDB</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-junit.svg" alt="js">Testing</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-github.svg" alt="js">GitHub</li>
                    </ul>
                </div> 
                <div class="col-sm-4 p-3 fs-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="./assets/img/portfolio/mobile.jpg" alt="image" class="img-fluid"/>
                    </div>          
                    <h2 class="text-capitalize text-center font-weight-bold">Mobile App</h2>
                    <p>Me encanta diseñar apps atractivas y funcionales.</p>
                    <p class="text-primary text-capitalize font-weight-bold">Tecnologías:</p>
                    <ul class="list-langs">
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-java.svg" alt="js">Java</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-kotlin.svg" alt="js">Kotlin</li>

                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-flutter.svg" alt="js">Flutter</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-xamarin.svg" alt="js">Xamarin</li>
                        <li><img class="img-fluid icon-li" decoding="async" src="./assets/img/portfolio/icons8-testing.svg" alt="js">Testing</li>
                    </ul>
                </div> 
                               
            </div>
        </section>
        
         <!-- Contact Section-->
         <section class="page-section bg-primary text-white" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Contacta conmigo</h2>
                
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="justify-content-center align-items-center">
                    <div class="col-sm-6 container d-flex flex-column ">
                        <a class="text-white fs-3 p-3 m-1" href="mailto:jmrepisodev@gmail.com"><i class="fas fa-envelope me-3"></i>jmrepisodev@gmail.com</a>
                        <a class="text-white fs-3 p-3 m-1" href="https://github.com/jmrepisodev"><i class="fa-brands fa-github me-3"></i>https://github.com/jmrepisodev</a>
                        <a class="text-white fs-3 p-3 m-1" href="tel:+34633732058"><i class="fas fa-phone me-3"></i></i>+34633732058</a>
                    </div>   
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center d-none">
                    <div class="col-lg-8 col-xl-7">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form id="contactForm" action="{{route ('contact')}}" method="post">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control border rounded" id="name" name="name" type="text" placeholder="Nombre" data-sb-validations="required" />
                                <label class="px-3" for="name">Nombre</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es obligatorio.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control border rounded" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label class="px-3" for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">El email es obligatorio.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El email no es válido.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control border rounded" id="phone" type="tel" name="phone" placeholder="teléfono" data-sb-validations="required" />
                                <label class="px-3" for="phone">Teléfono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">El teléfono es obligatorio.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control border rounded" id="message" type="text" name="message" placeholder="Escribe tu mensaje aquí..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label class="px-3" for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es obligatorio.</div>
                            </div>
                           
                            <!-- Submit Button-->
                            <button class="btn btn-danger btn-xl" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section >
      
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="text-left container">
                <p class="p-3 fs-3"><q>Nunca me rindo ante un problema. 
                    Doy lo mejor de mí para solucionarlo y si no sé hacerlo pues lo aprendo.</q>
                </p>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localización</h4>
                        <p class="lead mb-0">
                            Málaga, España
                        </p>
                    </div>
                
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Contacto</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="mailto:jmrepisodev@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/jmrepisodev"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="tel:+34633732058"><i class="fas fa-phone"></i></i></a>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; All rights reserved. José Miguel Repiso 2023</small></div>
        </div>

       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
