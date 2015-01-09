<body>
<?php 
// Llamamos al archivo de conexión a la base de datos
require("conexion.php");
	
//Creamos las variables con los nombres de los campos del formulario
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$website = $_POST["website"];
$comentario = $_POST["comentario"];
$var = $_POST["var"];

// Codigo de insercion a la base de datos
$insertar = mysqli_query($conexion,"INSERT INTO comentario (COMENTARIO, USUARIO, EMAIL, WEBSITE, COD_PINTOR ) VALUES ('$comentario','$usuario','$email','$website','$var')");

if (!$insertar) {
	echo "Error al guardar";
} else {
	echo '<script>alert("Gracias por comentar, Recarga la pagina para que puedas ver tu comentario")</script>';
	echo "<script>location.href='javascript:history.back(1)'</script>";
}
mysqli_close($conexion);
?>
