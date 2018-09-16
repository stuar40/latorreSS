<?php
include("conexion.php");
 $C1 = $_POST['id'];
 $C2 = $_POST['nombre'];
 $C3 = $_POST['descripcion'];
 $C4 = $_POST['precio'];


if (isset($_POST['Registrar'])) {

$Insert = "INSERT INTO servicio VALUES (NULL, '$C2','$C3', '$C4')";

if (mysql_query($Insert, $conexion)){
	    header("location: Servicio.php");
}else{
	    echo "NO SE PUDO INGRESAR DATOS";
 		echo "<br><a href='Servicio.php'>REGRESAR AL MENU PRODUCTO</a>";
}


}elseif (isset($_POST['Cancelar'])) {
	
header("location: Servicio.php");

}

?>