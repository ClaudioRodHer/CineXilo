<?php

/*// Datos de la base de datos
$usuario = "root";
$contrasenia = "";
$servidor = "localhost";
$basededatos = "CineXilotzin";
$puerto = "3306";


$userdb = $_POSTT[txtusuario];
$passdb = $_POSTT[pfpassword];


if (empty($userdb) || empty($passdb)) {
    header("Location: index.php");
    exit();
}

//creacion de la conexion de la DB
//$conexion = mysqli_connect($servidor, $usuario, $contrasenia) or die("No se ha podido conectar al servidor de Base de datos");
// Selección del a base de datos a utilizar
$db = mysqli_select_db($conexion, $basededatos) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
*/
// establecer y realizar consulta. guardamos en variable.

$usuario = $_POSTT['txtusuario'];
$pass = $_POSTT['pfpassword'];

if(empty($usuario) || empty($pass)){
header("Location: index.php");
exit();
}
mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('login') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from Usuarios where Nombre_Usuario='" . $usuario . "'");

//$consualtaAdmin = mysqli_query("SELECT *  FROM Usuarios WHERE Tipo_Usuario='Administrador'");

if ($row == mysql_fetch_array($result)) {
     if ($row['Password'] == $passdb) {
        session_start();
        $_SESSION['usuario'] = $userdb;
        header("Location: contenido.php");
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}