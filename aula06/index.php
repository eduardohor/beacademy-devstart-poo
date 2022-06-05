<?php

include 'vendor/autoload.php';

use Dompdf\Dompdf;

$html = '';

for ($i = 0; $i < 10; $i++) {
    $html .= 'ó o pente! <br>';
}



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Olá mundo! Estou aprendendo PDF</h1>' . $html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();