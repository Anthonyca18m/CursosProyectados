<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

	$miconexion = new mysqli("localhost", "root", "", "bbddblog");

	/*COMPROBAR CONEXION*/

	if (!$miconexion) {
		echo "Ha fallado la conexion" . mysqli_error();
	
		exit();
	}


	$sql = "SELECT * FROM contenido ORDER BY fecha DESC";

	$resultado = mysqli_query($miconexion, $sql);


	if($resultado){

		while ($rs = mysqli_fetch_array($resultado)) {
			
			echo "<h1>Titulo: " . $rs['titulo'] . "</h1><br><br>";
			echo "<h3>Fecha: " . $rs['fecha'] . "</h3><br><br>";
			echo "<h4>Comentario: " . $rs['Comentario'] . "</h4><br><br>";
			

			if ($rs['Imagenes'] != "") {
				
				echo "<img src='Imagenes/". $rs['Imagenes'] . "' height='400px' width='400px' /> ";
			}

			echo "<hr />";

		}
	}

	 ?>

</body>
</html>