<?php
require __DIR__ . '/librerias/PHPSpreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new Spreadsheet();
$spreadsheet->getProperties()
    ->setCreator('Anonimo')
    ->setTitle('Reporte en Excel');

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();

$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
$spreadsheet->getDefaultStyle()->getFont()->setSize(12);

$hojaActiva->getColumnDimension('A')->setWidth(28);
$hojaActiva->getColumnDimension('B')->setWidth(20);
$hojaActiva->getColumnDimension('C')->setWidth(20);
$hojaActiva->getColumnDimension('D')->setWidth(10);

$hojaActiva->setCellValue('A1', 'Codigos de programacion');
$hojaActiva->setCellValue('A2', 'Hernan Apaza');
$hojaActiva->setCellValue('B2', 'cdp');
$hojaActiva->setCellValue('C2', 'PHP');
$hojaActiva->setCellValue('D2', 'A1');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte en excel.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
