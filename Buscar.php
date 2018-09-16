<?php
 include("conexion.php");
 $Codigo = $_POST['Codigo'];
 $Nombre = $_POST['Nombre'];
 $Nit    = $_POST['Nit'];


 $query = "SELECT * FROM empresa_cliente WHERE id_empresa='$Codigo' and nombre_emp='$Nombre' and nit_emp='$Nit';";
 $row   = mysql_query($query);
 $dato  = mysql_fetch_array($row);

?>