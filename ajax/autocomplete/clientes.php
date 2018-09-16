<?php
if (isset($_GET['term'])){
include("../../config/db.php");
include("../../config/conexion.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($con)
{
	
	$fetch = mysqli_query($con,"SELECT * FROM empresa_cliente where nombre_emp like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_cliente=$row['id_empresa'];
		$row_array['value'] = $row['nombre_emp'];
		$row_array['id_empresa']=$id_cliente;
		$row_array['nombre_emp']=$row['nombre_emp'];
		$row_array['tel_emp']=$row['tel_emp'];
		$row_array['email_emp']=$row['email_emp'];
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($con);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>