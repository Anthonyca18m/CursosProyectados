<?php 
		// $seccion = $_POST['seccion'];
		$n_art = $_POST['n_art'];
		// $precio = $_POST['precio'];
		// $fecha = $_POST['fecha'];
		// $importado = $_POST['importado'];
		// $p_orig = $_POST['p_orig'];

		try {

		$conexion = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$conexion->exec("SET CHARACTER SET utf8");

	    $sql = "DELETE FROM producto_clase43 WHERE nom_art = :nom_art";
		

		$resultado = $conexion->prepare($sql);
									// aca es igualas a las variables que traes de otros php con marcadores
		$resultado->execute(array(":nom_art"=>$n_art));

		echo "ELIMINADO SATISFACTORIAMENTE";
			
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