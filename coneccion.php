<?php

$mysqli = new mysqli('localhost', 'root', '','CineXilotzin');

if ($mysqli->connect_error){
	die('Error en la coneccion' . $mysqli->connect_error);
	}
	printf("La coneccion se realizo con exito: %s\n", $mysqli->server_info);

