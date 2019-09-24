<?php  

	$user = $_POST['user'];

	$pass = $_POST['pass'];

	$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);//cifrando con cifras automatica

	try {
		$con = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// $con->exec("SET CHARACTER SET utf8");

		$sql = "INSERT INTO user (id, user, pass) VALUES (NULL, :usu, :pass)";

		$resultado = $con->prepare($sql);

		$resultado->execute(array(":usu"=> $user, ":pass"=> $pass_cifrado));


		if($resultado === true){
			echo "registrado!";

		}else{
			echo "fracaso";
		}

	} catch (Exception $e) {
		die("Error: " . $e->getMessage());
		
	}


?>