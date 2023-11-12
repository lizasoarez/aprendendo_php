<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$planilha= new Spreadsheet();

$aba=$planilha->getActiveSheet();
$aba->setCellValue('A1','id');
$aba->setCellValue('A2',$id);

$aba->setCellValue('B1','Nome');
$aba->setCellValue('B2',$nome);

$aba->setCellValue('C1','Cidade');
$aba->setCellValue('C2',$cidade);

$aba->setCellValue('D1','Pais');
$aba->setCellValue('D2',$pais);

$aba->setCellValue('E1','Telefone');
$aba->setCellValue('E2',$telefone);
$writer = new Xlsx($planilha);
$arquivo='tabela.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$arquivo\"");

$writer->save('php://output');
?>