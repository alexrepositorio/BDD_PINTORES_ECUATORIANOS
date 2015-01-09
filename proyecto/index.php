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
	<section>
					<?php	
						include("conect.php");
						$sql="select * from pintor ORDER BY `NOMBRE`";
						$res_sql=mysql_query($sql,$link);
						while ($row = mysql_fetch_assoc($res_sql)) {
								$artista=$row['COD_PINTOR'];
	    						echo "<article class='cursos css'>";	
	    						echo "<figure>";
	    						echo "<a href='galeria.php?id=".$artista."'><img src=$row[IMG]></a>";
	    						echo "</figure>";  
	    						echo "<span class='tipo'>";
	    						echo "<a href='galeria.php?id=".$artista."'>".utf8_encode ($row['NOMBRE'] )."</span><a>";
								echo "<h2>Descripción</h2>";
								echo "<p >Lugar de origen: ".$row['LUGAR_ORIGEN']."</br></br>";
								echo "Fecha de nacimiento: ".$row['FECHA_NAC']."</br></br>";
								echo "Fecha de defuncion: ".$row['FECHA_DEF']."</br></p>";								
								echo "<div><span><strong>Premios</strong></span>";
								$sqli="select PREMIO,FECHA_ENTREGA from PREMIO WHERE cod_pintor=".$artista;
								$res_sqli=mysql_query($sqli,$link);
								while ($rowi = mysql_fetch_assoc($res_sqli)) {	    						    						
	    							echo "<p id='va'>".utf8_encode ($rowi["PREMIO"]),$rowi["FECHA_ENTREGA"]."</p>";	    						
								}	
								echo "</div></article>";	
						}
	
					?>	
	</section>											
	<footer>
		<span>Desarrollado Por Alex Plascencia y Javier Fierro</span>
	</footer>
</body>
</html>