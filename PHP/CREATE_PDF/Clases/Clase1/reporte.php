<?php
    require_once("../../fpdf.php");

    // $pdf = new FPDF('L', 'mm', 'Legal', );
    $pdf = new FPDF('L', 'mm', array(50,100));
    /* 
        P = Horizontal, L= vertical
        mm = milimetros, cm = centimetros, 
        tamaño: Legal,letter ....etc
        EN UN ARRAY (ALTO, ANCHO)
    */

    $pdf->AddPage("l", "A4", 0); //agrega página y hace horientación de documento
    /*
        P- PORTRAIT L - Landscape(horizontal o vertical)
        TAMAÑO DE PDF
        ROTACION A GRADOS 0 90 180 270 360
    */


    $pdf->SetFont("Arial", "U", "18");//family font  style size
    /*
        B: BOLD, I: ITALIC, U: UNDERLINE
    
    */
    $pdf->Cell(150, 15, "JHol0a", "T", 0, "C", 0);
    
        /*
            2 ABAJO, 1 IZQUIERDA , 0 DERECHA 
            R RIGHT C CENTER L LEFT
        */

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(120,15,"Este es mi texto",1,"R", "#");
    // width, height, text, border, lines, align, link

    $pdf->Output();// imprimir
    /*
        destino: I enviar al reporte al navegador, 
        destino: D enviar al reporte al navegador y forza a descargar + el nombre del reporte 'xxxx.pdf', 
        destino: F guarda en local + el nombre del reporte 'xxxx.pdf', 
        destino: S envia una cadena de caracteres URL
    */