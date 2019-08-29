<style type="text/css">
	table{
		width: 400px;
		height: 400px;
		border: 2px solid #000;
	}
</style>

<?php 
	include("../conexion.php");

	$consulta = "SELECT * FROM persona WHERE edad >=30";

	$registros = mysqli_query($Conexion, $consulta);

	while ($resultado = mysqli_fetch_array($registros)) {
		$nombre = $resultado['nombre'];
		$apellido = $resultado['apellido'];
		$carrera = $resultado['carrera'];
		$edad = $resultado['edad'];
	
		echo "
			<table>
			  <thead>
			  	<tr>
			  	    <th>Nombre</th> 
			  	    <th>Apellido</th> 
			  	    <th>Carrera</th> 
			  	    <th>Edad</th>
			  	</tr>
			  </thead>

			  <tbody>
			  	<tr>
			  		<td><center>$nombre</center></td>
			  		<td><center>$apellido</center></td>
			  		<td><center>$carrera</center></td>
			  		<td><center>$edad</center></td>
			  	</tr>
			  </tbody>
			</table>

			";
	}
	mysqli_close($Conexion);
?>

<!-- 

	PARA MYSQL 
		PARA CREAR UNA TABLA EXISTA O NO LA INSTRUCIÓN ES

			CREATE TABLE IF NOT EXISTS nombre_tabla(
				....
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
-->