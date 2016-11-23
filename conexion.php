<?php

	$conexion= mysqli_connect("localhost","root","","emulti");
//	$conexion2= mysqli_connect("localhost","root","","emulti");
	// $conexion3= mysqli_connect("localhost","root","","emulti");
	if (!$conexion){
		die('Error de Conexión: ' . mysqli_connect_errno());
	}
	// if (!$conexion2){
	// 	die('Error de Conexión: ' . mysqli_connect_errno());
	// }
?>
