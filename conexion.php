<?php

define('DB_SERVER', 'localhost');
define('DB_NAME', 'antenas');
define('DB_USER', 'antenas');
define('DB_PASS', 'Antenas@123');

$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($conexion,DB_NAME);
if (!$conexion){
echo 'error de conexion ';
}
else{
// echo 'conexion BD';
}
?>
