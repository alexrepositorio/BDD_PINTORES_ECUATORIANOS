<?php 
  // Se conecta al SGBD 
  if(!($conexion = mysql_connect("localhost", "root", ""))) 
    die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
  if(!mysql_select_db("pintores", $conexion)) 
    die("Error: No existe la base de datos");
	
  // Sentencia SQL: muestra todo el contenido de la tabla
  $sentencia = "SELECT * FROM comentario where cod_pintor=".$_GET['id']; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $conexion); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

 echo "<div id='comentarios'>";
  while($fila = mysql_fetch_assoc($resultado)) 
  { 
  	echo "<div class='user'>";
    echo "<a href='" . $fila['WEBSITE'] . "' target='_blank'>" . $fila['USUARIO'] . "</a><br/> <div class='tiempo'>" . $fila['FECHA'] . "</div>";
  	echo "</div>";
  	echo "<div class='comment'>";
    echo $fila['COMENTARIO'] . '<br/>';
  	echo "</div>";
  } 
 echo "</div><br/>";
  // Libera la memoria del resultado
  mysql_free_result($resultado);
  
  // Cierra la conexión con la base de datos 
  mysql_close($conexion); 
