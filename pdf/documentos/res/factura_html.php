<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.midnight-blue{
	background:#2c3e50;
	padding: 4px 4px 4px;
	color:white;
	font-weight:bold;
	font-size:12px;
}
.silver{
	background:white;
	padding: 3px 4px 3px;
}
.clouds{
	background:#ecf0f1;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #bdc3c7;
	
}
.border-left{
	border-left: solid 1px #bdc3c7;
}
.border-right{
	border-right: solid 1px #bdc3c7;
}
.border-bottom{
	border-bottom: solid 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
-->
</style>
<page backtop="15mm" backbottom="15mm" backleft="15mm" backright="15mm" style="font-size: 12pt; font-family: arial" >
        <page_footer>
        <table class="page_footer">
            <tr>

                <td style="width: 50%; text-align: left">
                    P&aacute;gina [[page_cu]]/[[page_nb]]
                </td>
                <td style="width: 50%; text-align: right">
                    &copy; <?php echo "GrupoDinamita SA"; echo  $anio=date('Y'); ?>
                </td>
            </tr>
        </table>
    </page_footer>
    <table cellspacing="0" style="width: 100%;">
        <tr>

            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="../../img/logo.jpg" alt="Logo"><br>
                
            </td>
			<td style="width: 50%; color: #34495e;font-size:12px;text-align:center">
                <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo NOMBRE_EMPRESA;?></span>
				<br><?php echo 77;?><br> 
				Teléfono: <?php echo TELEFONO_EMPRESA;?><br>
				Email: <?php echo EMAIL_EMPRESA;?>
                
            </td>
			<td style="width: 25%;text-align:right">
			FACTURA Nº <?php echo $numero_factura;?> <!-- numero de factura se genera del archivo factura_pdf.php apartir de la ultima factura--> 
			</td>
			
        </tr>
    </table>
    <br>
    

	
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:50%;" class='midnight-blue'>FACTURAR A</td>
        </tr>
		<tr>
           <td style="width:50%;" >
			<?php 
				$sql_cliente=mysqli_query($con,"select * from empresa_cliente where id_empresa='$id_cliente'");
				$rw_cliente=mysqli_fetch_array($sql_cliente);
				echo $rw_cliente['nombre_emp'];
				echo "<br>";
				echo $rw_cliente['dir_emp'];
				echo "<br> Teléfono: ";
				echo $rw_cliente['tel_emp'];
				echo "<br> Email: ";
				echo $rw_cliente['email_emp'];
			?>
			
		   </td>
        </tr>
        
   
    </table>
    
       <br>
		<table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:35%;" class='midnight-blue'>VENDEDOR</td>
		  <td style="width:25%;" class='midnight-blue'>FECHA</td>
		   <td style="width:40%;" class='midnight-blue'>FORMA DE PAGO</td>
        </tr>
		<tr>
           <td style="width:35%;">
			<?php 
				$sql_user=mysqli_query($con,"select * from empleados where id_empleados='$id_vendedor'");
				$rw_user=mysqli_fetch_array($sql_user);
				echo $rw_user['nom_emple'];
			?>
		   </td>
		  <td style="width:25%;"><?php echo date("d/m/Y");?></td>
		   <td style="width:40%;" >
				<?php 
				if ($condiciones==1){echo "Efectivo";}
				elseif ($condiciones==2){echo "Cheque";}
				elseif ($condiciones==3){echo "Transferencia bancaria";}
				elseif ($condiciones==4){echo "Crédito";}
				?>
		   </td>
        </tr>
		
        
   
    </table>
	<br>
  
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
            <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO UNIT.</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO TOTAL</th>
            
        </tr>

<?php
// funcion para inicar gaurdar la venta 
$date=date("Y-m-d H:i:s");

$insert=mysqli_query($con,"INSERT INTO venta (idventa,serie_venta, numero_venta, fecha_venta, subtotal_venta, descuento_venta, totpagar_venta, empresa_cliente_id, empleados_id) 
VALUES ('$numero_factura','F', '$numero_factura', '$date', '0', '0', '0', '$id_cliente', '$id_vendedor')");

///===================== 
$nums=1;
$sumador_total=0;
$sql=mysqli_query($con, "select * from producto, tmp where producto.id_producto=tmp.id_producto and tmp.session_id='".$session_id."'");

while ($row=mysqli_fetch_array($sql))
	{
	$id_tmp=$row["id_tmp"];
	$id_producto=$row["id_producto"];
	$codigo_producto=$row['serie_prod'];
	$cantidad=$row['cantidad_tmp'];
	$nombre_producto=$row['nom_prod'];
	
	$precio_venta=$row['precio_tmp'];
	//$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	//$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta*$cantidad;
	//$precio_total_f=number_format($precio_total,2);//Precio total formateado
	//$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total;//Sumador
	
   $insert_detail=mysqli_query($con, "INSERT INTO detalle_venta (cantidad_dtventa,costo_dtventa, precio_dtventa, serieprod_dtventa, subtotal_dtventa, producto_id, venta_id) 
	VALUES ('$cantidad', '$precio_venta', '$precio_venta', '$codigo_producto', '$precio_total', '$id_producto', '$numero_factura');");


/// actuliza stock
   $sqlstock = mysqli_query($con, "select * from antenas.producto where id_producto ='".$id_producto."'");
   while ($row2=mysqli_fetch_array($sqlstock))
   {

   	$stock=$row2["stock_prod"];
   	$nuevostock=$stock - $cantidad;

   	$sqlnuevostock= mysqli_query($con , "UPDATE producto SET stock_prod='$nuevostock' WHERE id_producto='$id_producto'");

   }


// inserta detalle en el kardex

	

	$kardex=mysqli_query($con,"INSERT INTO movimientos (tipo_mov, fecha_mov,cantidad_mov, precio_mov, motivo_mov, empleados_id, venta_idventa, producto_id) 
	VALUES ('Venta', '$date', '$cantidad', '$precio_total', '$codigo_producto', '$id_vendedor', '$numero_factura', '$id_producto');");
   


   ///

	if ($nums%2==0){
		$clase="clouds";
	} else {
		$clase="silver";
	}
	
	

	?>

        <tr>
            <td class='<?php echo $clase;?>' style="width: 10%; text-align: center"><?php echo $cantidad; ?></td>
            <td class='<?php echo $clase;?>' style="width: 60%; text-align: left"><?php echo $nombre_producto;?></td>
            <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"><?php echo $precio_venta;?></td>
            <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"><?php echo $precio_total;?></td>
            
        </tr>

	<?php 
	//Insert en la tabla detalle_cotizacion
	
	$nums++;
	}
	$subtotal=$sumador_total;
	/*$total_iva=($subtotal * TAX )/100;
	$total_iva=number_format($total_iva,2,'.','');*/
	$total_factura=$subtotal;
?>
	  
        <tr>
            <td colspan="3" style="widtd: 85%; text-align: right;">SUBTOTAL Q. </td>
            <td style="widtd: 15%; text-align: right;"> <?php echo number_format($subtotal,2);?></td>
        </tr>
		<tr>
            <td colspan="3" style="widtd: 85%; text-align: right;">TOTAL Q. </td>
            <td style="widtd: 15%; text-align: right;"> <?php echo number_format($total_factura,2);?></td>
        </tr>
    </table>
	
	
	
	<br>
	<div style="font-size:11pt;text-align:center;font-weight:bold">Gracias por su compra!</div>
	
	
	  

</page>

<?php


$updateventa=mysqli_query($con,"UPDATE venta SET  subtotal_venta='$subtotal', 
	descuento_venta='0', totpagar_venta='$total_factura' WHERE idventa='$numero_factura'");
//============



$delete=mysqli_query($con,"DELETE FROM tmp WHERE session_id='".$session_id."'");
?>