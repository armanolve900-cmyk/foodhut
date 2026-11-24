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
                    <a class="nav-link" href="ger_index-In.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_usuarios-In.php">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_gallo-In.php">EXAMPLES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_proveedor-In.php">SUPPLIERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ger_index.php">LENGUAGE</a>
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
                    <a href="logout-In.php" class="btn btn-primary ml-xl-4">LOG OUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->

    <header id="home" class="header">
        <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">Welcome to Manager Home</h1>
            <h2 class="display-4 mb-5">Welcome Manager <?php echo $_SESSION["usuario"]; ?></h2>
            
           
        </div>
    </header>
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Manager</h2>
                        <h2>Welcome to the Manager Panel!</h2>
                        <h3>What can you do from here?</h3>
    <ul>
    <li><strong>Reports and Statistics:</strong> Analyze key data on items, users, sales, and more.</li>
<li><strong>Activity Monitoring:</strong> Monitor actions performed by administrators and other users.</li>
<li><strong>Inventory Control:</strong> Review the current status of available medicines and accessories.</li>
<li><strong>Supplier Management:</strong> Evaluate the relationship with suppliers and manage pending orders.</li>
</ul>
  </div>
  
  <h3>Key Performance Indicators (KPI)</h3>
<ul>
  <li><strong>User Growth Rate:</strong> 15% this month.</li>
  <li><strong>Inventory Turnover:</strong> 85% of stock sold in the last 30 days.</li>
  <li><strong>Active Suppliers:</strong> 12 out of 15.</li>
  <li><strong>Average Daily Sales:</strong> $266.</li>
</ul>
<h3>Strategic Recommendations</h3>
<ul>
  <li>Consider increasing inventory of best-selling medicines to avoid stockouts.</li>
  <li>Evaluate underperforming suppliers to optimize the supply chain.</li>
  <li>Implement promotions to boost sales in less-demanded categories.</li>
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
