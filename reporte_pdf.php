<?php

		require_once("dompdf/dompdf_config.inc.php");
		$conexion=mysql_connect("localhost","root","");
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
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="13" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA EMPLEADOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>ID</strong></td>
    <td><strong>NOMBRE</strong></td>
    <td><strong>SEXO</strong></td>
    <td><strong>DPI</strong></td>
	<td><strong>NIT</strong></td>
    <td><strong>LICENCIA</strong></td>
    <td><strong>TELEFONO</strong></td>
	<td><strong>CORREO</strong></td
	<td><strong>DIRECCION</strong></td>
	<td><strong>FECHAINGRESO</strong></td>
	<td><strong>TIPO</strong></td>
	<td><strong>USER</strong></td>	
	<td><strong>PASS</strong></td>
  </tr>';
  



$sql=mysql_query("select * from empleados");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		<td>'.$res['id_empleados'].'</td>
		<td>'.$res['nom_emple'].'</td>
		<td>'.$res['sexo_emple'].'</td>
		<td>'.$res['dpi_emple'].'</td>
		<td>'.$res['nit_emple'].'</td>
		<td>'.$res['lice_emple'].'</td>	
		<td>'.$res['tel_emple'].'</td>
		<td>'.$res['email_emple'].'</td>
		<td>'.$res['dir_emple'].'</td>
		<td>'.$res['fechaingres_emple'].'</td>
		<td>'.$res['tipo_emple'].'</td>
		<td>'.$res['usuario_emple'].'</td>
		<td>'.$res['pass_emple'].'</td>
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
$dompdf->stream("Reporte_tabla_empleados.pdf");
?>