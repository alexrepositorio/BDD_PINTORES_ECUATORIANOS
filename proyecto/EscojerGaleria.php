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
		<h2>Porfavor Elija Una Pintor Para Ver Su Galeria</h2><br>
		<?php
			include("conect.php");
			echo "<form name='usuarios' action='galeria-opcion.php' method='post'>";					
			echo "<label for='selector'>Pintor:</label><input list='Tablas' name='selector'>";
			echo "<datalist  id='Tablas'>";		
							$sql="select NOMBRE,COD_PINTOR from pintor ORDER BY `NOMBRE`";
							$res_sql=mysql_query($sql,$link);
							while ($row = mysql_fetch_assoc($res_sql)) {
	    						echo "<option>".utf8_encode ($row['NOMBRE'] )."</option>";    						
							}										
			echo "</datalist>";
			echo  "<br> <br>";	
			echo "<input id='aceptar' name='Actualizar' value='Generar' type='submit'>";
			echo "</form>";
		?>	
	</section>											
	<footer>
		<span>Desarrollado Por Alex Plascencia y Javier Fierro</span>
	</footer>
</body>
</html>