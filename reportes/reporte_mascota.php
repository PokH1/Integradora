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
$pdf->Cell(0,5,'VETERINARIA EL PROTRILLO ',0,1,'C');
$pdf->Cell(0,5,utf8_decode ('LISTADO DE MASCOTAS Y DUEÑOS'),0,1,'C');


//CADENA DE CONEXION
$con = mysqli_connect("localhost","root","","veterinaria");
//salto de linea por cada registro encontrado en la tabla Ln();
  $pdf->Ln();

  

  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

 
$consulta = "SELECT id_mascota,nombre_mascota,fecha_nacimiento,tipo_animal,raza,peso,size,genero,nombre_persona,telefono_persona,correo_persona FROM mascotas";
  
$result = mysqli_query($con,$consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(7,5, "Id",1,0,'C');
    $pdf->Cell(20,5, "Nombre Animal",1,0,'C');
    $pdf->Cell(20,5,utf8_decode ("Nacimiento"),1,0,'C');
    $pdf->Cell(20,5, "Tipo animal",1,0,'C');
    $pdf->Cell(20,5,utf8_decode("Raza"),1,0,'C');
    $pdf->Cell(15,5,utf8_decode("Genero"),1,0,'C');
    $pdf->Cell(23,5,utf8_decode("Dueño"),1,0,'C');
    $pdf->Cell(16,5,utf8_decode("Telefono"),1,0,'C');
    $pdf->Cell(40,5,utf8_decode("correo"),1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    $pdf->Cell(7,5, $row[0],1,0,'C');
    $pdf->Cell(20,5, $row[1],1,0,'C');
    $pdf->Cell(20,5, $row[2],1,0,'C');
    $pdf->Cell(20,5, $row[3],1,0,'C');
    $pdf->Cell(20,5, $row[4],1,0,'C');
    
    $pdf->Cell(15,5, $row[7],1,0,'C');
    $pdf->Cell(23,5, $row[8],1,0,'C');
    $pdf->Cell(16,5, $row[9],1,0,'C');
    $pdf->Cell(40,5, $row[10],1,0,'C');
  
 
 
    $exec=mysqli_query($con,$consulta); 


  
  }  

  mysqli_close($con);
  session_start();
  if(@$_SESSION['validada']==1){
    $pdf->Output();
  }else {
    header('location: ../login.html');
  }
?>