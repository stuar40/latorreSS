<?php
include("conexion.php");

 //$C1 = $_POST['codigo'];
 $C2 = $_POST['nombreempresa'];
 $C3 = $_POST['nit'];
// $C3 = $_POST['dpi'];
 $C4 = $_POST['direccion'];
 $C5 = $_POST['descripcion'];
 $C6 = $_POST['telefono'];
 $C7 = $_POST['correo'];
 //$C8 = $_POST['pais'];

 if (isset($_POST['Registrar'])) {


 $query = "INSERT INTO  proveedores  (nom_prov, nit_prov, dir_prov, decripcion_prov,tel_prov, email_prov) VALUES ('$C2' ,'$C3' ,'$C4' ,'$C5' ,'$C6' ,'$C7' )";
 echo $query;
 $resultado = mysqli_query($conexion,$query);

if ($resultado) {

 	header("location: Proveedores.php");
}else{
    echo "   ";
 	echo "No se pudo realizar la insersion";
 	echo "<br><a href='Proveedores.php'>Ingresar Menu</a>";

}

}elseif (isset($_POST['Cancelar'])) {
	 header("location: inicio.php");
}
?>
