<?php

		require_once("dompdf/dompdf_config.inc.php");
		$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);

		
		 /* Connect To Database*/
		//require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		//require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE CLIENTES</title>
</head>
<body>


<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="white"><CENTER><strong>REPORTE DE CLIENTES</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
    
    <td><CENTER><strong>EMPRESA </strong></CENTER></td>
    <td><CENTER><strong>NIT </strong></CENTER></td>
	<td><CENTER><strong>DESCRIPCION </strong></CENTER></td>
    <td><CENTER><strong>DIRECCION </strong></CENTER></td>
	<td><CENTER><strong>TELEFONO </strong></CENTER></td>
	<td><CENTER><strong>CORREO  </strong></CENTER></td>
	<td><CENTER><strong>PAIS </strong></CENTER></td>
	
	
  </tr>';
  



$sql=mysql_query("select nombre_emp,nit_emp,descripcion_emp,dir_emp,tel_emp,email_emp,pais_emp from empresa_cliente");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		
		<td>'.$res['nombre_emp'].'</td>
		<td>'.$res['nit_emp'].'</td>
		<td>'.$res['descripcion_emp'].'</td>
		<td>'.$res['dir_emp'].'</td>
		<td>'.$res['tel_emp'].'</td>
		<td>' .$res['email_emp']. '</td>
		<td>'.$res['pais_emp'].'</td>
		
		
	</tr>';
	
}


$codigoHTML.='
</table>




</body>
</html>';



$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_Clientes.pdf");
?>