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
$var_empre = $_POST['emp'];

$var_visita = $_POST['visi'];
?>

<h2>Datos recibidos</h2>
<hr>
<p>Usted ingreso los siguientes datos:</p>
<?php
//mostrar los datos recibidos
echo "<h3>$var_id</h3>
      <h3>$var_nombre</h3>
      <h3>$var_empre</h3>
      <h3>$var_visita</h3>
      ";

//realizar la inserción de datos en la tabla con la siguiente sentencia SQL
//insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
//considere que la insercion de la primary Key es nula ya que es autoincrmentable

$cons = update( 
      "proveedores",
      "nombre='$var_nombre',
      Empresa='$var_empre',
      Llegada='$var_visita'
     ","id=$var_id"    
    );

if($cons) {
?>
<script languaje="javascript" >alert("El Usuario SE MODIFICAD CORRECTAMENTE a la base de datos");</script> 
<?php
} else {
?>
<script languaje="javascript" >alert("El usuario no pudo ser modificado en la base de datos.");</script>
<?php
}
?>
<meta http-equiv="refresh" content="0;URL=adm_proveedor.php" > 
