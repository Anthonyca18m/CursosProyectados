<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	require_once("../Video 52 Curso PHP MySQL. PDO Conexión a BBDD/conexion_con_PDO_con_POO.PHP");
?>
<body>
	<?php 

		$buscador = $_POST['palabra'];

		try {

		$conexion = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$conexion->exec("SET CHARACTER SET utf8");

		$sql = "SELECT * FROM producto_clase43 WHERE nom_art = ? ";

		$resultado = $conexion->prepare($sql);

		$resultado->execute(array($buscador));

		while ($rs = $resultado->fetch(PDO::FETCH_ASSOC)) {
			echo "Nombre Artículo " . $rs['nom_art'] ;
		}

		$resultado->closeCursor();

	} catch (Exception $e) {
		
		die('Error: ' . $e->GetMessage());
	}finally{

		$conexion = NULL;
	}

	?>
</body>
</html>