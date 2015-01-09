<?php
	include("conect.php");
	extract($_POST);
	
	$pass= $_POST['contrasenia'];
	$rpass=$_POST['contraseniar'];
	$mail=$_POST['correo'];
	$nombre=$_POST['nombres'];


	$sql_insertar="select * from obra where COD_OBRA='$id'";	
	$res_sql=mysql_query($sql_insertar,$link);
	while ($row = mysql_fetch_array($res_sql)) {
		$obra=$row['COD_OBRA'];
		$nombre=$row['TITULO'];
		$locacion=$row['LOCACION'];
		$anio=$row['ANIO_PUBLICACION'];
		$pintor=$row['COD_PINTOR'];
		$movi=$row['MOVIMIENTO'];
		$ima=$row['SRC'];
		$voto=$row['VOTO'];
	}

	$checkemail=mysql_query("SELECT * FROM cuenta WHERE CORREO='$mail'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo '<script>alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos")</script>';
				echo "<script>location.href='javascript:history.back(1)'</script>";
			}else{
				$checknombre=mysql_query("SELECT * FROM cuenta WHERE USUARIO='$nombre'");
				$check_nombre=mysql_num_rows($checknombre);
				if($check_nombre>0){
					echo '<script>alert("Atencion, ya existe ese nombre de  usuario, porfavor escoja otro nombre")</script>';
					echo "<script>location.href='javascript:history.back(1)'</script>";
				}else{
					$sql_insertar="insert into cuenta values('','$nombres','$contrasenia','','$correo')";	
					$res_sql=mysql_query($sql_insertar,$link);	
					if(!$res_sql){
						echo '<script>alert("Error de insersion..")</script>';
						echo "<script>location.href='javascript:history.back(1)'</script>";
					}else{
						echo '<script>alert("Se inserto correctamente. Bienvenido")</script>';
					}
				}
			}		
		}else{
			echo '<script>alert("Las contrasenias no coinciden")</script>';
			echo "<script>location.href='javascript:history.back(1)'</script>";
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
		<h2>Estas actualizando los datos de la obra: "<?php echo $nombre;?>"</h2>
		<form name="usuarios" action="update-obras.php" method="post">
			<input type="hidden" name="id" value="<?php echo $obra ?>" ><br>
			<label for='nombres'>Titulo:</label><input type="text" name="nombres" placeholder="Titulo Obra"  value="<?php echo $nombre;?>"><br><br>
			<label for='lugar'>Locacion:</label><input type="text" name="lugar" placeholder="Lugar donde se encuentra" value="<?php echo $locacion;?>"><br><br>
			<input type="hidden" name="idp" value="<?php echo $pintor ?>" >
			<label for='movi'>Movimiento:</label><input type="text" name="movi" placeholder="Movimiento" value="<?php echo $movi;?>"><br><br>
			<label for='imag'>Imagen:</label><input type="text" name="imag" placeholder="URL Imagen" value="<?php echo $ima;?>"><br><br>
			<label for='fecha'>Año Publicacion:</label><input type="date" name="fecha" value="<?php echo $anio;?>"><br><br>
			<input type="hidden" name="idv" value="<?php echo $voto ?>" >		
			<input id='aceptar' name='Actualizar' value='Actualizar' type='submit'>
		</form>
	</section>											
	<footer>
		<span>Desarrollado Por Alex Plascencia y Javier Fierro</span>
	</footer>
</body>
</html>