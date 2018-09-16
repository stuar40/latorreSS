<?php
include("conexion.php");
 $C1 = $_POST['codigo'];
 $C3 = $_POST['serie'];
 $C2 = $_POST['nombre'];
 $C4 = $_POST['descripcion'];
 $C5 = $_POST['stockmax'];
 $C6 = $_POST['stockmin'];
 $C7 = $_POST['preciocom'];
 $C8 = $_POST['precioven'];
 
 if (isset($_POST['Registrar'])) {
 	
 	$query = "INSERT INTO producto VALUES (null, '$C3','$C2','$C4','$C5','$C6','$C7','$C8')";

 	$result = mysql_query($query,$conexion);
 	if ($result) {
 		header("location: Ingresoproducto.php");
 	}else{
         echo "NO SE PUDO INSERTAR LOS DATOS";
         echo "<br><a href='Ingresoproducto.php'>REGRESAR AL MENU PRODUCTO</a>";
 	}
 }
 elseif (isset($_POST['Cancelar'])) {
  header("location: Ingresoproducto.php");
 }

?>