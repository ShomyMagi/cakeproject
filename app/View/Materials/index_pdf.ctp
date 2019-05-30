<?php

$pdf->SetTopMargin(30);
 
$pdf->setFooterMargin(25);
$pdf->SetAutoPageBreak(true, 25);  

$textfont = 'freesans';
$pdf->SetFont($textfont,'B', 20);

// add a page (required with recent versions of tcpdf) 
$pdf->AddPage(); 
$pdf->SetXY(0, 40);
 
$pdf->Cell(0,0, "Kartica Materijala", 0,0,'C');

$pdf->SetY(60);
$pdf->SetFont($textfont,'R', 8);

$pdf->Cell(10,10, "ID", 1,0,'C');
$pdf->Cell(15,10, "CODE", 1,0,'C');
$pdf->Cell(50,10, "NAME", 1,0,'C');
$pdf->Cell(50,10, "DESCRIPTION", 1,0,'C');
$pdf->Cell(15,10, "WEIGHT", 1,0,'C');
$pdf->Cell(40,10, "MATERIAL STATUS", 1,0,'C');
$pdf->Cell(40,10, "RECOMMENDED RATING", 1,0,'C');
$pdf->Cell(25,10, "CREATED", 1,0,'C');
$pdf->Cell(25,10, "MODIFIED", 1,1,'C');

foreach ($materials as $m) {
	$pdf->Cell(10,10, $m['Material']['id'], 1,0,'L');
	$pdf->Cell(15,10, $m['Item']['code'], 1,0,'L');
	$pdf->Cell(50,10, strlen($m['Item']['name']) > 30 ? (substr($m['Item']['name'], 0, -20)) : $m['Item']['name'], 1,0,'L');
	$pdf->Cell(50,10, strlen($m['Item']['description']) > 30 ? (substr($m['Item']['description'], 0, -20)) : $m['Item']['description'], 1,0,'L');
	$pdf->Cell(15,10, $m['Item']['weight'], 1,0,'L');
	$pdf->Cell(40,10, $m['MaterialStatus']['status'], 1,0,'L');
	$pdf->Cell(40,10, $m['RecommendedRating']['rating'], 1,0,'L');
	$pdf->Cell(25,10, $m['Material']['created'], 1,0,'L');
	$pdf->Cell(25,10, $m['Material']['modified'], 1,1,'L');
}
 
//Generate pdf file      
$filename .= '.pdf';
$pdf->Output('Materials.pdf', 'D');
exit();
