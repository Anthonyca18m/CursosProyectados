<?php
require_once("../fpdf.php");


class PDF extends FPDF
{
    function Header()
    {
        $this->AddLink();
        $this->Image("../images/image.jpg", 10, 10, 55, 0, '', 'https://#');
        $this->SetFont("Arial", "B", 18);
        $this->Cell(80);
        $this->Cell(30, 15, "TITULO PDF", 0, 1, "C");
        $this->Setfont("Arial", "B", 14);
        $this->Cell(80);
        $this->Cell(30, 10, "Impartiendo conocimiento", 0, 1, "C");
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-18);
        $this->Setfont("Arial", "I", 12);
        $this->AddLink();
        $this->Cell(5, 10, "www.facebook.com", 0, 0, "L");
        $this->setfont("Arial", "I", 10);
        $this->Cell(0, 10, utf8_decode("Página") . $this->PageNo() . "de {nb}", 0, 0, "C");
    }
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();

$pdf->Setfont("Arial", "B", 16);
$pdf->Cell(200,12,"Lista de productos",0,1,"C");
$pdf->Ln(10);

// encabezado de la tabla ss
$pdf->SetFillColor(199,199,199);
$pdf->setfont("Times", "B", 14);
$pdf->Cell(40,12,"CODIGO",1,0,"C",1);
$pdf->Cell(100,12,"PRODUCTO",1,0,"C",1);
$pdf->Cell(30,12,"PRECIO",1,1,"C",1);

for ($i=0; $i < 50; $i++) { 
    $pdf->Cell(40,12,"CODIGO","BR",0,"C");
    $pdf->Cell(100,12,"PRODUCTO","B",0,"C");
    $pdf->Cell(30,12,"PRECIO","BL",1,"C");
}

$pdf->Output();
