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

if (isset($_POST['Eliminar'])) {
	
	$Del = "DELETE FROM producto WHERE id_producto='$C1'  and serie_prod='$C3' and nom_prod='$C2'";
	$res = mysql_query($Del,$conexion);
	if ($res) {
		      echo "<h1>Datos eliminados</h1>";
              echo "<br><a href='Mantenimiento_Producto.php'>Regresar a Menu</a>";

	}else{
			  echo "<h1>NO SE ELIMINARON DATOS</h1>";
              echo "<br><a href='Mantenimiento_Producto.php'>Regresar a Menu</a>";
	}
	

}elseif (isset($_POST['Modificar'])) {
	
	$Upd = " UPDATE producto SET id_producto='$C1',serie_prod='$C3',nom_prod='$C2',descr_prod='$C4',stock_prod='$C5',stockmin_prod='$C6',preciocosto_prod='$C7',preciovent_prod='$C8' WHERE id_producto='$C1' ";
	
	if (mysql_query($Upd,$conexion)) 
            {

              echo "<h1>Datos Modificados Correctamente</h1>";
              echo "<br><a href='Mantenimiento_Producto.php'>Regresar a Menu</a>";

            }
            else 
            {
              echo "<h1>No se  Modificaron Datos</h1>";
              echo "<br><a href='Mantenimiento_Producto.php'>Regresar a Menu</a>";
            }  




}elseif (isset($_POST['Cancelar'])) {
	header("location: Mantenimiento_Producto.php");

}

?>