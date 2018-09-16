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

<form action="ReporteG_diario.php" method="POST"  class="form-horizontal">
<div class="control-group">
              <label class="control-label">Fecha de Inicio :</label>
              <div class="controls">
                <input name="fechaini" type="text" class="span2" placeholder="Fecha de Inicio" />
              </div>
			  <label class="control-label">Fecha Final :</label>
              <div class="controls">
                <input name="fechafin" type="text" class="span2" placeholder="Fecha Final" />
              </div>
			  
			  
 </div>
 
 
 
 <div class="form-actions">
              <button name="Registrar" type="submit" class="btn btn-success">Generar Reporte</button>
              <button name="Cancelar" type="submit" class="btn btn-danger">Cancelar </button>
</div>
<div id="submitted"></div>
</form>			

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
  


<?php
$sql=mysql_query("select  numero_venta,serie_venta,fecha_venta, totpagar_venta from venta ");
while($res=mysql_fetch_array($sql)){
?>	
	<tr>
		
		<td><CENTER><?php echo $res['numero_venta']; ?></CENTER> </td>
		<td><CENTER><?php echo $res['serie_venta']; ?></CENTER> </td>
		<td><CENTER><?php echo $res['fecha_venta']; ?> </CENTER></td>
		<td><CENTER><?php echo $res['totpagar_venta']; ?></CENTER> </td>
		
		
		
	</tr>
	
<?php  } ?>
</table>

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


 
<div class="row-fluid">
<br>


</br>
  <div id="footer" class="span12"> UMG &copy; Grupo Dinamita</div>
</div>

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>

