<?php

$objExcel->setActiveSheetIndex(0)->setCellValue('A1', 'ID')->setCellValue('B1', 'CODE')->setCellValue('C1', 'NAME')->setCellValue('D1', 'DESCRIPTION')->setCellValue('E1', 'WEIGHT')->setCellValue('F1', 'STATUS')->setCellValue('G1', 'RATING')->setCellValue('H1', 'CREATED')->setCellValue('I1', 'MODIFIED');
$a = 2;
foreach($materials as $m)
{
	$objExcel->setActiveSheetIndex(0)->setCellValue('A' . $a, $m['Material']['id'])->setCellValue('B' . $a, $m['Item']['code'])->setCellValue('C' . $a, $m['Item']['name'])->setCellValue('D' . $a, $m['Item']['description'])->setCellValue('E' . $a, $m['Item']['weight'])->setCellValue('F' . $a, $m['MaterialStatus']['status'])->setCellValue('G' . $a, $m['RecommendedRating']['rating'])->setCellValue('H' . $a, $m['Material']['created'])->setCellValue('I' . $a, $m['Material']['modified']);
	$a++;
}
$objExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);

$objExcel->getActiveSheet()->setTitle('Materials');

$objExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename=Materials.xls');
header('Cache-Control: max-age=0');

$objExcelWriter->save('php://output');
exit();
