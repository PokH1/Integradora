<?php
require "fpdf.php";
class PDF extends FPDF{
  function Header()
{
    // Logo     el 83 define el tama�o el 10 es un tab, el 8 es lineas
    $this->Image('potrillo.png',10,8,30);
    $this->Image('potrillo.png',170,8,30);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'VETERINARIA EL POTRILLO',0,1,'C');
$pdf->Cell(0,5,'HISTORIAL MEDICO ',0,1,'C');


//CADENA DE CONEXION
$con = mysqli_connect("localhost","root","","veterinaria");
//salto de linea por cada registro encontrado en la tabla Ln();
  $pdf->Ln();

  
  
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

 
$consulta = "SELECT id_historial,diagnostico,nombre_mascota,tratamiento,nombre_vacuna,fecha_vacuna FROM historial_medico";
  
$result = mysqli_query($con,$consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(7,5, "Id",1,0,'C');
    $pdf->Cell(40,5,utf8_decode ("Diagnostico"),1,0,'C');
    $pdf->Cell(30,5,utf8_decode("Nombre de la mascota"),1,0,'C');
    $pdf->Cell(45,5, "Tratamiento",1,0,'C');
    $pdf->Cell(35,5, "Nombre de la vacuna",1,0,'C');
    $pdf->Cell(25,5, "Fecha de la vacuna",1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    $pdf->Cell(7,5, $row[0],1,0,'C');
    $pdf->Cell(40,5, $row[1],1,0,'C');
    $pdf->Cell(30,5, $row[2],1,0,'C');
    $pdf->Cell(45,5, $row[3],1,0,'C');
    $pdf->Cell(35,5, $row[4],1,0,'C');
    $pdf->Cell(25,5, $row[5],1,0,'C');
 
    $exec=mysqli_query($con,$consulta); 


  
  }  

  mysqli_close($con);
  session_start();
  if(@$_SESSION['validada']== 1){
    $pdf->Output();
  }else {
    header('location: ../login.html');
  }
?>