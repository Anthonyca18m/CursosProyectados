<?php  

	$user = $_POST['usuario'];

	$pass = $_POST['clave'];

	$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);//cifrando con cifras automatica

	if (!empty($user) && !empty($pass)) {

		try {
		$con = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// $con->exec("SET CHARACTER SET utf8");

		$sql = "INSERT INTO user (user, pass) VALUES ( :usu, :pass)";

		$resultado = $con->prepare($sql);

		$resultado->execute(array(":usu"=> $user, ":pass"=> $pass_cifrado));


		if($resultado == true){
			echo "registrado!";

		}else{
			echo "fracaso";
		}

		} catch (Exception $e) {
			die("Error: " . $e->getMessage());
			
		}
	}else{
		echo "CASILLAS INCOMPLETAS";
	}


?>