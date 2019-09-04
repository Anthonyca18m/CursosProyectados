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
		<input type="submit" name="list" id="list" value="Listar">
	</form>

	<br>
		<form action='insertar_cliente.php' method='POST'>
			Nombre:<input type='text' name='nom_cli' id='nom_cli'>
			DNI:<input type='text' name='dni_cli' id='dni_cli'>
			<input type='submit' name='agregar' id='agregar' value='Agregar'>
		</form>
	<br>
</center>
</body>
</html>

<?php 

	require_once("../conexion.php");

	$mipag = $_SERVER['PHP_SELF'];//ESTO SIRVE PARA ENVIAR DATOS A LA MISMA PÁGINA
	
	if(isset($_GET['search']) or isset($_GET['list']) ){
		
		$nom_a_buscar  = $_GET['nombre'];

		$listar = mysqli_query($Conexion, "SELECT * from cliente WHERE dni LIKE '". $nom_a_buscar. "%' OR nombre_cliente LIKE '". $nom_a_buscar. "%'");

		if($rs = mysqli_fetch_row($listar) != 0){

			echo "<center>
					<table border= '1px solid'> 
						<thead>
							<tr>
								<th>ID</th> <th>Nombre</th> <th>Dni</th>
							</tr>
						</thead>
						<tbody>";
							while ($rs = mysqli_fetch_array($listar)) { 
								echo "<tr>";
								echo "<td><center>". $rs['id_cliente']. "</center></td>"; 
								echo "<td><center>". $rs['nombre_cliente']. "</center></td>"; 
								echo "<td><center>". $rs['dni']. "</center></td>"; 
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