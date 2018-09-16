<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=ReporteVentasG_diario.xls");


		$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);
	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE DE VENTA DIARIA</title>
</head>
<body>
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="skyblue"><CENTER><strong>REPORTE GENERAL DE VENTA DIARIA</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
  
    
    <td width="70"><CENTER><strong>No.Factura</strong></CENTER></td>
    <td width="50"><CENTER><strong>Serie</strong></CENTER></td>
	<td width="150"><CENTER><strong>Fecha</strong></CENTER></td>
    <td width="150"><CENTER><strong>Total Venta</strong></CENTER></td>

	
  </tr>
  
<?PHP
		

$sql=mysql_query("select numero_venta,serie_venta,fecha_venta, totpagar_venta from venta ");
while($res=mysql_fetch_array($sql)){		

	
	$numero_venta=$res["numero_venta"];
	$serie_venta=$res["serie_venta"];
	$fecha_venta=$res["fecha_venta"];
	$totpagar_venta=$res["totpagar_venta"];
	
	

?>  
 <tr>
	<td><CENTER><?php echo $numero_venta; ?></CENTER></td>
	<td><CENTER><?php echo $serie_venta; ?></CENTER></td>
	<td><CENTER><?php echo $fecha_venta; ?></CENTER></td>
	<td><CENTER><?php echo $totpagar_venta; ?></CENTER></td>                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>