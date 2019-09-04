<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<p>Buscar por carácteres principales o primeros</p>
	<form action="<?php $mipag ?>" method="GET">
		<input type="text" name="nombre" id="">
		<input type="submit" name="search" id="search" value="Buscar">
	</form>
</center>
</body>
</html>

<?php 

	require_once("../conexion.php");

	$mipag = $_SERVER['PHP_SELF'];//ESTO SIRVE PARA ENVIAR DATOS A LA MISMA PÁGINA
	
	if(isset($_GET['search'])){
		$nom_a_buscar  = $_GET['nombre'];

		$listar = mysqli_query($Conexion, "SELECT * from cliente WHERE dni LIKE '". $nom_a_buscar. "%' OR nombre_cliente LIKE '". $nom_a_buscar. "%'");

		if($rs = mysqli_fetch_row($listar) >0){

			echo "<center>
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
					</table>
				</center>";
		}else{
			echo "<center><p>";
			echo "===========================================================<br>";
			echo " No hay registro con esas caracteristicas<br>";
			echo "===========================================================";
			echo "</p></center>";
		}
	}
?>