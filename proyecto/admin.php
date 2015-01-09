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
		<h2>Estas Son Las Cuentas Existentes</h2>
					<?php	
						include("conect.php");
							$sql_listar="select * from cuenta";
							$res_sql=mysql_query($sql_listar,$link);
							echo "<table cellspacing=1 cellspadding=1 align=center border=2 >";
							echo "<tr id='poner'>";
								echo "<td >Codigo Cuenta</td>";
								echo "<td>Contrasenia</td>";
								echo "<td>Correo</td>";
								echo "<td>Nombre Usuario</td>";
							echo "</tr>";
							while ($row = mysql_fetch_array($res_sql)) {
								echo "<tr>";
									echo "<td>".$row['COD_CUENTA']."</td>";
									echo "<td>".$row['CONTRASENIA']."</td>";
									echo "<td>".$row['CORREO']."</td>";	
									echo "<td>".$row['USUARIO']."</td>";
									echo " <td id='ponbo'><a href='borrar_usuarios.php?id=".$row['COD_CUENTA']."'>Borrar</a></td>";
									echo " <td id='ponact'><a href='actualizar_usuarios.php?id=".$row['COD_CUENTA']."'>Actualizar</a></td>";			
								echo "</tr>";
							}
							echo "</table";
	
					?>	
	</section>											
	<footer>
		<span>Desarrollado Por Alex Plascencia y Javier Fierro</span>
	</footer>
</body>
</html>