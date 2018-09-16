<?php
include("conexion.php");
 $C1 = $_POST['id'];
 $C2 = $_POST['nombre'];
 $C3 = $_POST['descripcion'];
 $C4 = $_POST['precio'];

 if (isset($_POST['Eliminar'])) {
 	
 $Del = " DELETE FROM servicio WHERE id_servicio='$C1' and nom_serv='$C2'";
 if (mysql_query($Del, $conexion)) {
 	          echo "<h1>Datos eliminados</h1>";
              echo "<br><a href='Mantenimiento_Servicio.php'>Regresar a Menu</a>";
 }else {
 	          echo "<h1>NO SE ELIMINARON DATOS</h1>";
              echo "<br><a href='Mantenimiento_Servicio.php'>Regresar a Menu</a>";
 }


 }elseif (isset($_POST['Modificar'])) {
 	
 $Upd = " UPDATE servicio SET id_servicio='$C1',nom_serv='$C2',descripcion_serv='$C3',precio_serv='$C4' WHERE id_servicio='$C1' " ;

if (mysql_query($Upd,$conexion)) 
            {

              echo "<h1>Datos Modificados Correctamente</h1>";
              echo "<br><a href='Mantenimiento_Servicio.php'>Regresar a Menu</a>";

            }
            else 
            {
              echo "<h1>No se  Modificaron Datos</h1>";
              echo "<br><a href='Mantenimiento_Servicio.php'>Regresar a Menu</a>";
            }  


 }elseif (isset($_POST['Cancelar'])) {
 	header("location: Servicio.php");
 }

?>