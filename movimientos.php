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
<h2> Movimientos</h2>
</br>

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
  
  $strsql= "select  idmovimientos,tipo_mov,fecha_mov,cantidad_mov,precio_mov,motivo_mov,empleados_id,venta_idventa,producto_id from movimientos where movimientos.fecha_mov between '$FECHAINI' and '$FECHAFIN'";
  //echo ('<h3>'.$strsql.'</h3>');
  
  $rs= mysql_query($strsql) or die (mysql_error());
  $row= mysql_fetch_assoc($rs);
  $total_rows = mysql_num_rows($rs);
  
?>

<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="white"><CENTER><strong>MOVIMIENTOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="skyblue">
   
  <td><CENTER><strong>COD.MOVIMINETOS</strong></CENTER></td> 
  <td><CENTER><strong>TIPO</strong></CENTER></td>
  <td><CENTER><strong>FECHA</strong></CENTER></td>
	<td><CENTER><strong>CANTIDAD</strong></CENTER></td>
  <td><CENTER><strong>PRECIO</strong></CENTER></td>
	<td><CENTER><strong>MOTIVO</strong></CENTER></td>
	<td><CENTER><strong>COD.EMPLEADO</strong></CENTER></td>
  <td><CENTER><strong>COD.VENTA</strong></CENTER></td>
  <td><CENTER><strong>COD.PRODUCTO</strong></CENTER></td>
	
  </tr>
  


<?php if ($total_rows > 0){
  do{
?>	
	<tr>
		<td><CENTER><?php echo $row['idmovimientos']; ?></CENTER> </td>
		<td><?php echo ($row['tipo_mov']); ?> </td>
		<td><?php echo ($row['fecha_mov']); ?> </td>
		<td><?php echo ($row['cantidad_mov']); ?> </td>
		<td><?php echo ($row['precio_mov']); ?> </td>
		<td><?php echo ($row['motivo_mov']); ?> </td>
		<td><CENTER><?php echo ($row['empleados_id']); ?> </CENTER></td>
    <td><CENTER><?php echo ($row['venta_idventa']); ?> </CENTER></td>
    <td><CENTER><?php echo ($row['producto_id']); ?> </CENTER></td>
		
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

<h3> Generar Reporte </h3>
<h6> Ingrese nuevamente las fechas</h6>
<form class="form-horizontal" action="ReportePdf_Movimiento.php" method="get">
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
       
       
        <td width="200"><a  href="inicio.php" class="btn btn-danger"><img src="img/larrow.png" width="12" height="15"/>  Regresar </a></td>
        
        
        
 </div>
 </form>




 
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

