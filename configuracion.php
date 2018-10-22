 <?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "";
$bd_base = "CineXilotzin";
$con = mysqli_connect($bd_host, $bd_usuario, $bd_password);
mysqli_select_db($bd_base, $con);
?> 
