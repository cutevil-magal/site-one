<?php
$ball = $_POST[ans];
require( 'fpdf/fpdf.php' );

$pdf = new FPDF();
$pdf->SetFont('Arial','',50);
$pdf->AddPage();
$pdf->Cell(16,100,"CONGRATULATIONS!");
$pdf->SetFont('Arial','',20);
$pdf->Cell(10,130,"You have passed the test" + $ball, 10);

$pdf->Output();
?>