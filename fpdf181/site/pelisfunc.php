<?php
require('../fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('xilo2.jpg',7,5,25);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(40,20,'Cine Xilotzin',1,0,'C');
	// Line break
	$this->Ln(20);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
	//$pdf->Cell(0,10,'Printing line number '.$i,0,1);
	//conexion a la BD
	
$conexion=mysqli_connect("localhost","root","","CineXilotzin");
    $query=$conexion->query("SELECT * FROM Peliculas");
    
	//cho'<option Value="0"> Selecciona una pelicula</option> ';
	while($row=$query->fetch_assoc()){
		  $pdf->Cell(0,10,$row['idPeliculas'].'  '.$row['Nombre_Pelicula'],0,1);
	  // echo'<option value="'.$row['idPeliculas'].'">'.$row['Nombre_Pelicula'].'</option>'."\n";
	}
	

$pdf->Output();
?>

<!--
$rs=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($rs);
$totalRows=mysql_num_rows($rs);
	echo'<option Value="0"> Cantidad de peliculas</option> ';
	echo'<option value="'.$row['idPeliculas'].'">'.$row['Nombre_Pelicula'].'</option>'."\n";
	do{
		$pdf->Cell(0,10,$row.$i,0,1);
	}while($row=mysql_fetch_assoc($rs));
	mysql_free_result($rs);
	
	
	$conexion=mysqli_connect("localhost","root","","CineXilotzin");
    $query=$conexion->query("SELECT * FROM Peliculas");
	echo'<option Value="0"> Selecciona una pelicula</option> ';
	while($row=$query->fetch_assoc()){
	   echo'<option value="'.$row['idPeliculas'].'">'.$row['Nombre_Pelicula'].'</option>'."\n";
	   $pdf->Cell(0,10,$row.$i,0,1);
	}
-->
