<?php session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['tipo']) ){
        echo "Usuario no Logueado";
        header('Location: login.php'); 
        exit();
    }
?>
<?php include("php/conexion.php"); 
$var_id_gallo=$_GET['id'];
echo $var_id_gallo;
//invocar la funcion select y la tabla
$result = delete("gallos3", "id_gallo = $var_id_gallo");
// Realizamos un bucle que muestre el resultado
?>
<script languaje="javascript" >alert("The Item WAS CORRECTLY DELETED from the database");</script> 

<meta http-equiv="refresh" content="0;URL=adm_gallo-In.php" > 
