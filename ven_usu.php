<?php
  
  
  $active_facturas="active";
  $active_productos="";
  $active_clientes="";
  $active_usuarios="";  
  $title="Nueva Factura | Simple Invoice";
  
  /* Connect To Database*/
  require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include("head.php");?>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Antenas y Servicios</a></h1>
</div>


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

<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="tip-bottom">Elementos del formulario</a> <a href="#" class="current">Proveedor</a> 
  </div>
  <h1>Generar Nueva Venta</h1>

  </div>


<div class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4><i class='glyphicon glyphicon-edit'></i> Facturar Venta</h4>
    </div>
    <div class="panel-body">
    <?php 
      include("modal/buscar_productos.php");
      include("modal/registro_clientes.php");
      include("modal/registro_productos.php");
    ?>
      


      <form class="form-horizontal" role="form" id="datos_factura">
        
        

        <div class="form-group row">
          

          
          <div class="col-lg-4 text-center">
          <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
            <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
            <input id="id_cliente" type='text'> 
          </div>


          
              <div class="col-lg-4 text-center">
              <label for="tel1" class="col-md-1 control-label">Teléfono</label>
                <input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
              </div>



          
              <div class="col-lg-4 text-center">
              <label for="mail" class="col-md-1 control-label">Email</label>
                <input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
              </div>

         </div>


            <div class="form-group row">
              
              <div class="col-lg-4 text-center">
              <label for="empresa" class="col-md-1 control-label">Vendedor</label>
                <select class="form-control input-sm" id="id_vendedor">
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from empleados order by nom_emple");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_vendedor=$rw["id_empleados"];
                      $nombre_vendedor=$rw["nom_emple"];
                      if ($id_vendedor==$_SESSION['id_empleados']){
                        $selected="selected";
                      } else {
                        $selected="";
                      }
                      ?>
                      <option value="<?php echo $id_vendedor?>" <?php echo $selected;?>><?php echo $nombre_vendedor?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>


              
              <div class="col-lg-4 text-center">
              <label for="tel2" class="col-md-1 control-label">Fecha</label>
                <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
              </div>
              
              <div class="col-lg-4 text-center">
               <label for="email" class="col-md-1 control-label">Pago</label>
                <select class='form-control input-sm' id="condiciones">
                  <option value="1">Efectivo</option>
                  
                </select>
              </div>
            </div>
        
        
        <div class="col-md-12">
          <div class="pull-right">
            
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
             <span class="glyphicon glyphicon-search"></span> Agregar productos
            </button>
            <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-print"></span> Vender
            </button>
          </div>  
        </div>
      </form> 
      
    <div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->      
    </div>
  </div>    
      <div class="row-fluid">
      <div class="col-md-12">
      
  

      
      </div>  
     </div>
  </div>
  <hr>
  <?php
  include("footer.php");
  ?>
   <script type="text/javascript" src="js/VentanaCentrada.js"></script> 
  <script type="text/javascript" src="js/nueva_factura2.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
    $(function() {
            $("#nombre_cliente").autocomplete({
              source: "./ajax/autocomplete/clientes.php",
              minLength: 2,
              select: function(event, ui) {
                event.preventDefault();
                $('#id_cliente').val(ui.item.id_empresa);
                $('#nombre_cliente').val(ui.item.nombre_emp);
                $('#tel1').val(ui.item.tel_emp);
                $('#mail').val(ui.item.email_emp);
                                
                
               }
            });
             
            
          });
          
  $("#nombre_cliente" ).on( "keydown", function( event ) {
            if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
            {
              $("#id_cliente" ).val("");
              $("#tel1" ).val("");
              $("#mail" ).val("");
                        
            }
            if (event.keyCode==$.ui.keyCode.DELETE){
              $("#nombre_cliente" ).val("");
              $("#id_cliente" ).val("");
              $("#tel1" ).val("");
              $("#mail" ).val("");
            }
      }); 
  </script>













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
<script>
      $(document).ready(function(){
      $(".cantidades").inputmask();
      });

      $("#fecha_ingreso").datepicker({
        language: "es",
        format: "yyyy-mm-dd"
      });
    </script>
</body>
</html>