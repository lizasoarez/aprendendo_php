<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$planilha= new Spreadsheet();

$aba=$planilha->getActiveSheet();
$aba->setCellValue('A1','Nome');
$aba->setCellValue('B1','Idade');

$aba->setCellValue('A2','João da Silva');
$aba->setCellValue('B2',50);

$aba->setCellValue('A3','Luana Duarte');
$aba->setCellValue('B3',45);

$aba->setCellValue('A4','Eduardo Souza');
$aba->setCellValue('B4',25);

$writer = new Xlsx($planilha);
$arquivo='tabela.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$arquivo\"");

$writer->save('php://output');
?>