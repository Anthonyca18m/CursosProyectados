<?php 
	require_once("devuelve_registros.php");

	$registros = new Devuelve_registros();

	$resultados = $registros->getRegistros();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<table>
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php  
				foreach ($resultados as $rs){ 
			?>
			
			<tr>
				<td><center> <?php echo $rs['cod_art']; ?>  </center></td>
				<td><center> <?php echo $rs['seccion']; ?>  </center></td>
				<td><center> <?php echo $rs['nom_art']; ?>  </center></td>
				<td><center> <?php echo $rs['precio_art']; ?>  </center></td>
				<td><center> <?php echo $rs['fecha_art']; ?>  </center></td>
				<td><center> <?php echo $rs['importado_art']; ?>  </center></td>
				<td><center> <?php echo $rs['pais_art']; ?>  </center></td>
			</tr>


			<?php } ?>
		</tbody>
	</table>

</body>
</html>