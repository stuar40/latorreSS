<?php
$conexion=mysql_connect("localhost","antenas","Antenas@123");
		mysql_select_db("antenas",$conexion);

if(strlen($_GET['fechaini'])>0 and strlen($_GET['fechafin'])>0){
	$fechaini = $_GET['fechaini'];
	$fechafin = $_GET['fechafin'];

	$verDesde = date('d/m/Y', strtotime($fechaini));
	$verHasta = date('d/m/Y', strtotime($fechafin));
}else{
	$fechaini = '1111-01-01';
	$fechafin = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('fpdf/fpdf.php');
//require('conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('img/logo.png' , 10 ,10, 50 , 10,'PNG');
$pdf->Cell(40, 10, '', 0);
$pdf->Cell(110, 10, 'Antenas & Servicios', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha-Generado: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(50, 8, '', 0);
$pdf->Cell(100, 8, 'REPORTE DE MOVIMIENTOS', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(1, 8, '', 0);
$pdf->Cell(100, 8, 'Desde:  '.$verDesde.'  hasta: '.$verHasta, 0);
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(7, 8, 'No.', 0);
$pdf->Cell(27, 8, 'Cod.Movimiento', 0);
$pdf->Cell(20, 8, 'Tipo', 0);
$pdf->Cell(20, 8, 'Fecha', 0);
$pdf->Cell(20, 8, 'Cantidad', 0);
$pdf->Cell(20, 8, 'Precio', 0);
$pdf->Cell(17, 8, 'Motivo', 0);
$pdf->Cell(24, 8, 'Cod.Empleado', 0);
$pdf->Cell(20, 8, 'Cod.Venta', 0);
$pdf->Cell(20, 8, 'Cod.Producto', 0);

//$pdf->Cell(25, 8, 'Fech. Registro', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$sql = mysql_query("SELECT  idmovimientos,tipo_mov,fecha_mov,cantidad_mov,precio_mov,motivo_mov,empleados_id,venta_idventa,producto_id from movimientos where movimientos.fecha_mov between '$fechaini' and '$fechafin' ");
$item = 0;
//$totaluni = 0;
$totalventa = 0;
while($sql2 = mysql_fetch_array($sql)){
	$item = $item+1;
//	$totaluni = $totaluni + $productos2['precio_unit'];
	$totalventa = $totalventa + $sql2['precio_mov'];
	$pdf->Cell(15, 8,'# '. $item, 0);
	$pdf->Cell(18, 8,$sql2['idmovimientos'], 0);
	$pdf->Cell(20, 8, $sql2['tipo_mov'], 0);
//	$pdf->Cell(25, 8, 'Q/. '.$sql2['fecha_venta'], 0);
	$pdf->Cell(25, 8, date('d/m/Y', strtotime($sql2['fecha_mov'])), 0);
	$pdf->Cell(15, 8, $sql2['cantidad_mov'], 0);
	$pdf->Cell(25, 8, 'Q. '.$sql2['precio_mov'], 0);
	$pdf->Cell(25, 8, $sql2['motivo_mov'], 0);
	$pdf->Cell(20, 8, $sql2['empleados_id'], 0);
	$pdf->Cell(20, 8, $sql2['venta_idventa'], 0);
	$pdf->Cell(20, 8, $sql2['producto_id'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(77,8,'',0);
//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
$pdf->Cell(0,10,'Total Mov: Q. '.$totalventa.'.00',0);
$pdf->Output('ReporteMovimiento.pdf','I');
?>