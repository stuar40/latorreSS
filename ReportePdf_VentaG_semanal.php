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
$pdf->Cell(100, 8, 'REPORTE GENERAL DE VENTA SEMANAL', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(1, 8, '', 0);
$pdf->Cell(100, 8, 'Desde:  '.$verDesde.'  hasta: '.$verHasta, 0);
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'No.Venta', 0);
$pdf->Cell(40, 8, 'No.Factura', 0);
$pdf->Cell(35, 8, 'Serie', 0);
$pdf->Cell(27, 8, 'Fecha', 0);
$pdf->Cell(25, 8, 'Total Venta', 0);
$pdf->Cell(25, 8, 'Cod.Vendedor', 0);
//$pdf->Cell(25, 8, 'Fech. Registro', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$sql = mysql_query("SELECT numero_venta,serie_venta,fecha_venta, totpagar_venta,empleados_id from venta WHERE fecha_venta BETWEEN '$fechaini' AND '$fechafin' ");
$item = 0;
//$totaluni = 0;
$totalventa = 0;
while($sql2 = mysql_fetch_array($sql)){
	$item = $item+1;
//	$totaluni = $totaluni + $productos2['precio_unit'];
	$totalventa = $totalventa + $sql2['totpagar_venta'];
	$pdf->Cell(20, 8,'# '. $item, 0);
	$pdf->Cell(37, 8,$sql2['numero_venta'], 0);
	$pdf->Cell(30, 8, $sql2['serie_venta'], 0);
//	$pdf->Cell(25, 8, 'Q/. '.$sql2['fecha_venta'], 0);
	$pdf->Cell(30, 8, date('d/m/Y', strtotime($sql2['fecha_venta'])), 0);
	$pdf->Cell(33, 8, 'Q. '.$sql2['totpagar_venta'], 0);
	$pdf->Cell(30, 8, $sql2['empleados_id'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(87,8,'',0);
//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
$pdf->Cell(0,10,'Total Venta Semanal: Q. '.$totalventa.'.00',0);
$pdf->Output('ReporteVentaG_semanal.pdf','I');
?>