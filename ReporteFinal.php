<?php 
/* Connect To Database*/
  require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

?>

<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UMG</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/red.css" rel="stylesheet">
  
 <script src="fusioncharts/js/fusioncharts.js"></script> 
      <script type="text/javascript" src="fusioncharts/js/elegant.js"></script>

</head>

<?php
/*
//SQL Query for the Parent chart.
//$strQuery = "SELECT (trajegala+trajebanio+mensaje+coreografia) as total ,candidatas.nombrec as candidata FROM calificacion
//inner join candidatas on candidatas.idcandidatas=idcalificacion where 1 order by total desc";

//Execute the query, or else return the error message.
$result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

//If the query returns a valid response, preparing the JSON array.
if ($result) {
    //`$arrData` holds the Chart Options and Data.
    $arrData = array(
        "chart" => array(
            "caption" => "- REPORTE FINAL -",
            "xAxisName"=> "Candidatas",
            "yAxisName"=> "Puntos",
            "theme" => "elegant",
            
        )
    );
    
    //Create an array for Parent Chart.
    $arrData["data"] = array();
    
    // Push data in array.
    while ($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["candidata"],
            "value" => $row["total"],
        ));
        
    }
    
      //Convert the array created into JSON as our chart would recieve the dat ain JSON
		$jsonEncodedData = json_encode($arrData);
        
        $columnChart = new FusionCharts("column2d", "" , "300%", "450", "linked-chart", "json", "$jsonEncodedData"); 
        
        $columnChart->render();    //Render Method
        $dbhandle->close(); //Closing DB Connection
     
    
}
?> */


//<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

//<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Fiestas San Marcos 2017 </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">9no. Semestre - UMG</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="principal.php">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="../cerrarsesion.php">Cerrar Sesion</a></li>
				<div class="btn-group"> 
				<button type="button" class="btn btn-primary" onclick="document.location.reload();">ACTUALIZAR</button> 
				<button type="button" class="btn btn-primary">REPORTES</button> 
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> 
				<span class="caret"></span>  </button> 
				<ul class="dropdown-menu" role="menu"> 
			
				
				<li><a href="ReporteCoreografia.php">Coreografia</a></li> 
				<li><a href="ReporteTrajeBanio.php">Traje de Baño</a></li>
				<li><a href="ReporteTrajeNoche.php">Traje de Gala</a></li> 
				<li><a href="ReporteMensaje.php">Mensaje</a></li>
				<li><a href="ReporteFinal.php">Reporte Final</a></li>
				
				<li><a href="PDFReporteFinal.php">Tabla de Resultado Final</a></li>
				
				</ul> </div>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
<?php
    if (!isset($_SESSION['valido']))
        $_SESSION['valido']=0;

    if(($_SESSION['valido']==0)||($_SESSION['tipo']==2))
    {
    echo"   <section id='intro' class='intro'>";
    echo"        <div class='intro-content'>";
                echo "<div class='container'>";
                echo"<div align='center'>    " ;       
                echo"<img class='img-responsive' src='img/restringido.jpg' alt='restringido'>";
                echo"<a class='btn btn-warning' href='../index.php'>Inicio</a>";
                echo"</div>                ";
                echo"</div>      ";
            echo"</div>";
        echo"</div>     "; 
    echo"</section>";


    }
else //if (($_SESSION['tipo']=1)||($_SESSION['tipo']=3))
    {
?>


	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">	</div>




   <div style="width:350px;" ><center>
   <div id="linked-chart">!</div></center></div>





							
				</div>		
			</div>
		</div>		
    </section>
	
			<button type="button" class="btn btn-warning"><a href="PDFReporteFinal.php">Generar Reporte</a></button>

		<footer>
	
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
	
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Siguenos</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
	
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright - 9no. Semestre - UMG.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">

					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    


</body>

</html>
<?php
}
?>