<?php  

	$user = htmlentities(addslashes($_POST['usuario']));

	$pass = htmlentities(addslashes($_POST['clave']));

	$contador =0 ;	

	if (!empty($user) && !empty($pass)) {

		try {

			$con = new PDO('mysql:host=localhost; dbname=cursophpone', 'root', '');

			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$con->exec("SET CHARACTER SET utf8");

			$sql = "SELECT * FROM user WHERE user= :usu ";

			$resultado = $con->prepare($sql);

			$resultado->execute(array(":usu"=> $user));

//ESTE CODIGO ES PARA VERIFICAR LA PASS CIFRADA
			while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
				
				if(password_verify($pass, $registro['pass'])){
					
					$contador++;
				}
			}

			if($contador > 0){

				echo "Usuario esta registrado!";
			}else{
				echo "Usuario no esta registrado";
			}
		} catch (Exception $e) {
			die("Error: " . $e->getMessage());	
		}
	}else{
		echo "CASILLAS INCOMPLETAS";
	}


?>