<?php
$usuario=$_POSTT['usuario'];
$contrasenia=$_POSTT['contraseña'];

//hacer la coneccion a la BD
$coneccion= mysqli_connect("localhost", "root", "", "CineXilotzin", "3306");
$consulta="SELECT * FROM Usuarios WHERE Nombre_Usuario='$usuario' and Password_Usuario='$contrasenia'";
$resultado= mysqli_query($coneccion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas >0){
    header("location:HomeAdmin.html");
}else{
     header("location:index.php");
}

mysqli_free_result($resultado);
mysqli_close($coneccion);

