<?php
//conexion a la BD
include './coneccion.php';

$NuevCont=$_POST['NuevaCont'];

 
//hacer consultas para ver que onda con las claves
$sql = "call proceUser('$NuevCont');";
		//checar conect
if (mysqli_query($miconexion, $sql)) {
  echo "informacion Actualizada correctamente<br> causa: $sql";
    //header('Refresh: 10; URL=HomeAdmin.php');

  //echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
    //mueve el archivo a la ruta de im/fotoperfil
    move_uploaded_file($archivo,$rutaArch);
} else {
    echo "Problemas al Registrar Pelicula <br> causa: $sql";
    
}
mysqli_close($conect);
?>
