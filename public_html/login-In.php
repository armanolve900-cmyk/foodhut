<?php session_start(); //creamos la sesion ?> 
<?php
$color = "black"; // Definir el color como una variable
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
    <link rel="stylesheet" href="css/registro.css">
    
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
                    <a class="nav-link" href="index-In.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">SPECIMENS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">APPOINTMENTS</a>
                </li>
            <li class="nav-item">
                    <a class="nav-link" href="login.php">LANGUAGE</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="imgs/logos.png" class="brand-img" alt="" >
                
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">SERVICES<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">REVIEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT US </a>
                </li>
                
                <li class="nav-item">
                    <a href="login-In.php" class="btn btn-primary ml-xl-4">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->

    <header id="home" class="header">
        <div class="overlay text-white text-center">
        <div class="login-page">
      <div class="form">
     <form id="form1" name="form1" action="registrar_usuario-In.php" class="register-form" method="POST" onsubmit="return validarForm(this);">
      
     <h2 style="color: <?php echo $color; ?>;" ><i class="fas fa-lock"></i> Register</h2>
      
      <input name="ema_email" type="email" placeholder="Email *" required required onkeyup="javascript:this.value=this.value.toLowerCase();"/>
      
      <input id="txt_Nombre" name="txt_Nombre" type="text" placeholder="Name *" required onkeyup="javascript:this.value=this.value.toUpperCase();"/>
     
      <input type="text" name="txt_ApPat" id="txt_ApPat" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Paternal Surname *" required/>

      <input type="text" name="txt_ApMat" id="txt_ApMat" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Maternal Surname *" required/>
     
      <input name="pas_password"  type="password" placeholder="Password *" required/>

      <input name="pas_password2" type="password" placeholder="Confirm Password *" required/>
     
      <button name= "btn_guardar " id="btn_guardar" type="submit">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action="validar_usuario-In.php" class="login-form" method="post">
      <h2 style="color: <?php echo $color; ?>;"><i class="fas fa-lock"></i> Login</h2>
      <input  name="ema_email" type="email"  placeholder="Username" required />
      <input name= "pas_password" type="password" placeholder="Password" required/>
      <button name="iniciar" type="submit" >login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>  
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
