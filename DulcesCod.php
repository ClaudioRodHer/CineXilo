<?php
//conexion a la BD
include './coneccion.php';
//variables;
$nombProd=$_POST['txtproducto'];
$TipoProd=$_POST['tipoProducto'];
$PrecioProd=$_POST['txtproductoprecio'];
$reseniaProd=$_POST['txaDescripcion'];

	//Ruta donde se almacenar� la foto
	$ruta = "img/productos";
         chmod($ruta, 0777);
	//extraemos la imagen o foto en archivo
	$archivo = $_FILES["fotoDulce"]["tmp_name"];
	//extraer el nombre del archivo
	$nombreArchivo = $_FILES["fotoDulce"]["name"];

	$rutaArch = $ruta . "/" . $nombreArchivo;
 
//hacer consultas para ver que onda con las claves
$sql = "call proceDulceria('$nombProd','$TipoProd','$PrecioProd','$reseniaProd','$rutaArch');";
move_uploaded_file($_FILES['fotoDulce']['tmp_name'],$rutaArch);
		//checar conect
if (mysqli_query($miconexion, $sql)) {
    echo "Producto Registrado correctamente<br> causa: $sql";
    //header('Refresh: 10; URL=HomeAdmin.php');

  //echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
    //mueve el archivo a la ruta de im/fotoperfil
    move_uploaded_file($archivo,$rutaArch);
} else {
    echo "Problemas al Registrar Producto <br> causa: $sql";
    
}
mysqli_close($conect);

?>
