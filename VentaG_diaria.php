<?php

$conexion=mysql_connect("localhost","root","");
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
<h2> Reporte General de Venta Diaria</h2>
</br>

<form class="form-horizontal">
<div class="control-group">
              <label class="control-label">Fecha de Inicio :</label>
              <div class="controls">
                <input name="fechaini" type="text" id="fechaini" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  <label class="control-label">Fecha Final :</label>
              <div class="controls">
                <input name="fechafin" type="text" id="fechafin" class="span2" placeholder="dd-mm-yyyy" />
              </div>
			  <input type="hidden" id="form_sent" name="form_sent" value="true">
			  <input type="submit" id="btn_sumit" class="btn btn-success" value="Generar Reporte">
			  <input type="submit" id="btn_sumit1"  class="btn btn-danger" value="Cancelar">
			  
			  
			  
 </div>
 
 
 
 <div class="form-actions">
              
</div>

</form>			


<?php if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") { ?>

<?php
	$SDATE = $_GET['fechaini'];
	$SSDATE = explode ('-', $SDATE);
	$FECHAINI = $SSDATE[2]."-".$SSDATE[1]."-".$SSDATE[0];
	//echo('<h3>'.$FECHAINI.'</h3>');
	
	$FDATE = $_GET['fechafin'];
	$FFDATE = explode ('-', $FDATE);
	$FECHAFIN = $FFDATE[2]."-".$FFDATE[1]."-".$FFDATE[0];
	//echo('<h3>'.$FECHAFIN.'</h3>');
	
	$strsql= "select  numero_venta,serie_venta,fecha_venta, totpagar_venta from venta where venta.fecha_venta between '$FECHAINI' and '$FECHAFIN'";
	//echo ('<h3>'.$strsql.'</h3>');
	
	$rs= mysql_query($strsql) or die (mysql_error());
	$row= mysql_fetch_assoc($rs);
	$total_rows = mysql_num_rows($rs);
	
?>

<table border="1" width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="white"><CENTER><strong>REPORTE GENERAL DE VENTA DIARIA</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
    
    <td width="50"><CENTER><strong>No.Factura</strong></CENTER></td>
    <td width="50"><CENTER><strong>Serie</strong></CENTER></td>
	<td><CENTER><strong>Fecha</strong></CENTER></td>
    <td><CENTER><strong>Total Venta</strong></CENTER></td>
	
	
  </tr>
  
<?php if ($total_rows > 0){
	do{
?>		
	<tr>
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
  

<table border="2" width="500" bgcolor="#00CCFF">
<tr>
<td align="center" colspan="2">
<strong>EXPORTAR REPORTE </strong>
</td>
<tr>
<td width="439"><strong>REPORTE EN PDF</strong></td>
<td width="145" align="center"><a href="ReportePdf_VentaG_diaria.php"><img src="img/pdf.png" width="30" height="25"/></a></td>
</tr>
<tr>
<td><strong>REPORTE EN EXCEL</strong></td>
<td align="center"><a href="ReporteExcel_VentaG_diaria.php"><img src="img/excel.png" width="30" height="25"/></a></td>
</tr>

</table>

<div id="footer" class="span12"> UMG &copy; Grupo Dinamita</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>
</body>
</html>