<?php
require __DIR__ . '/FPDF/fpdf.php';

$pdf = new FPDF('P', 'mm', 'Letter');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Mi reporte en PDF', 0, 1, 'C');
$pdf->Ln(6);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 8, 'Ejemplo de reporte simple generado con FPDF.', 0, 1, 'L');
$pdf->Cell(0, 8, 'Coloca la libreria FPDF en la carpeta FPDF/.', 0, 1, 'L');

$pdf->Output();
