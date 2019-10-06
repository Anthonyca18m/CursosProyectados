<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		table{
			text-align: center;
			border: 1px solid #000;
			margin: auto;
		}
		th{
			border: 1px solid #000;
		}
		td{
			border: 1px solid #000;
		}
	</style>

</head>
<!-- AQUI VENIMOS DE PRODUCTO CONTROLLER Y USAMOS LO QUE HEMOS HECHO EN CONTROLLER -->
<body>
	
	<table>
		<thead>
			<tr>
				<th>Nombre del Producto</th>
				<th>Cantidad </th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				foreach ($matrizProductos as $rs) { 
			?>
			<tr>
				<td> <?php echo $rs["nombre_producto"] ?> </td>
				<td> <?php echo $rs["cantidad_producto"] ?> </td>
				<td> <?php echo $rs["precio_producto"] ?> </td>
				<td style="width: 150px;">
			        <a href="Drop.php?id=<?php echo $usuario->id ?>">
			          <input type='button' name='del' id='del' value='Borrar'>
			        </a>
			       <a href="editar.php?id=<?php echo $usuario->id ?>">
			          <input type='button' name='up' id='up' value='Actualizar'>
			        </a>
      			</td>
			</tr>

			<?php 
				} 
			?>
			<tr>
			    <td><input type='text' name='Nom' size='10'></td>
			    <td><input type='text' name='Ape' size='10'></td>
			    <td><input type='text' name=' Dir' size='10'></td>
			    <td><input type='submit' name='btn_insert' id='btn_insert' value='Insertar'></td>
    		</tr>
		</tbody>
	</table>
	

</body>
</html>