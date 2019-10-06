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
<?php  
	include("Model/Paginacion.php");
?>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
				        <a href="Drop.php?id=<?php echo $rs["id_producto"]; ?>">
				          <input type='button' name='del' id='del' value='Borrar'>
				        </a>
				       <a href="editar.php?id=<?php echo $rs["id_producto"]; ?>">
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
	    		<tr>
				    <td colspan="4">
				        <?php 

					        for ($i=1; $i <= $total_paginas ; $i++) { 
					      
					            echo  " <a href='index.php?pag=". $i ."'>" . $i ."</a> ";
					        }   
				        ?>
				    </td>
	    		</tr>
			</tbody>
		</table>
	</form>

</body>
</html>