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
$pdf->Cell(0,5,'Veterinaria "El Potrillo"',0,1,'C');
$pdf->Cell(0,5,'Lista de Empleados',0,1,'C');


//CADENA DE CONEXION
$con = mysqli_connect("localhost","root","","veterinaria");
//salto de linea por cada registro encontrado en la tabla Ln();
  $pdf->Ln();

  

  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

 
$consulta = "SELECT id_empleado,nombre,direccion,fecha_nacimiento,lugar_nacimiento,puesto,sueldo,telefono,correo from empleados";
  
$result = mysqli_query($con,$consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(5,5, "Id",1,0,'C');
    $pdf->Cell(30,5, "Nombre",1,0,'C');
    $pdf->Cell(44,5,utf8_decode ("Direccion"),1,0,'C');
    $pdf->Cell(25,5, "Fecha nacimiento",1,0,'C');
    
    $pdf->Cell(15,5, "Sueldo" ,1,0,'C');
    $pdf->Cell(20,5, "Telefono" ,1,0,'C');
    $pdf->Cell(40,5,utf8_decode ("Correo") ,1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    $pdf->Cell(5,5, $row[0],1,0,'C');
    $pdf->Cell(30,5, $row[1],1,0,'C');
    $pdf->Cell(44,5, $row[2],1,0,'C');
    $pdf->Cell(25,5, $row[3],1,0,'C');
   
    $pdf->Cell(15,5, $row[6],1,0,'C');
    $pdf->Cell(20,5, $row[7],1,0,'C');
    $pdf->Cell(40,5, $row[8],1,0,'C');
    
 
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