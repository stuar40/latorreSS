<?php
include("conexion.php");

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

      if (isset($_POST['Registrar'])) {

 $query = "INSERT INTO empleados VALUES (null,'$c1','$c2','$c3','$c4','$c5','$c6','$c8','$c7','$c9','$c10','$c11','$c12')";
          $resul = mysqli_query($conexion,$query);
          if ($resul) {

             header("location: form-common.php");
          }else{
            echo "Problemas al insertar".mysqli_error($conexion);
             echo "<br><a href='form-common.php'>REGRESAR AL MENU ANTERIOR</a>";
          }


      }elseif (isset($_POST['Cancelar'])) {

        echo "Cancelando operacin";
        header("location: form-common.php");
      }

   ?>
