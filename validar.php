<?php
	include 'coneccion.php';

if (isset($_POSTT['txtusuario']) && isset($_POSTT['txtcontraseña'])) {
	$usuario=$_POSTT['txtusuario'];
	$password=$_POSTT['txtcontraseña'];

	$sql="SELECT
Usuarios.Clave_Usuario,
Usuarios.Nombre_Usuario,
Usuarios.`Password_Usuario`,
Usuarios.Tipo_Usuario
FROM
Usuarios
	WHERE Nombre_Usuario='$usuario'
	AND `Password_Usuario`='$password'";

	$resultado=mysqli_query($mysqli,$sql);
		
	if($datos === mysqli_fetch_assoc($resultado)){
		session_start();
		$_SESSION["clave"] = $datos["Clave_Usuario"];	
		$_SESSION["nombre"] = $datos["Nombre_Usuario"];
		$_SESSION["contrasenia"] = $datos["Password_Usuario"];
		$_SESSION["TipoUser"] = $datos["Tipo_Usuario"];
			
		}
		
		if($datos['TipoUser'] === "Administrador"){
			header("location:HomeAdmin.php");
			//Si Existe
		}else{
			header("location:index.php");
		}
	}else{
		echo "datos no recibidos";
	}
?>



