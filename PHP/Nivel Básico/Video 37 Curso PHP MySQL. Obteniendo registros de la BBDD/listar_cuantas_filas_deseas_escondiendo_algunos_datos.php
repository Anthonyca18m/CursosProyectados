<?php 

	include("../conexion.php");

	$consulta = "SELECT * FROM user";

	$registros = mysqli_query($Conexion, $consulta);

	while ($fila = mysqli_fetch_row($registros)) {
		// SI DESEAS CIERTOS DATOS ENTONCES LO HACES COMO UN ARREGLO
			echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " .$fila[3] ."<br>";
		
	}

	mysqli_close($Conexion);//cerrar conexión para optimizar recursos
?>