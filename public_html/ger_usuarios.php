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
                    <a class="nav-link" href="ger_usuarios-In.php">IDIOMA</a>
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
        <h1 class="display-2 font-weight-bold my-3">Menu De Usuarios</h1>
            
           
            <h2 class="display-4 mb-5">Usuarios Existentes </h2>
            <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            
             <?php
            //invocar la funcion select y la tabla
            $result = select("usuarios");
            // Realizamos un bucle que muestre el resultado
            ?>
            <hr>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th scope="col">id</th>
               <th scope="col">Nombre</th>
               <th scope="col">Apellido Paterno</th>
               <th scope="col">Apellido Materno</th>
               <th scope="col">Email</th>
               <th scope="col">Tipo</th>
               <th scope="col">Acciones</th>

            </tr>
         </thead>

         <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
                      ?>
              <tr>
                <td><?php echo $row->id_usuario; ?></td>
                <td><?php echo $row->usu_nom; ?></td>
                <td><?php echo $row->usu_ap_pat; ?></td>
                <td><?php echo $row->usu_ap_mat; ?></td>
                <td><?php echo $row->usu_email; ?></td>
                <td><?php echo $row->usu_tipo; ?></td>
                <td>
                  <a href="adm_usuario_modificar.php?id=<?php echo $row->id_usuario; ?>" class="button">Modificar</a> /                  
                  <a href="adm_usuario_eliminar.php?id=<?php echo $row->id_usuario; ?>" onclick="return confirmarEliminacion()" class="buttonDelete">Eliminar</a> 

                </td>
              </tr>
           <?php

            }
          } else {
            echo "no hay ningun registro";
          }
          ?>
         
         </table>


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
    
</body>
</html>
