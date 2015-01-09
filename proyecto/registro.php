<?php
	include("conect.php");
	extract($_GET);
	$sql_insertar="select * from obra where COD_OBRA='$id'";	
	$res_sql=mysql_query($sql_insertar,$link);
	while ($row = mysql_fetch_array($res_sql)) {
		$obra=$row['COD_OBRA'];
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
		<title>Pintores Ecuatorianos</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'> 
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="shortcut icon"  href="imagenes/inicio.jpg" type="image/x-icon">
		<script src="js/modernizr.custom.17901.js"></script>
</head>
<body background="imagenes/FondoAzul-ETdelaBrujaMar-1006.jpg" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: red; ">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">
			<tr><td><label style="font-size: 14pt; color: #FFFFFF" ><b>Usuario:</b></label></td>
				<input type="hidden" name="id" value="<?php echo $obra ?>" ><br>
				<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="nombres" required></td></tr>
		<tr><td><label style="font-size: 14pt; color: #FFFFFF"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="contrasenia" required></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
		</tr></tr>
	</table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="guardar-usuarios.php" >
  <fieldset>
    <legend  style="font-size: 18pt; color: red;" ><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Usuario</b></label>
      <input type="hidden" name="id" value="<?php echo $obra ?>" ><br>
      <input type="text" name="nombres" class="form-control" placeholder="Ingresa tu nombre" required />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="email" name="correo" class="form-control"  placeholder="ejemplo@gmail.com" required />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="contrasenia" class="form-control"  placeholder="Ingresa contraseña" required  />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Repite tu contraseña</b></label>
      <input type="password" name="contraseniar" class="form-control" placeholder="Repite contraseña" required />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
  </fieldset>
</form>
</div>

<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>
	
</body>
</html>