<?php
$dbhost = "localhost"; // Servidor
$dbuser = "root"; // Nombre de usuario
$dbpass = ""; // Contraseña
$dbname = "pintores"; // Nombre de la base de datos

# Creamos conexion a la base de datos
$link = mysql_connect($dbhost,$dbuser,$dbpass);
		mysql_select_db($dbname,$link);

# Saber si el voto es negativo o positivo
$voto = htmlentities($_GET['voto']);


# Tomamos el id de nuestro post y vemos todas las ip que pusieron megusta
$id =  $_GET['id'];



# Me gusta o No me gusta
switch($voto)
{
case "positivo";
	
			mysql_query("UPDATE obra SET VOTO=VOTO+1 WHERE COD_OBRA='".$id."'",$link);
			echo '<script>alert("Gracias por votar, Recarga la pagina para que podamos añadir tu voto")</script>';
			echo "<script>location.href='javascript:history.back(1)'</script>";

break;	
case "negativo";

	
			mysql_query("UPDATE obra SET VOTO=VOTO-1  WHERE COD_OBRA='".$id."'",$link);
			echo '<script>alert("Gracias por votar, Recarga la pagina para que podamos añadir tu voto")</script>';
			echo "<script>location.href='javascript:history.back(1)'</script>";
	
break;
}
echo "<script>location.href='javascript:history.back(1)'</script>";
?>