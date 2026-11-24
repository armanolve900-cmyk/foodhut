
<?php session_start(); //creamos la sesion 
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario']) || !isset($_SESSION['tipo']) ){
    echo "Usuario no Logueado";
    header('Location: login.php'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>Gallera Carmona</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="css/foodhut.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">EJEMPLARES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">CITAS</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="imgs/logos.png" class="brand-img" alt="" >
                
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">SERVICIOS<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cli_compras.php">COMPRAS</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ml-xl-4" href="cli_index-In.php">INGLES</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-primary ml-xl-4">Cerrar Sesion </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Gallera Carmona</h1>
            <h2 class="display-4 mb-5">Un sello de calidad</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">Mejores Ejemplares</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">ACERCA DE NOSOTROS</h2>
                        <p> Somos una empresa familiar de tercera generación dedicada exclusivamente a la cría y cuidado de los gallos, por lo que la palabra Carmona es sinónimo de gallos con la más alta calidad en el mercado. Provenimos de una familia que más allá del gusto, siente pasión por los gallos. Nuestras líneas de sangre se caracterizan por ser evaluadas con los mayores estándares de calidad, muchos años de experiencia en la cría del gallo nos han llevado a tener animales no solo estéticos, sino también con cualidades como la agilidad, inteligencia y, sobre todo, letales con la navaja. <br></p>
                        <p><b>Explora nuestro sitio y descubre lo que Gallera Carmona puede ofrecerte. Desde gallos de alto rendimiento hasta asesoría personalizada en la cría y cuidado, estamos aquí para ayudarte a alcanzar el éxito en el mundo de los gallos</b></p>
                        <p>Además de criaderos de alta calidad, ofrecemos una amplia variedad de accesorios y productos para el cuidado y entrenamiento de tus gallos. Desde jaulas, suplementos alimenticios, hasta equipamiento especializado, todo lo que necesitas para garantizar el bienestar y rendimiento de tus gallos está aquí.  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">Ejemplares</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo1.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo5.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo7.jpeg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo7.jpeg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo1.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="imgs/gallo3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

    <!-- book a table Section  -->
    <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <div class="">
            <h2 class="section-title mb-5">CITAS</h2>
            <div class="row mb-5">
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="email" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="number" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="NUMBER OF GUESTS" max="20" min="0">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="time" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="date" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="12/12/12">
                </div>
            </div>
            <a href="#" class="btn btn-lg btn-primary" id="rounded-btn">AGENDAR</a>
        </div>
    </div>

    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">SERVICIOS</h2>
        <div class="row justify-content-center">
            <div class="col-sm-7 col-md-4 mb-5">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#foods" role="tab" aria-controls="pills-home" aria-selected="true">Incubacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile" aria-selected="false">Jaulas para gallos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="imgs/incubadora.png" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$1700</a></h1>
                                <h4 class="pt20 pb20">Paquete basico </h4>
                                <p class="text-white">Capacidad: 10 a 20 huevos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="imgs/incubadora.png" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$5600</a></h1>
                                <h4 class="pt20 pb20">Paquete intermedio</h4>
                                <p class="text-white">Capacidad: 50 a 80 huevos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="imgs/incubadora.png" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$16000</a></h1>
                                <h4 class="pt20 pb20">Paquete avanzado</h4>
                                <p class="text-white">Capacidad: 200 a 300 huevos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="juices" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="imgs/haula.png" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$800</a></h1>
                                <h4 class="pt20 pb20">Jaula Chica</h4>
                                <p class="text-white">(60 x 60 cm) <br> Ideales para gallos pequeños o enanos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="imgs/haula.png" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$1200</a></h1>
                                <h4 class="pt20 pb20">Jaula Mediana</h4>
                                <p class="text-white">  (75 x 75 cm) <br> Diseñadas para gallos en transición.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="imgs/haula.png" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$3000</a></h1>
                                <h4 class="pt20 pb20">Jaula Grande</h4>
                                <p class="text-white">(1.5 x 1.5 x 1 m) <br> Perfectas para gallos de mayor tamaño o para mantenerlos en óptimas condiciones físicas. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">RESEÑAS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Juan Carlos Bolaños</h3>
                    <h6 class="testmonial-subtitle">Granjero Local</h6>
                    <div class="testmonial-body">
                        <p>Me impresionó la calidad del servicio brindado por el personal. Desde el momento en que entré, pude sentir la calidez y profesionalismo de las personas que trabajan allí. Valiosas personas que se preocupan verdaderamente por el bienestar de los animales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Claudia Vega</h3>
                    <h6 class="testmonial-subtitle">Granjera Local</h6>
                    <div class="testmonial-body">
                        <p>Valiosas personas, por el servicio y por la Humildad ☺️</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Murgen Ponce</h3>
                    <h6 class="testmonial-subtitle">Granjero Local</h6>
                    <div class="testmonial-body">
                        <p>Cómo siempre muy amables y atentos ,tanto con las personas y en especial con los animalitos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>CONTACTANOS</h3>
                <p>Con una accesibilidad increible atravez de los siguientes medios:</p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> Av Francisco I. Madero, Centro, 61250 Maravatío de Ocampo, Mich.</p>
                    <p><span class="ti-support pr-3"></span> 447 478 2075</p>
                    <p><span class="ti-email pr-3"></span>info@website.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>ENVÍANOS UN CORREO ELECTRÓNICO A </h3>
                <P class="text-muted">info@website.com</P>
            </div>
            <div class="col-sm-4">
                <h3>LLAMANOS</h3>
                <P class="text-muted">447 478 2075</P>
            </div>
            <div class="col-sm-4">
                <h3>ENCUENTRANOS EN</h3>
                <P class="text-muted">Av Francisco I. Madero, Centro, 61250 Maravatío de Ocampo, Mich.</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="js/foodhut.js"></script>

</body>
</html>
