<?php session_start(); 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
  { 
  } else 
{ 
  echo "Esta pagina es solo para usuarios registrados.<br>";   
  echo "<br><br><a href='index.php'>LOGIN</a>"; 
  exit; 
} 

$now = time(); 
if($now > $_SESSION['expire']) 
{ 
  session_destroy(); 
  echo "Su sesion a terminado, <a href='index.php'>Necesita Hacer Login</a>"; 
  exit; 
} 

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
    
    <li class=""><a title="" href="CerrarSesion.php"><i class="icon icon-share-alt"></i> <span class="text">Cerrar Sesión</span></a></li>
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
    <div id="breadcrumb"> <a href="usuario.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
   
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lg span3"> <a > <i class="icon-signal"></i> <h2>ANTENAS</h2></a> </li>
        <li class="bg_ly"> <a> <i class="icon-inbox"></i><span class="label label-success"></span> <H1>&</H1> </a> </li>
        <li class="bg_lr"> <a> <i class="icon-pencil"></i> <H1>SERVICIOS</H1></a> </li>
      </ul>
    </div>

    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span> <i></i> </span>
            <h5></h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1>Usuario</h1>
              <h3>Un sistema Web para un estricto Control de clientes, proveedores y empleados así como también el control de ventas por empleado generando un reporte por día y mes de las ventas realizadas.</h3>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row-fluid">
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