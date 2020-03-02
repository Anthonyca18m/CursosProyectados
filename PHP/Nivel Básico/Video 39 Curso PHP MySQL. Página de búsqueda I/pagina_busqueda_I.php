<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require_once("../conexion.php");



	$listar = mysqli_query($Conexion, "SELECT * from cliente ");

		echo "
				<table> 
					<thead>
						<tr>
							<th>ID</th> <th>Nombre</th> <th>Dni</th>
						</tr>
					</thead>
					<tbody>";
						while ($rs = mysqli_fetch_array($listar)) { 
							echo "<tr>";
							echo "<td>". $rs['id_cliente']. "</td>"; 
							echo "<td>". $rs['nombre_cliente']. "</td>"; 
							echo "<td>". $rs['dni']. "</td>"; 
							echo "</tr>";
						}
		echo "
					</tbody>
				</table>";
?>
</body>
</html>

<!-- 

	CONSULTAS COMODINES

		SELECT * FROM CLIENTE LIKE 'ANT_ON_';


		LO QUE HACE ESTA SENTENCIA ES QUE TE LISTA CUALQUIER PARECIDO CON EL NOMBRE ANTHONY O ANTONY

		Y EL _ ES PO SI ESTA ESCRITO CON UNA LETRA O CON OTRO EJEMPLO	EXPLOSION(SI NO ESTAS SEGURO O LO HAN ESCRITO MAL EN LA DB CON ESPLOCION O EXPLOCION PUEDES PONER ASI EN LA CONSULTA 'E_PLOCION') Y ESO TE AHORRA TODO LA CHAMBA
-->