<?php 
		$seccion = $_POST['seccion'];
		$n_art = $_POST['n_art'];
		$precio = $_POST['precio'];
		$fecha = $_POST['fecha'];
		$importado = $_POST['importado'];
		$p_orig = password_hash($_POST['p_orig'], PASSWORD_DEFAULT);

		try {

		$conexion = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$conexion->exec("SET CHARACTER SET utf8");
																	// m_ lo pongo para que me de memoria de marcador
		// $sql = "SELECT * FROM producto_clase43 WHERE nom_art = :m_nom_art  AND importado_art = :m_import_art";
		

	    $sql = "INSERT INTO producto_clase43 (seccion, nom_art, precio_art, fecha_art, importado_art, pais_art) VALUES 
	    (:seccion, :nom_art, :precio_art, :fecha_art, :importado_art, :pais_art)";
		

		$resultado = $conexion->prepare($sql);
									// aca es igualas a las variables que traes de otros php con marcadores
		$resultado->execute(array(":seccion"=>$seccion, ":nom_art"=>$n_art,
								  ":precio_art"=>$precio, ":fecha_art"=>$fecha,
								  ":importado_art"=>$importado, ":pais_art"=>$p_orig));

		echo "AGREGADO SATISFACTORIAMENTE";

		header("refresh:2; url=Formulario_Insertar_pdo.php");
		// while ($rs = $resultado->fetch(PDO::FETCH_ASSOC)) {
		// 	echo "Nombre Artículo " . $rs['nom_art'] ;
		// }

		$resultado->closeCursor();

	} catch (Exception $e) {
		
		die('Error: ' . $e->GetMessage());
	}finally{

		$conexion = NULL;
	}

?>