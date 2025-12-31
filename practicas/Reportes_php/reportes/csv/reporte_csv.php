<?php
require __DIR__ . '/librerias/PHPSpreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new Spreadsheet();
$spreadsheet->getProperties()
    ->setCreator('Jefer Apaza')
    ->setTitle('Reporte en CSV');

$hojaActiva = $spreadsheet->getActiveSheet();
$hojaActiva->setCellValue('A1', 'Codigos de Programacion');
$hojaActiva->setCellValue('A2', 'Hernan Apaza');
$hojaActiva->setCellValue('B2', 'cdp');
$hojaActiva->setCellValue('C2', 'PHP');
$hojaActiva->setCellValue('D2', 'A1');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte en CSV.csv"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Csv');
$writer->save('php://output');
