<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_clientes.xls");


		$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE CLIENTES</title>
</head>
<body>
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="white"><CENTER><strong>REPORTE DE CLIENTES</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
  
    
    <td><CENTER><strong>EMPRESA</strong></CENTER></td>
    <td><CENTER><strong>NIT</strong></CENTER></td>
	<td><CENTER><strong>DESCRIPCION</strong></CENTER></td>
    <td><CENTER><strong>DIRECCION</strong></CENTER></td>
	<td><CENTER><strong>TELEFONO</strong></CENTER></td>
	<td><CENTER><strong>CORREO</strong></CENTER></td>
	<td><CENTER><strong>PAIS</strong></CENTER></td>

	
  </tr>
  
<?PHP
		
//$sql=mysql_query("select cod_usu,nombre,Apellido,Pais,edad,dni from usuarios");
$sql=mysql_query("select nombre_emp,nit_emp,descripcion_emp,dir_emp,tel_emp,email_emp,pais_emp from empresa_cliente");
while($res=mysql_fetch_array($sql)){		

	
	$nombre_emp=$res["nombre_emp"];
	$nit_emp=$res["nit_emp"];
	$descripcion_emp=$res["descripcion_emp"];
	$dir_emp=$res["dir_emp"];
	$tel_emp=$res["tel_emp"];
	$email_emp=$res["email_emp"];
	$pais_emp=$res["pais_emp"];
	

?>  
 <tr>
	<td><?php echo $nombre_emp; ?></td>
	<td><?php echo $nit_emp; ?></td>
	<td><?php echo $descripcion_emp; ?></td>
	<td><?php echo $dir_emp; ?></td>
	<td><?php echo $tel_emp; ?></td>
	<td><?php echo $email_emp; ?></td> 
	<td><?php echo $pais_emp; ?></td>
		
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>