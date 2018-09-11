<?php

define('DB_SERVER', 'localhost');
define('DB_NAME', 'la_torre_bd');
define('DB_USER', 'estuardoBD');
define('DB_PASS', 'eddy5795');

$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($conexion,DB_NAME);
if (!$conexion){
echo 'error de conexion ';
}
else{
// echo 'conexion BD';
}
?>
