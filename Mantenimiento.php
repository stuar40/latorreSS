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
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
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
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenido</span></a>

    </li>
    <li class=""><a title="" href="CerrarSesion.php"><i class="icon icon-share-alt"></i> <span class="text">Cerrar Sesión</span></a></li>
  </ul>
</div>



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


<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="inicio.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="tip-bottom">Elementos del formulario</a> <a href="#" class="current">Mantenimiento</a>
  </div>
  <h1>Mantenimiento - Usuario</h1>
</div>

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">


      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Buscar</h5>
        </div>
        <div class="widget-content nopadding">





          <form action="" method="POST" class="form-horizontal">



            <!--<div class="control-group">
              <label class="control-label">Nombres y Apellidos:</label>
              <div class="controls">
                <input name="nombre" type="text" value="0" class="span11" placeholder="Nombres y Apellidos" />
              </div>
            </div> -->

            <div class="control-group">
              <label class="control-label">DPI Usuario del Sistema</label>
              <div class="controls">
                <input name="dpi" type="text" value="0"  class="span11" placeholder="DPI"  />
              </div>
            </div>

              <div class="form-actions">
              <button name="Buscar" class="btn btn-success btn-large">Buscar</button>
              </div>
          </form>


<?php
include("conexion.php");
//$C1 = $_POST['id'];
//$C2 = $_POST['nombre'];
$C3 = $_POST['dpi'];

$query = "SELECT * FROM empleados WHERE  dpi_emple='$C3'";

$row   = mysqli_query($conexion, $query);
$dato  = mysqli_fetch_array($row);

?>

        </div>
      </div>
    </div>



     <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Información Personal</h5>
        </div>
        <div class="widget-content nopadding">





          <form action="EliminarEmpleado.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Id Empleado :</label>
              <div class="controls">
                <input name="Id" value="<?php echo $dato['id_empleados']?>" type="text" required="required" class="span11" placeholder="Numero de Empleado" />
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Nombres y Apellidos :</label>
              <div class="controls">
                <input name="Nombres" value="<?php echo $dato['nom_emple']?>" type="text" required="required" class="span11" placeholder="Nombres y Apellidos" />
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Sexo :</label>
              <div class="controls">
                <input name="Sexo" value="<?php echo $dato['sexo_emple']?>" type="text" class="span11" placeholder="Sexo" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">DPI :</label>
              <div class="controls">
                <input name="DPI" value="<?php echo $dato['dpi_emple']?>" type="text" required="required" class="span11" placeholder="DPI" />
              </div>

              <div class="control-group">
              <label class="control-label">NIT :</label>
              <div class="controls">
                <input name="NIT" value="<?php echo $dato['nit_emple']?>" type="text" class="span11" placeholder="NIT" />
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Licencia :</label>
              <div class="controls">
                <input name="Licencia" value="<?php echo $dato['lice_emple']?>" type="text" class="span11" placeholder="Licencia" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Teléfono</label>
              <div class="controls">
                <input name="Telefono" value="<?php echo $dato['tel_emple']?>" type="password"  class="span11" placeholder="Teléfono"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Dirección :</label>
              <div class="controls">
                <input name="Direccion" value="<?php echo $dato['dir_emple']?>" type="text" class="span11" placeholder="Dirección" />
              </div>
            </div>

            </div>

              <div class="control-group">
              <label class="control-label">Dirección de Correo :</label>
              <div class="controls">
                <input name="Correo" value="<?php echo $dato['email_emple']?>" type="text" class="span11" placeholder="Dirección de Correo" />
              </div>


              <div class='form-group'>
                        <label class="control-label">Fecha Ingreso a la Empresa :</label>
                        <div class="controls">
                            <input name="FechaIngreso" value="<?php echo $dato['fechaingres_emple']?>" type="text" class="span11" id='fecha_ingreso' placeholder='Fecha Ingreso a la Empresa'/>
                        </div>
                      </div>

            </div>

              <div class="control-group">
              <label class="control-label">Tipo :</label>
              <div class="controls">
                <input name="Tipo" value="<?php echo $dato['tipo_emple']?>" type="text" class="span11" placeholder="Tipo" />
              </div>
              </div>



          <h5>Seguridad de Cuenta</h5>

        <div class="control-group">
             <label class="control-label">Usuario</label>
                  <div class="controls">
                    <input name="Usuario" value="<?php echo $dato['usuario_emple']?>" id="Usuario" type="text" name="Usuario" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Contraseña</label>
                  <div class="controls">
                    <input name="Contraseña" value="<?php echo $dato['pass_emple']?>" id="password" type="password" name="password" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirmar Contraseña</label>
                  <div class="controls">
                    <input value="<?php echo $dato['pass_emple']?>" id="password2" type="password" name="password2" />
                  </div>
                </div>
              </div>


           <div class="control-group">
              <div class="form-actions">
                <button name="Modificar" id="Modificar" type="submit" class="btn btn-success btn-large">Modificar</button>

                <button name="Cancelar" id="Cancelar" type="submit" class="btn btn-primary btn-large">Cancelar</button>
                <button class="btn btn-inverse btn-large">Imprimir</button>
                <button name="Eliminar" id="Eliminar" type="submit" class="btn btn-danger btn-large">Eliminar</button>
            <div class="span6">
            </div>
            </div>
              </div>
          </form>






        </div>
        </div>
      </div>

</div>








<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> UMG &copy; Grupo Dinamita</div>
</div>
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
