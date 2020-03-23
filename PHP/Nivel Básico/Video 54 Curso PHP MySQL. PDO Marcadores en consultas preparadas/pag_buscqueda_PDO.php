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
		$importado = $_POST['importado'];

		try {

		$conexion = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$conexion->exec("SET CHARACTER SET utf8");
																	// m_ lo pongo para que me de memoria de marcador
		$sql = "SELECT * FROM producto_clase43 WHERE nom_art = :m_nom_art  AND importado_art = :m_import_art";

		$resultado = $conexion->prepare($sql);
									// aca es igualas a las variables que traes de otros php con marcadores
		$resultado->execute(array(":m_nom_art"=>$buscador, ":m_import_art"=>$importado));

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