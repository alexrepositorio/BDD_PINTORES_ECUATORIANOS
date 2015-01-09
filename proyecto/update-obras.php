<?php
	include("conect.php");
	extract($_POST);
	$sql_insertar="update obra set TITULO='$nombres',LOCACION='$lugar',ANIO_PUBLICACION='$fecha',MOVIMIENTO='$movi',SRC='$imag' where COD_OBRA='$id'";
	
	$res_sql=mysql_query($sql_insertar,$link);
	if(!$res_sql){
		echo '<script>alert("Error de upadate..")</script>';
		echo "<script>location.href='javascript:history.back(1)'</script>";
	}else{
		session_start();
		session_unset();
		session_destroy();
		echo '<script>alert("Se actualizo correctamente, regresa pronto.")</script>';
		echo "<script>location.href='index.php'</script>";	
	}
?>