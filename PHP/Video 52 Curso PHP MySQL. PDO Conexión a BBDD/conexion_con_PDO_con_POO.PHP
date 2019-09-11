<?php  

	try {

		$conexion = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		echo "Conexión Satisfactoria";

	} catch (Exception $e) {
		
		die('Error: ' . $e->GetMessage());
	}finally{

		$conexion = NULL;
	}


?>