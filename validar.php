<?php

include 'coneccion.php';

if (isset($_POST['txtusuario']) && isset($_POST['txtcontrasenia'])) {
    $usuario = $_POST['txtusuario'];
    $pass = $_POST['txtcontrasenia'];

    $sql = "SELECT
Usuarios.Clave_Usuario,
Usuarios.Nombre_Usuario,
Usuarios.`Password_Usuario`,
Usuarios.Tipo_Usuario,
Usuarios.Email_Usuario
FROM
Usuarios
	where Nombre_Usuario='$usuario'
	AND `Password_Usuario`='$pass'";

    $resultado = mysqli_query($miconexion, $sql);

    if ($datos = mysqli_fetch_assoc($resultado)) {
        session_start();
        $_SESSION["Clave_Usuario"] = $datos["Clave_Usuario"];
        $_SESSION["nombre"] = $datos["Nombre_Usuario"];
        $_SESSION["contrasenia"] = $datos["Password_Usuario"];
        $_SESSION["Tipo_Usuario"] = $datos["Tipo_Usuario"];
        $_SESSION["email"] = $datos["Email_Usuario"];
    }

    if ($datos["Clave_Usuario"]== 1) {
        header("location:HomeAdmin.php");
        //Si Existe
    } else {
        header("location:index.php");
    }
} else {
    echo "datos no recibidos";
}
    
