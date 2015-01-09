<?php
$conexion = mysqli_connect("localhost","root","","pintores");

if (!$conexion) {
	die("Error de conexión (".mysqli_connect_errno().")".mysqli_connect_error());
} 
?>