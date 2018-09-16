<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_empleados.xls");


		$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE EMPLEADOS</title>
</head>
<body>
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="white"><CENTER><strong>REPORTE DE EMPLEADOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
  
    <td><CENTER><strong>COD.EMPLEADO</strong></CENTER></td>
    <td><CENTER><strong>NOMBRE</strong></CENTER></td>
    <td><CENTER><strong>DPI</strong></CENTER></td>
	<td><CENTER><strong>NIT</strong></CENTER></td>
    <td><CENTER><strong>TELEFONO</strong></CENTER></td>
	<td><CENTER><strong>CORREO</strong></CENTER></td>
	<td><CENTER><strong>DIRECCION</strong></CENTER></td>

	
  </tr>
  
<?PHP
		
//$sql=mysql_query("select cod_usu,nombre,Apellido,Pais,edad,dni from usuarios");
$sql=mysql_query("select id_empleados,nom_emple,dpi_emple,nit_emple,tel_emple,email_emple,dir_emple from empleados");
while($res=mysql_fetch_array($sql)){		

	$id_empleados=$res["id_empleados"];
	$nom_emple=$res["nom_emple"];
	$dpi_emple=$res["dpi_emple"];
	$nit_emple=$res["nit_emple"];
	$tel_emple=$res["tel_emple"];
	$email_emple=$res["email_emple"];
	$dir_emple=$res["dir_emple"];
	

?>  
 <tr>
 	<td><CENTER><?php echo $id_empleados; ?></CENTER></td>
	<td><?php echo $nom_emple; ?></td>
	<td><?php echo $dpi_emple; ?></td>
	<td><?php echo $nit_emple; ?></td>
	<td><?php echo $tel_emple; ?></td>
	<td><?php echo $email_emple; ?></td>
	<td><?php echo $dir_emple; ?></td>                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>