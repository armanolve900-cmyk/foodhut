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
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
   
    <!-- font icons -->
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="css/foodhut.css">
    <link rel="stylesheet" href="/css/registro.css">
    
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
                    <a class="nav-link" href="ger_index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_usuarios.php">USUARIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_gallo.php">EJEMPLARES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_proveedor.php">PROVEDORES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_index-In.php">IDIOMA</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="imgs/logos.png" class="brand-img" alt="">
                
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">MEDICAMENTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">ACCESORIOS</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-primary ml-xl-4">CERRAR SESION</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->

    <header id="home" class="header">
        <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">Bienvenido al Inicio de Gerente</h1>
            <h2 class="display-4 mb-5">Bienvenido Gerente <?php echo $_SESSION["usuario"]; ?></h2>
            
           
        </div>
    </header>
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Gerente</h2>
                        <h2>¡Bienvenido al Panel del Gerente!</h2>
                        <h3>¿Qué puedes hacer desde aquí?</h3>
    <ul>
      <li><strong>Reportes y Estadísticas:</strong> Analiza datos clave sobre ejemplares, usuarios, ventas, y más.</li>
      <li><strong>Monitoreo de Actividad:</strong> Supervisa las acciones realizadas por los administradores y otros usuarios.</li>
      <li><strong>Control de Inventario:</strong> Revisa el estado actual de medicamentos y accesorios disponibles.</li>
      <li><strong>Gestión de Proveedores:</strong> Evalúa la relación con proveedores y controla pedidos pendientes.</li>
    </ul>
  </div>
  
    <h3>Indicadores Clave de Desempeño (KPI)</h3>
    <ul>
      <li><strong>Tasa de Crecimiento de Usuarios:</strong> 15% este mes.</li>
      <li><strong>Rotación de Inventario:</strong> 85% del stock vendido en los últimos 30 días.</li>
      <li><strong>Proveedores Activos:</strong> 12 de 15.</li>
      <li><strong>Promedio de Ventas Diarias:</strong> $266.</li>
    </ul>
    <h3>Recomendaciones Estratégicas</h3>
    <ul>
      <li>Considera aumentar el inventario de medicamentos más vendidos para evitar desabastecimiento.</li>
      <li>Evalúa los proveedores con menor rendimiento para optimizar la cadena de suministro.</li>
      <li>Implementa promociones para mejorar las ventas en categorías menos demandadas.</li>
    </ul>
                       </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap affix -->
    <script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="vendors/wow/wow.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/foodhut.js"></script>
</body>
</body>
</html>
