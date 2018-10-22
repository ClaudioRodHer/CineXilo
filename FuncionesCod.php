<?php
//conexion a la BD
//conexion a la BD
include './coneccion.php';
//variables;
$nombpelicula=$_POST['peliculas'];
$fechaFunc=$_POST['fechaFunc'];
$HoraFunc=$_POST['horaFunc'];
$tipoFunc=$_POST['tipoFuncion'];
$Salas=$_POST['Salas'];

 
//hacer consultas para ver que onda con las claves
$sql = "call proceHorariosFunciones('$nombpelicula','$fechaFunc','$HoraFunc','$tipoFunc','$Salas')";
		//checar conect
if (mysqli_query($miconexion,$sql)) {
    //echo "Usuario Registrado correctamente";
    //mueve el archivo a la ruta de im/fotoperfil
    header('Refresh: 10; URL=HomeAdmin.php');

  echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
} else {
    echo "Problemas al Registrar la funcion <br> causa: $sql";
    
}
mysqli_close($conect);
?>
