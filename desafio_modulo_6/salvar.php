<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require'log.php';
require'modelb.php';
use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$conn = conexao();
$res = select();
$planilha = new Spreadsheet();
$aba = $planilha->getActiveSheet();
$aba->setCellValue('A1','id');
$aba->setCellValue('B1','Nome');
$aba->setCellValue('C1','Cidade');
$aba->setCellValue('D1','Pais');
$aba->setCellValue('E1','Telefone');
$row =2;
foreach ($res as $dados) {
$id = $dados['id'];
$nome = $dados['nome'];
$cidade = $dados['cidade'];
$pais = $dados['pais'];
$telefone = $dados['telefone'];
$aba->setCellValue('A'.$row,$id);
$aba->setCellValue('B'.$row,$nome);
$aba->setCellValue('C'.$row,$cidade);
$aba->setCellValue('D'.$row,$pais);
$aba->setCellValue('E'.$row,$telefone);
$row++;
}
$writer = new Xlsx($planilha);
$arquivo ='tabela.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$arquivo\"");
$writer->save('php://output');
$conn=null;
?>