<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require_once("../conexion.php");

	$nom_a_buscar  = $_GET['nombre'];
 

	$listar = mysqli_query($Conexion, "SELECT * from cliente WHERE dni LIKE '". $nom_a_buscar. "%'");

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