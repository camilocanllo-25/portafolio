<?php
require __DIR__ . '/../../../vendor/autoload.php';
use Dompdf\Dompdf;

// Cargar el HTML del CV
$html = file_get_contents(__DIR__ . '/CV-Camilo-Llorente.html');

// Inicializar Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Descargar el PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="CV-Camilo-Llorente.pdf"');
echo $dompdf->output();
