<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		td{
			border: 1px solid #000;
		}
	</style>

</head>
<body>
	
	<table>
		<thead>
			<tr>
				<th>Nombre del Producto</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				foreach ($matrizProductos as $rs) { 
			?>
			<tr>
				<td><center> <?php echo $rs["nombre_producto"] ?> </center></td>
			</tr>

			<?php 
				} 
			?>
		</tbody>
	</table>
	

</body>
</html>