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
    <link rel="stylesheet" href="css/estylos_menu.css">
    <?php include("php/conexion.php"); ?>
    
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
                    <a class="nav-link" href="admin_index-In.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm_usuario-In.php">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm_gallo-In.php">EXAMPLES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm_proveedor-In.php">SUPPLIERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm_proveedor_modificar.php">LANGUAGE</a>
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
                    <a class="nav-link" href="#testmonial">MEDICATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">ACCESSORIES</a>
                </li>
                <li class="nav-item">
                    <a href="logout-In.php" class="btn btn-primary ml-xl-4">CLOSE SESSION</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->

    <header id="home" class="header">
        <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3"></h1>
        <?php 
        $var_id = $_GET['id'];
        echo "Esta es la variable recibida = $var_id";
        //invocar la funcion select y la tabla
        $result = select_where("proveedores", "id = $var_id");

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
        <!-- Formulario de Registro -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center text-white">Modifying Supplier</h2>
                <form  id="form1" name="form1" action="adm_proveedor_modificar_proveedor-In.php" method="POST" onsubmit="return validarForm(this);">
                <input name="hid_id" type="hidden" value="<?php echo $row->id; ?>" />
                <div class="form-group">
                        <label for="name">Supplier Name </label>
                        <input type="text"  name="name" class="form-control" required value="<?php echo $row->nombre; ?> "/>
                    </div>
                    <div class="form-group">
                        <label for="emp">Company</label>
                        <input type="text" id="emp" name="emp" class="form-control" required value="<?php echo $row->Empresa; ?>"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="visi">Visit</label>
                        <input type="text" name="visi" id="visi"  class="form-control" required value="<?php echo $row->Llegada; ?>"/>
                    </div>
                    <button name="btn_guardar" id="btn_guardar" type="submit" class="btn btn-primary btn-block">Update</button>
                    <?php

                       }
                     } else {
                     echo "no hay ningun registro";
                     }
?>
                </form>
            </div>
        </div>
       </div>
      
        
    </header>
    

    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap affix -->
    <script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="vendors/wow/wow.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/foodhut.js"></script>
    <script src="js/validacion.js"></script>
    
  
</body>


</html>