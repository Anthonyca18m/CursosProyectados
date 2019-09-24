<?php  
	
	try {
		
		$conPDO = new PDO("mysql:host=localhost; dbname=cursophpone", "root", "");

		$conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM user WHERE user = :usuario AND pass = :clave";

		$resultado = $conPDO->prepare($sql);


					//esta funcion convierte a html lo que venga
					//			ignorar caracteres extraños
		$usuario = htmlentities(addslashes($_POST['user']));

		$clave = htmlentities(addslashes($_POST['pass']));


		$resultado->bindValue(":usuario", $usuario);//setear los marcadores de las variables

		$resultado->bindValue(":clave", $clave);//setear los marcadores de las variables

		$resultado->execute();


		$registros = $resultado->rowCount();//cuenta si hay 1 existe sino 0 

		if($registros != 0){

			echo "Has ingresado al sistema";

		}else{
			echo "Credenciales no disponibles";
			header("refresh:2; url=login.php");
		}

	} catch (Exception $e) {
		die("Error: " . $e->getMessage());
	}


?>