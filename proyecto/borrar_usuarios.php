<?php
	include("conect.php");
	extract($_GET);
	$sql_insertar="delete from cuenta where COD_CUENTA='$id'";
	
	$res_sql=mysql_query($sql_insertar,$link);
	if(!$res_sql){
		echo '<script>alert("Error al borrar..")</script>';
		echo "<script>location.href='admin.php'</script>";
	}else{
		echo '<script>alert("Se borro correctamente..")</script>';
		echo "<script>location.href='admin.php'</script>";
	}
?>