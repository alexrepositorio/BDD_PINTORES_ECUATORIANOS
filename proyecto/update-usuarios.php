<?php
	include("conect.php");
	extract($_POST);
	$sql_insertar="update cuenta set USUARIO='$nombres',CONTRASENIA='$contra',CORREO='$correo' where COD_CUENTA='$id'";
	
	$res_sql=mysql_query($sql_insertar,$link);
	if(!$res_sql){
		echo '<script>alert("Error de upadte..")</script>';
		echo "<script>location.href='admin.php'</script>";
	}else{
		echo '<script>alert("Se actualizo correctamente..")</script>';
		echo "<script>location.href='admin.php'</script>";
	}
?>