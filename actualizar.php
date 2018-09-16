<?php
include("conexion.php");

$query = "UPDATE empresa_cliente 
          SET id_empresa=[value-1], nombre_emp=[value-2], nit_emp=[value-3], descripcion_emp =[value-4],dir_emp=[value-5],tel_emp=[value-6],email_emp=[value-7],pais_emp=[value-8] 
          WHERE 1";

?>	