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
		<h1>Pintores Ecuatorianos</h1>
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
						$sql="select * from OBRA where cod_pintor=$_GET[id] ORDER BY `VOTO` desc" ;
						$res_sql=mysql_query($sql,$link);
							while ($row = mysql_fetch_assoc($res_sql)) {
								$obra=$row['COD_OBRA'];
	    						echo "<article class='cursos php'>";	
	    						echo "<figure>";
	    						echo "<a href='$row[SRC]' target='_blank'><img src=$row[SRC]></a>";
	    						echo "</figure>"; 
	    						echo "<span class='tipo'>";
	    						echo utf8_encode ($row['TITULO'] )."</span>";
	    						echo "<h2>Descripción</h2>";
	    						echo "<p>Año de publicacion: ".$row['ANIO_PUBLICACION']."</br></br>";
								echo "Movimiento: ".utf8_encode ($row['MOVIMIENTO'])."</br></br>";
								echo "Locacion: ".utf8_encode ($row['LOCACION'])."</br></br>";
								echo "<span id='votacion'>Votos:".$row['VOTO']."</span> </br></p>";
								echo "<div>";
									echo "<span id='aqui'><strong>Tecnicas Utilizadas</strong></span>";
									echo "<ul>";
										echo "<li>Tecnica 1</li>";
										echo "<li>Tecnica 2</li>";
										echo "<li>Tecnica 3</li>";
										echo "<li>Tecnica 4</li>";								
									echo "</ul>";
								echo "</div>";
								echo "<a class='boton' href='megusta.php?voto=positivo&id=".$row['COD_OBRA']."'>+1</a>";
								echo "<a class='boton' href='megusta.php?voto=negativo&id=".$row['COD_OBRA']."'>-1</a>";
								echo "<a class='boton2' href='registro.php?id=".$row['COD_OBRA']."'>Editar Obra</a>";
	    						echo "</article>";  
							}
					
				?>	
	</section>
	<section id="principal2">
		<h2>Comentatios</h2>
					<?php	
						include("form.php");		
					?>	
	</section>		
	<footer>
		<span>Desarrollado Por Alex Plascencia y Javier Fierro</span>
	</footer>
</body>
</html>