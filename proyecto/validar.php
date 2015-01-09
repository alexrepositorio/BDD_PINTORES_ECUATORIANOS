<?php
	require("conect.php");

	$username=$_POST['nombres'];
	$pass=$_POST['contrasenia'];
	$id=$_POST['id'];

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


	$sql2=mysql_query("SELECT * FROM cuenta WHERE USUARIO='$username'");
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['pasadmin']){
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		
			echo "<script>location.href='admin.php'</script>";
		}
	}

	$sql=mysql_query("SELECT * FROM cuenta WHERE USUARIO='$username'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['CONTRASENIA']){
			session_start();	
			$_SESSION["cuenta"]=$f['COD_CUENTA'];
			echo '<script>alert("BIENVENIDO")</script> ';		
		}else{
			echo '<script>alert("USUARIO O CONTRASEÑA INCORRECTA ")</script> ';
		
			echo "<script>location.href='javascript:history.back(1)'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
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