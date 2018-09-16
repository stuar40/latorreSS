<?php     
     if (isset($_POST['Eliminar'])) {
       
     
      include "conexion.php"; 

      $Codigo = $_POST['Codigo'];
      $Nombre = $_POST['Nombre'];
      $Nit    = $_POST['Nit'];
  $C4 = $_POST['descripcion'];
 $C5 = $_POST['direccion'];
 $C6 = $_POST['telefono'];
 $C7 = $_POST['correo'];
 $C8 = $_POST['pais'];


       $query = "DELETE FROM empresa_cliente WHERE id_empresa='$Codigo' and nombre_emp='$Nombre' and nit_emp='$Nit' ";

             
             if (mysql_query($query,$conexion)) 
            {

              echo "<h1>Datos eliminados</h1>";
              echo "<br><a href='Mantenimiento_Cliente.php'>Regresar a Menu</a>";

            }
            else 
            {
              echo "<h1>Datos no eliminados</h1>";
              echo "<br><a href='Mantenimiento_Cliente.php'>Regresar a Menu</a>";
            } 
     } 
      elseif (isset($_POST['Modificar'])) {

       $Codigo = $_POST['Codigo'];
       $Nombre = $_POST['Nombre'];
       $Nit    = $_POST['Nit'];
       $C4 = $_POST['descripcion'];
       $C5 = $_POST['direccion'];
       $C6 = $_POST['telefono'];
       $C7 = $_POST['correo'];
       $C8 = $_POST['pais'];

            include("conexion.php");
               $Modificar = "UPDATE empresa_cliente SET id_empresa='$Codigo', nombre_emp='$Nombre', nit_emp='$Nit', descripcion_emp ='$C4', dir_emp='$C5', tel_emp='$C6', email_emp='$C7', pais_emp='$C8' WHERE id_empresa=$Codigo ";

             if (mysql_query($Modificar,$conexion)) 
            {

              echo "<h1>Datos Modificados Correctamente</h1>";
              echo "<br><a href='Mantenimiento_Cliente.php'>Regresar a Menu</a>";

            }
            else 
            {
              echo "<h1>Datos no Modificados</h1>";
              echo "<br><a href='Mantenimiento_Cliente.php'>Regresar a Menu</a>";
            } 

      }elseif (isset($_POST['Cancelar'])) {
         header("location: Mantenimiento_Cliente.php");
      }

 ?>