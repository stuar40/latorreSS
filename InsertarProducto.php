<?php
include("conexion.php");
 
 $C3 = $_POST['serie'];
 $C2 = $_POST['nombre'];
 $C4 = $_POST['descripcion'];
 $C5 = $_POST['0'];
 $C6 = $_POST['stockmin'];
 $C7 = $_POST['0'];
 $C8 = $_POST['0'];
 
 if (isset($_POST['Registrar'])) {
 	
 	$query = "INSERT INTO producto VALUES (null, '$C3','$C2','$C4','0','$C6','0','0')";
 	echo $query;
 	 	$result = mysql_query($query,$conexion);
 	if ($result) {
 		
 		header("location: Producto.php");
 	}else{
         echo "NO SE PUDO INSERTAR LOS DATOS";
         echo "<br><a href='Producto.php'>REGRESAR AL MENU PRODUCTO</a>";
 	}
 }
 elseif (isset($_POST['Cancelar'])) {
  header("location: Producto.php");
 }

?>