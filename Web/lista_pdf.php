<?php
require '/pdf/fpdf.php';
class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tabla simple
function BasicTable($header, $data)
{
    // Cabecera
    /*foreach($header as $col)
        $this->Cell(37,7,$col,1);
    $this->Ln();*/
    // Datos
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(38,6,$col,1);
        $this->Ln();
    }
}
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('Id', 'Nombre', 'Raza', 'Edad','Tamano');
// Carga de datos
$data = $pdf->LoadData('listado.csv');
$pdf->SetFont('Arial','',16);
$pdf->AddPage(/*'L' para que la hoja salga horizontal*/);
$pdf->Cell(100,20,"Listado de perros:",0);
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->BasicTable($header,$data);
//$pdf->Image("img/auto.jpg",50,70);
$pdf->Output();
?>