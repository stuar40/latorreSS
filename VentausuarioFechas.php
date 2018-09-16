<?php

$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Antenas y Servicios</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Antenas y Servicios</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenido</span><b ></b></a>
    </li>
    
    <li class=""><a title="" href="index.php"><i class="icon icon-share-alt"></i> <span class="text">Cerrar Sesión</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->


<!--inico de menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Menú</a>
  <ul>
    <li class="active"><a href="usuario.php"><i class="icon icon-home"></i> <span>Inicio</span></a> </li>




    <li class="submenu"> <a href="#"><i class="icon-shopping-cart"></i> <span>Ventas</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="ven_usu.php"><i class="icon-shopping-cart"></i>Nueva Venta</a></li>
        
      </ul>
    </li> 


   
    

            <li class="submenu"> <a href="#"><i class="icon-shopping-cart"></i> <span>Venta de Servicios</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="serv_usu.php"><i class="icon-shopping-cart"></i>Venta de Servicios</a></li>
        
      </ul>
    </li> 

    

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reportes de Empleados </span> <span class="label label-important"></span></a>
    <ul>
    
    
   
    <li class=""><a href="VentausuarioFechas.php"><i class="icon icon-credit-card"></i> <span>Venta por Fechas</span></a> </li>
   
  
    
    </ul>
    </li>


    
  </ul>
</div>
<!-- fin de menu -->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="inicio.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
<br>
<h2> REPORTE VENTA SEMANAL POR VENDEDOR</h2>
<h6> Ingrese su codigo de vendedor y  fechas inicio - final de semana</h6>
</br>

<form class="form-horizontal">
<div class="control-group">
			  <label class="control-label">Codigo Vendedor :</label>	
			  <div class="controls">
			  <input name="cod" type="text" id="cod" class="span2" placeholder="codigo vendedor" />
			  </div>
			   
              <label class="control-label">Ingrese fecha de Inicio :</label>
              <div class="controls">
              <input name="fechaini" type="date" id="fechaini" class="span2" placeholder="dd/mm/yyyy" />
			  </div>

			  <label class="control-label">Ingrese Fecha Final :</label>
              <div class="controls">
                <input name="fechafin" type="date" id="fechafin" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  
			  <input type="hidden" id="form_sent" name="form_sent" value="true">
			  <td width="200"><a><img src="img/graph1.png" width="25" height="25"/> <input type="submit" id="btn_sumit" class="btn btn-success"  value="Ver Reporte">  </a></td>
			 
			  
 </div>
 
 
 
 <div class="form-actions">
              
</div>
</form>			


<?php if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") { ?>
<?php 
	$Codigo = $_GET['cod'];
	$COD = $Codigo;
?>	
<?php
	$SDATE = $_GET['fechaini'];
	$SSDATE = explode ('/', $SDATE);
//	$FECHAINI = $SSDATE[2]."/".$SSDATE[1]."/".$SSDATE[0];
//	$FECHAINI = $SSDATE[2].$SSDATE[1].$SSDATE[0];
	$FECHAINI = $SDATE;

	//echo('<h3>'.$FECHAINI.'</h3>');
	
	$FDATE = $_GET['fechafin'];
	$FFDATE = explode ('/', $FDATE);
	$FECHAFIN = $FDATE;
	//$FECHAFIN = $FFDATE[2]."-".$FFDATE[1]."-".$FFDATE[0];
	//echo('<h3>'.$FECHAFIN.'</h3>');

	
	$strsql= "select  empleados_id, numero_venta,serie_venta,fecha_venta, totpagar_venta from venta where venta.empleados_id='$COD' and venta.fecha_venta between '$FECHAINI' and '$FECHAFIN'";
//	echo ('<h3>'.$strsql.'</h3>');
//	$strsql= "select  empleados_id, numero_venta,serie_venta,fecha_venta, totpagar_venta  from venta where venta.fecha_venta='$FECHAINI'";
	
	
	$rs= mysql_query($strsql) or die (mysql_error());
	$row= mysql_fetch_assoc($rs);
	$total_rows = mysql_num_rows($rs);
	
?>


<table border="1" width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="white"><CENTER><strong>REPORTE VENTA DIARIA - VENDEDOR</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
    <td><CENTER><strong>Cod.Vendedor </strong></CENTER></td>
    <td width="50"><CENTER><strong>No.Factura</strong></CENTER></td>
    <td width="50"><CENTER><strong>Serie</strong></CENTER></td>
	<td><CENTER><strong>Fecha</strong></CENTER></td>
    <td><CENTER><strong>Total Venta</strong></CENTER></td>
	
	
  </tr>
  
<?php if ($total_rows > 0){
	do{
?>		
	<tr>
		<td><CENTER><?php echo ($row['empleados_id']); ?></CENTER> </td>
		<td><CENTER><?php echo ($row['numero_venta']); ?></CENTER> </td>
		<td><CENTER><?php echo ($row['serie_venta']); ?></CENTER> </td>
		<td><CENTER><?php echo ($row['fecha_venta']); ?> </CENTER></td>
		<td><CENTER><?php echo "Q"?><?php echo($row['totpagar_venta']); ?></CENTER> </td>
	</tr>
<?php
	}while ( $row = mysql_fetch_assoc($rs) );
	 mysql_free_result($rs);
	}else {
?>
		<tr>
			<td colspan="13"><h4><CENTER><strong> No hay datos.</strong></CENTER></h4></td>
		</tr>
		
<?php } ?>	
</table>
	
<?php } ?>
	
<br>

</br>
  

<h3> Generar Reporte Semanal</h3>
<h6> Ingrese nuevamente el codigo y las fechas</h6>

<form class="form-horizontal" action="ReportePdf_VentasE_semanal.php" method="get">
<div class="control-group">


			 <label class="control-label">Codigo Vendedor :</label>	
			 <div class="controls">
			 <input name="cod" type="text" id="cod" class="span2" placeholder="codigo vendedor" />
			 </div>

              <label class="control-label">Ingrese fecha de Inicio :</label>
              <div class="controls">
                <input name="fechaini" type="date" id="fechaini" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  
			   <label class="control-label">Ingrese Fecha Final :</label>
              <div class="controls">
                <input name="fechafin" type="date" id="fechafin" class="span2" placeholder="dd-mm-yyyy" />
              </div>
              
			  <input type="hidden" id="form_sent" name="form_sent" value="true">
			   <td width="200"><a><img src="img/pdf1.png" width="25" height="25"/> <input type="submit" id="btn_sumit" class="btn btn-success"  value="Generar Reporte">  <img src="img/pdf.png" width="25" height="25"/></a></td>
			 
			 
			  <td width="200"><a  href="Venta_Usuario.php" class="btn btn-danger"><img src="img/larrow.png" width="12" height="15"/>  Regresar </a></td>
			  
			  
			  
 </div>
 </form>

<div id="footer" class="span12"> UMG &copy; Grupo Dinamita</div>
</body>
</html>