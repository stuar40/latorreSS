<?php

session_start();
include_once "conexion.php";

$vUsuario = $_POST['Usuario'];
$vPassword = $_POST['Password'];

$result = mysqli_query($conexion,"SELECT * FROM empleados WHERE usuario_emple= '$vUsuario'");

if (isset($_POST['Cancelar'])) {
    header("location:index.php");

}elseif(isset($_POST['Ingresar'])){


if($row = mysqli_fetch_array($result))
{
 if($row["pass_emple"] == $vPassword)
 {

       if ($row["tipo_emple"]== "1") {
 		header('Location: inicio.php');

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $vUsuario;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);

 	}elseif ($row["tipo_emple"]== "0") {
        header("location: usuario.php");
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $vUsuario;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);

 	}


 }
 else
 {
echo "Password Incorrecto "  ;
echo "";
echo "<br><a href='index.php'>Volver a Intentarlo</a>";

 }
}
else
{
 echo "Usuario Incorrecto";
 echo "<br><a href='index.php'>Volver a Intentarlo</a>";


}


}









?>
