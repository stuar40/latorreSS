<?php
 include("conexion.php");

 //$C1 = $_POST['codigo'];
 $C2 = $_POST['nombreempresa'];
 $C3 = $_POST['nit'];
 //$C4 = $_POST['descripcion'];
 $C5 = $_POST['direccion'];
 $C6 = $_POST['telefono'];
 $C7 = $_POST['correo'];
 //$C8 = $_POST['pais'];


if (isset($_POST['Registrar'])) {





   $query = "INSERT INTO empresa_cliente(nombre_emp, nit_emp, dir_emp, tel_emp, email_emp) VALUES ('$C2','$C3','$C5','$C6','$C7')";
   $resultado = mysqli_query($conexion,$query);

 if($resultado){
   header("location: Cliente.php");
 }else{
 	echo "   ";
 	echo "error insersion";
 	echo "<br><a href='Cliente.php'>Volver a Intentarlo</a>";
 }
}elseif (isset($_POST['Cancelar'])) {
	header("location: Cliente.php");
}

?>
