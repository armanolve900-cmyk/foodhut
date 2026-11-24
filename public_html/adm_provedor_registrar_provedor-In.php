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
$var_nombre = $_POST['name'];
$var_empre = $_POST['empre'];

$var_visita = $_POST['visita'];


?>

<h2>Datos recibidos</h2>
<hr>
<p>Usted ingreso los siguientes datos:</p>
<?php
//mostrar los datos recibidos
echo "<h3>$var_nombre</h3>
      <h3>$var_empre</h3>
      
    
      <h3>$var_visita</h3>
      ";

//realizar la inserción de datos en la tabla con la siguiente sentencia SQL
//insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
//considere que la insercion de la primary Key es nula ya que es autoincrmentable

$cons = insert( 
      'proveedores',
      "NULL,'$var_nombre','$var_empre','$var_visita'");

if($cons) {
?>
<script languaje="javascript" >alert("The User WAS SUCCESSFULLY ADDED to the database");</script> 
<?php
} else {
?>
<script languaje="javascript" >alert("The user could not be inserted into the database.");</script>
<?php
}
?>
<meta http-equiv="refresh" content="0;URL=adm_proveedor-In.php" > 
