<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
	form{
		width: 400px;
		height: 400px;
		position: relative;
		top: 200px;
		left: 35%;
	}
</style>
</head>

<body>
<?php  
	
	$autenticado = false;



	if(isset($_POST['enviar'])){

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

			$autenticado = true;

			if(isset($_POST["recordar"])){
				setcookie("nombre_user",$_POST["user"], time()+86400);
			}

		}else{

			echo "Credenciales no disponibles";
			// header("refresh:2; url=login.php");
		}

		} catch (Exception $e) {
			die("Error: " . $e->getMessage());
		}
	}


	if ($autenticado == false) {
		
		if (!isset($_COOKIE['nombre_user'])) {
			include("formulario.html");	
		}
		
	}

?>
		<table style=" margin: auto;">
			<thead>
				<tr>
					<th>Contenido</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><center><img src="https://cdn.pixabay.com/photo/2019/06/21/14/09/coffe-4289545_960_720.jpg"></center></td>
				</tr>
			</tbody>
		</table>

</body>
</html>