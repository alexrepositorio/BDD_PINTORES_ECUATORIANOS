<?php
	include("conect.php");
	extract($_GET);
	$sql_insertar="select * from cuenta where COD_CUENTA='$id'";	
	$res_sql=mysql_query($sql_insertar,$link);
	while ($row = mysql_fetch_array($res_sql)) {
		$id_user=$row['COD_CUENTA'];
		$nombre_user=$row['USUARIO'];
		$contra=$row['CONTRASENIA'];
		$admin=$row['pasadmin'];		
		$correo_user=$row['CORREO'];
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
	<title>Pintores Ecuatorianos</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"> 
	<link rel="stylesheet" type="text/css" href="css/estilos.css">	
	<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon"  href="imagenes/inicio.jpg" type="image/x-icon">
	<script src="js/modernizr.custom.17901.js"></script>			
</head>
<body>
	<header>
		<figure>
			<img src="imagenes/logotipo.jpg">
		</figure>
			<h1> Pintores Ecuatorianos  </h1>  				
		<nav>
			<ul>
				<li><a href="index.php">Pintores</a></li>
				<li><a href="EscojerGaleria.php">Galerias</a></li>			
			</ul>
		</nav>
	</header>
	<section id="principal2">
		<h2>Estas actualizando la cuenta del usuario: "<?php echo $nombre_user;?>"</h2>
		<form name="usuarios" action="update-usuarios.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id_user ?>" ><br>
			<label for='nombres'>Cuenta:</label><input type="text" name="nombres" placeholder="Nombre Cuenta"  value="<?php echo $nombre_user;?>"><br><br>
			<label for='contra'>Password:</label><input type="text" name="contra" placeholder="Contrasenia" value="<?php echo $contra;?>"><br><br>
			<input type="hidden" name="id_admin" value="<?php echo $admin ?>">
			<label for='correo'>Email:</label><input type="email" name="correo" placeholder="Correo" value="<?php echo $correo_user;?>"><br>
			<input id='aceptar' name='Actualizar' value='Actualizar' type='submit'>
		</form>
	</section>											
	<footer>
		<span>Desarrollado Por Alex Plascencia y Javier Fierro</span>
	</footer>
</body>
</html>