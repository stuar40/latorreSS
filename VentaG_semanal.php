<?php

$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<title>Antenas y Servicios</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<script src="js/jquery.js"></script>
<script src="js/myjava.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
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
    <li class="active"><a href="inicio.php"><i class="icon icon-home"></i> <span>Inicio</span></a> </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Usuario</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="form-common.php">Nuevo</a></li>
        <li><a href="Mantenimiento.php">Mantenimiento</a></li>
      </ul>
    </li> 

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Producto</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="Producto.php">Nuevo</a></li>
        <li><a href="Mantenimiento_Producto.php">Mantenimiento</a></li>
      </ul>
    </li> 

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Proveedores</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="Proveedores.php">Nuevo</a></li>
        <li><a href="Mantenimiento_Proveedores.php">Mantenimiento</a></li>
      </ul>
    </li> 

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Cliente</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="Cliente.php">Nuevo</a></li>
        <li><a href="Mantenimiento_Cliente.php">Mantenimiento</a></li>
      </ul>
    </li> 

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Servicio</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="Servicio.php">Nuevo</a></li>
        <li><a href="Mantenimiento_Servicio.php">Mantenimiento</a></li>
      </ul>
    </li>


    <li class="submenu"> <a href="#"><i class="icon-shopping-cart"></i> <span>Ventas</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="ventas.php"><i class="icon-shopping-cart"></i>Nueva Venta</a></li>
        
      </ul>
    </li> 

  <li class="submenu"> <a href="#"><i class="icon-shopping-cart"></i> <span>Compras</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="compras.php"><i class="icon-shopping-cart"></i>Nueva Compra</a></li>
         <li><a href="Ingresoproducto.php"><i class="icon-shopping-cart"></i>Ingresar Producto</a></li>
      </ul>
    </li> 

   
    

            <li class="submenu"> <a href="#"><i class="icon-shopping-cart"></i> <span>Venta de Servicios</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="servicios.php"><i class="icon-shopping-cart"></i>Venta de Servicios</a></li>
        
      </ul>
    </li> 

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reportes de Ventas</span> <span class="label label-important"></span></a>
    <ul>
        
    <li class=""><a href="VentaG_dia.php"><i class="icon icon-credit-card"></i> <span>General Ventas del dia</span></a> </li>
    <li class=""><a href="VentaG_semanal.php"><i class="icon icon-credit-card"></i> <span>General Venta Semanal</span></a> </li>
    <li class=""><a href="VentaG_mensual.php"><i class="icon icon-credit-card"></i> <span>General Venta Mensual</span></a> </li>
  
    </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reportes de Empleados </span> <span class="label label-important"></span></a>
    <ul>
    
    <li class=""><a href="empleado.php"><i class="icon icon-credit-card"></i> <span>Empleados</span></a> </li>
    <li class=""><a href="VentaE_dia.php"><i class="icon icon-credit-card"></i> <span>Ventas del dia</span></a> </li>
    <li class=""><a href="VentaE_semanal.php"><i class="icon icon-credit-card"></i> <span>Venta Semanal</span></a> </li>
    <li class=""><a href="VentaE_mensual.php"><i class="icon icon-credit-card"></i> <span>Venta Mensual</span></a> </li>
  
    
    </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reportes de Clientes</span> <span class="label label-important"></span></a>
    <ul>
        
      
      
      <li><a href="clientes.php">Clientes</a></li>
    
    </ul>
    </li>

     <li class="sumbmenu "><a href="movimientos.php"><i class="icon-folder-open"></i> <span>Kardex-Movimientos</span></a> </li>
  <li class="sumbmenu "><a href="productos.php"><i class="icon-folder-open"></i> <span>Productos</span></a> </li>
  








    
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
<h2> REPORTE GENERAL DE VENTA SEMANAL</h2>
<h6> Ingrese fechas para la busqueda</h6>

</br>

<form class="form-horizontal">
<div class="control-group">
		<label class="control-label">Ingrese Fecha de Inicio :</label>
              <div class="controls">
                <input name="fechaini" type="date" id="fechaini" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  <label class="control-label">Ingrese Fecha Final :</label>
              <div class="controls">
                <input name="fechafin" type="date" id="fechafin" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  <input type="hidden" id="form_sent" name="form_sent" value="true">
			   <td width="200"><a><img src="img/graph1.png" width="25" height="25"/> <input type="submit" id="btn_sumit" class="btn btn-success"  value="Ver Reporte">  </a></td>
			 


</div>
</form>	


<br>

</br>


<?php if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") { ?>

<?php
	$SDATE = $_GET['fechaini'];
	$SSDATE = explode ('/', $SDATE);
	$FECHAINI = $SDATE;
	//echo('<h3>'.$FECHAINI.'</h3>');
	
	$FDATE = $_GET['fechafin'];
	$FFDATE = explode ('/', $FDATE);
	$FECHAFIN = $FDATE;
	//echo('<h3>'.$FECHAFIN.'</h3>');
	
	$strsql= "select  numero_venta,serie_venta,fecha_venta, totpagar_venta,empleados_id from venta where venta.fecha_venta between '$FECHAINI' and '$FECHAFIN'";
	//echo ('<h3>'.$strsql.'</h3>');
	
	$rs= mysql_query($strsql) or die (mysql_error());
	$row= mysql_fetch_assoc($rs);
	$total_rows = mysql_num_rows($rs);
	
?>

<table border="1" width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="5" bgcolor="white"><CENTER><strong>REPORTE GENERAL DE VENTA SEMANAL</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
    
    <td width="50"><CENTER><strong>No.Factura</strong></CENTER></td>
    <td width="50"><CENTER><strong>Serie</strong></CENTER></td>
	<td><CENTER><strong>Fecha</strong></CENTER></td>
    <td><CENTER><strong>Total Venta</strong></CENTER></td>
	<td><CENTER><strong>Cod.Vendedor</strong></CENTER></td>
	
  </tr>
  
<?php if ($total_rows > 0){
	do{
?>		
	<tr>
		<td><CENTER><?php echo ($row['numero_venta']); ?></CENTER> </td>
		<td><CENTER><?php echo ($row['serie_venta']); ?></CENTER> </td>
		<td><CENTER><?php echo ($row['fecha_venta']); ?> </CENTER></td>
		<td><CENTER><?php echo "Q"?><?php echo($row['totpagar_venta']); ?></CENTER> </td>
		<td><CENTER><?php echo ($row['empleados_id']); ?> </CENTER></td>
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



<h3> Generar Reporte Semanal</h3>
<h6> Ingrese nuevamente las fechas</h6>
<form class="form-horizontal" action="ReportePdf_VentaG_semanal.php" method="get">
<div class="control-group">

              <label class="control-label">Ingrese Fecha de Inicio :</label>
              <div class="controls">
                <input name="fechaini" type="date" id="fechaini" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  <label class="control-label">Ingrese Fecha Final :</label>
              <div class="controls">
                <input name="fechafin" type="date" id="fechafin" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  <input type="hidden" id="form_sent" name="form_sent" value="true">
			   <td width="200"><a><img src="img/pdf1.png" width="25" height="25"/> <input type="submit" id="btn_sumit" class="btn btn-success"  value="Generar Reporte">  <img src="img/pdf.png" width="25" height="25"/></a></td>
			 
			 
			  <td width="200"><a  href="ReporteVenta_general.php" class="btn btn-danger"><img src="img/larrow.png" width="12" height="15"/>  Regresar </a></td>
			  
			  
			  
 </div>
 </form>
	

 <br>



 </br> 


<div id="footer" class="span12"> UMG &copy; Grupo Dinamita</div>
</body>
</html>