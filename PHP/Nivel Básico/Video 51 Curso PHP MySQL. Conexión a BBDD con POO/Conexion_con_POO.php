<?php 
	
	$conexion = new mysqli("localhost", "root", "", "cursophpone");

	if($conexion->connect_errno){
		echo "Falló la conexión" . $conexion->connect_errno;
	}

	$conexion->set_charset("utf8");

	$sql = "SELECT * FROM cliente";

	$registros = $conexion->query($sql);

	if($conexion->errno){
		die($conexion->error);
	}
?>

	<table>
		<thead>
			<tr>
				<th><center>ID</center></th>
				<th><center>Nombre</center></th>
				<th><center>DNI</center></th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			//aqui tambien puedes hacer con el fetch_array
			while ($rs = $registros->fetch_assoc()) {
				$id_cliente = $rs['id_cliente'];
				$nombre_cliente = $rs['nombre_cliente'];
				$dni = $rs['dni'];
			?>
			<tr>
				<td><center><?php echo $id_cliente; ?></center></td>
				<td><center><?php echo $nombre_cliente; ?></center></td>
				<td><center><?php echo $dni; ?></center></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

<?php	
	$conexion->close();
?>