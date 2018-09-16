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
<title>REPORTE EMPLEADOS</title>
</head>
<body>


<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="white"><CENTER><strong>REPORTE DE EMPLEADOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
    
    <td><CENTER><strong>COD.EMPLEADO</strong></CENTER></td>
    <td><CENTER><strong>NOMBRE </strong></CENTER></td>
    <td><CENTER><strong>DPI </strong></CENTER></td>
	<td><CENTER><strong>NIT </strong></CENTER></td>
    <td><CENTER><strong>TELEFONO </strong></CENTER></td>
	<td><CENTER><strong>CORREO </strong></CENTER></td>
	<td><CENTER><strong>DIRECCION </strong></CENTER></td>
	
  </tr>';
  



$sql=mysql_query("select id_empleados,nom_emple,dpi_emple,nit_emple,tel_emple,email_emple,dir_emple from empleados");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		<td><CENTER>'.$res['id_empleados'].'</CENTER></td>
		<td>'.$res['nom_emple'].'</td>
		<td>'.$res['dpi_emple'].'</td>
		<td>'.$res['nit_emple'].'</td>
		<td>'.$res['tel_emple'].'</td>
		<td>'.$res['email_emple'].'</td>
		<td>'.$res['dir_emple'].'</td>
		
		
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
$dompdf->stream("Reporte_Empleados.pdf");
?>