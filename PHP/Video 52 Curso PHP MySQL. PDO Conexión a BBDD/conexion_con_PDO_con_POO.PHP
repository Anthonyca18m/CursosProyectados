<?php  

	try {

		$conexion = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$conexion->exec("SET CHARACTER SET utf8");

		// echo "Conexión Satisfactoria";

	} catch (Exception $e) {
		
		die('Error: ' . $e->GetMessage());
	}finally{

		$conexion = NULL;
	}


?>