<?php
//conexion a la BD
include './coneccion.php';
//variables;
$Historia=$_POST['txaHistoria'];
$LinkFB=$_POST['linkFaceBook'];
$LinkInst=$_POST['linkInsttagram'];
$UbicacionCine=$_POST['txtUbicacion'];
$TelCine=$_POST['Telefonocine'];
$EmailCine=$_POST['correoCine'];

	//Ruta donde se almacenar� la foto
	$ruta = "img/imgCine";
	//extraemos la imagen o foto en archivo
	$archivo = $_FILES["foto"]["tmp_name"];
	//extraer el nombre del archivo
	$nombreArchivo = $_FILES["foto"]["name"];

	$rutaArch = $ruta . "/" . $nombreArchivo;
 
//hacer consultas para ver que onda con las claves
$sql = "call proceInfCine('$Historia','$LinkFB','$LinkInst','$UbicacionCine','$TelCine','$EmailCine','$rutaArch');";
		//checar conect
if (mysqli_query($miconexion, $sql)) {
  echo "informacion guardada correctamente<br> causa: $sql";
    //header('Refresh: 10; URL=HomeAdmin.php');

  //echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
    //mueve el archivo a la ruta de im/fotoperfil
    move_uploaded_file($archivo,$rutaArch);
} else {
    echo "Problemas al Registrar Pelicula <br> causa: $sql";
    
}
mysqli_close($conect);
?>

