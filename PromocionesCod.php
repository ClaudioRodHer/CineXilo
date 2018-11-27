<?php
//conexion a la BD
include './coneccion.php';
//variables;
$nombPromocion=$_POST['txtpromocion'];
$fechaeInicioProm=$_POST['FechaInicioProm'];
$fechaFinProm=$_POST['FechaFinProm'];
$DescripProm=$_POST['txaDescripcion'];
$TipoProm=$_POST['tipoPromocion'];

	//Ruta donde se almacenar� la foto
	$ruta = "img/promociones";
	//extraemos la imagen o foto en archivo
	$archivo = $_FILES["fotoProm"]["tmp_name"];
	//extraer el nombre del archivo
	$nombreArchivo = $_FILES["fotoProm"]["name"];

	$rutaArch = $ruta . "/" . $nombreArchivo;
 
//hacer consultas para ver que onda con las claves
$sql = "call procePromociones('$nombPromocion','$fechaeInicioProm','$fechaFinProm','$DescripProm','$TipoProm','$rutaArch');";
		//checar conect
move_uploaded_file($_FILES['fotoProm']['tmp_name'],$rutaArch);
if (mysqli_query($miconexion, $sql)) {
  echo "Promocion Registrada correctamente<br> causa: $sql";
    //header('Refresh: 10; URL=HomeAdmin.php');

  //echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
    //mueve el archivo a la ruta de im/fotoperfil
    move_uploaded_file($archivo,$rutaArch);
} else {
    echo "Problemas al Registrar Pelicula <br> causa: $sql";
    
}
mysqli_close($conect);
?>
