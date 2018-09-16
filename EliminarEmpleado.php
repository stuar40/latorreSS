<?php
include("conexion.php");
      $c0=$_POST['Id'];
      $c1=$_POST['Nombres'];
      $c2=$_POST['Sexo'];
      $c3=$_POST['DPI'];
      $c4=$_POST['NIT'];
      $c5=$_POST['Licencia'];
      $c6=$_POST['Telefono'];
      $c7=$_POST['Direccion'];
      $c8=$_POST['Correo'];
      $c9=$_POST['FechaIngreso'];
      $c10=$_POST['Tipo'];
      $c11=$_POST['Usuario'];
      $c12=$_POST['Password']; 

if (isset($_POST['Eliminar'])) {
	 
     $Del= "DELETE FROM empleados WHERE id_empleados='$c0'  and nom_emple='$c1' and dpi_emple='$c3'";    
     if (mysql_query($Del, $conexion)) {

		     	echo "<h1>DATOS ELIMINADOS CORRECTAMENTE</h1>";
		        echo "<br><a href='Mantenimiento.php'>REGRESAR AL MENU ANTERIOR</a>";
     }else{
     	     	echo "<h1>NO SE PUDO REALIZAR LA OPERACION</h1>";
                echo "<br><a href='Mantenimiento.php'>REGRESAR AL MENU ANTERIOR</a>";
     }



}elseif (isset($_POST['Modificar'])) {
      $Upd = " UPDATE empleados SET id_empleados='$c0',nom_emple='$c1',sexo_emple='$c2',dpi_emple='$c3',nit_emple='$c4',lice_emple='$c5',tel_emple='$c6',email_emple='$c8',dir_emple='$c7',fechaingres_emple='$c9',tipo_emple='$c10',usuario_emple='$c11',pass_emple='$c11' WHERE id_empleados='$c0'";
      
      if (mysql_query($Upd,$conexion)) {

		     	echo "<h1>DATOS MODIFICADOS CORRECTAMENTE</h1>";
		        echo "<br><a href='Mantenimiento.php'>REGRESAR AL MENU ANTERIOR</a>";
         
        }else{

		     	echo "<h1>NO SE MODIFICARON DATOS</h1>";
		        echo "<br><a href='Mantenimiento.php'>REGRESAR AL MENU ANTERIOR</a>";
        }  



}elseif (isset($_POST['Cancelar'])) {
	  echo "Cancelando operacion";
}

?>