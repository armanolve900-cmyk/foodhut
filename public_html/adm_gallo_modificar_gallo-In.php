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

//obtener las variables
$var_id = $_POST['hid_id'];
$var_nombre = $_POST['name'];
$var_raza = $_POST['raza'];

$var_observaciones = $_POST['obs'];
?>

<h2>Datos recibidos</h2>
<hr>
<p>Usted ingreso los siguientes datos:</p>
<?php
//mostrar los datos recibidos
echo "<h3>$var_id</h3>
      <h3>$var_nombre</h3>
      <h3>$var_raza</h3>
      <h3>$var_observaciones</h3>
      ";

//realizar la inserción de datos en la tabla con la siguiente sentencia SQL
//insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
//considere que la insercion de la primary Key es nula ya que es autoincrmentable

$cons = update( 
      "gallos3",
      "nombre='$var_nombre',
      raza='$var_raza',
      observaciones='$var_observaciones'
     ","id_gallo=$var_id"    
    );

if($cons) {
?>
<script languaje="javascript" >alert("The rooster IS SUCCESSFULLY MODIFIED to the database");</script> 
<?php
} else {
?>
<script languaje="javascript" >alert("The rooster could not be modified in the database.");</script>
<?php
}
?>
<meta http-equiv="refresh" content="10;URL=adm_gallo-In.php" > 
