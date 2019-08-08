<?php
require('fpdf.php');

$pdf = new FPDF(); //ici je crée un document pdf, dans les parenthèses on peut préciser le format global du pdf
$pdf->Open();      //ici on va créer un fichier pdf
$pdf->AddPage();   //on lui ajoute une page ou plusieurs grace à cette fonction
$pdf->SetFont('Arial', 'B', 16);  //le font du texte
$pdf->Cell(40, 10, 'Hello World !');  //pour ajouter du texte
$pdf->Output();   //sortie, ce qui sera affiché par le navigateur
