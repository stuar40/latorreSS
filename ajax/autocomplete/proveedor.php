<?php
if (isset($_GET['term'])){
include("../../config/db.php");
include("../../config/conexion.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($con)
{
	
	$fetch = mysqli_query($con,"SELECT * FROM proveedores where nom_prov like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_proveedor=$row['id_proveedores'];
		$row_array['value'] = $row['nom_prov'];
		$row_array['id_proveedores']=$id_proveedor;
		$row_array['nom_prov']=$row['nom_prov'];
		$row_array['tel_prov']=$row['tel_prov'];
		$row_array['email_prov']=$row['email_prov'];
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($con);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>