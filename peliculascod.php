<?php
//conexion a la BD
include './coneccion.php';
//variables;
$nombpelicula=$_POST['txtbnompelicula'];
$fechaestreno=$_POST['dtestreno'];
$duracion=$_POST['txtDuracion'];
$resenia=$_POST['txaDescripcion'];
$idioma=$_POST['idioma'];
$subtitulo=$_POST['subtitulos'];
$genero=$_POST['genero'];
$clasificacion=$_POST['clasificacion'];

	//Ruta donde se almacenar� la foto
	$ruta = "img/peliculas";
        chmod($ruta, 0777);
	//extraemos la imagen o foto en archivo
	$archivo = $_FILES['foto']['tmp_name'];
	//extraer el nombre del archivo
	$nombreArchivo = $_FILES['foto']['name'];

	$rutaArch = $ruta . "/" . $nombreArchivo;
        
//hacer consultas para ver que onda con las claves
$sql = "call proceIncertarPeliculas('$nombpelicula','$resenia','$duracion','$fechaestreno','$rutaArch','$idioma','$subtitulo','$genero','$clasificacion');";
move_uploaded_file($_FILES['foto']['tmp_name'],$rutaArch);
//checar conect
if (mysqli_query($miconexion, $sql)) {
    echo "Usuario Registrado correctamente<br> causa: $sql";
    header('Refresh: 10; URL=HomeAdmin.php');

  //echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
    //mueve el archivo a la ruta de im/fotoperfil
        //move_uploaded_file($archivo,$rutaArch);
        
} else {
    echo "Problemas al Registrar Pelicula <br> causa: $sql";
    
}
mysqli_close($conect);

?>
