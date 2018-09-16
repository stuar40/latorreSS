<?php
include ('conexion.php');

 $C1 = $_POST['codigo'];
 $C2 = $_POST['nombre'];
 $C3 = $_POST['nit'];
 $C3 = $_POST['dpi'];
 $C4 = $_POST['direccion'];
 $C5 = $_POST['descripcion'];
 $C6 = $_POST['telefono'];
 $C7 = $_POST['correo'];
 $C8 = $_POST['pais'];

 if (isset($_POST['Eliminar'])) {
 	
 

 $query = "DELETE FROM proveedores WHERE id_proveedores='$C1' and nom_prov='$C2' and nit_prov='$C3'";
 
 if (mysql_query($query,$conexion))
 {
              echo "<h1>Datos eliminados</h1>";
              echo "<br><a href='Mantenimiento_Proveedores.php'>Regresar a Menu</a>";

 }else{
              echo "<h1>Datos no eliminados</h1>";
              echo "<br><a href='Mantenimiento_Proveedores.php'>Regresar a Menu</a>";
      }



}elseif (isset($_POST['Modificar'])) {
   
 include ('conexion.php');

 $C1 = $_POST['codigo'];
 $C2 = $_POST['nombre'];
 $C3 = $_POST['nit'];
 $C3 = $_POST['dpi'];
 $C4 = $_POST['direccion'];
 $C5 = $_POST['descripcion'];
 $C6 = $_POST['telefono'];
 $C7 = $_POST['correo'];
 $C8 = $_POST['pais'];

     $query = "UPDATE proveedores SET id_proveedores='$C1',nom_prov='$C2',nit_prov='$C3',dir_prov='$C4',decripcion_prov='$C5',tel_prov='$C6',email_prov='$C7',pais_prov='$C8' WHERE id_proveedores=$C1";
      
      if (mysql_query($query,$conexion)) 
            {

              echo "<h1>Datos Modificados Correctamente</h1>";
              echo "<br><a href='Mantenimiento_Proveedores.php'>Regresar a Menu</a>";

            }
            else 
            {
              echo "<h1>No se  Modificaron Datos</h1>";
              echo "<br><a href='Mantenimiento_Proveedores.php'>Regresar a Menu</a>";
            }  

   

}elseif (isset($_POST['Cancelar'])) {
	 header("location: Mantenimiento_Proveedores.php");
}

?>