<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		try {
			
			$base = new PDO("mysql:host=localhost; dbname=cursophpone", "root", "");

			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$base->exec("SET CHARACTER SET utf8");

			$sql = "SELECT * FROM cliente LIMIT 0,10";//CUANTOS QUIERO VER

			$resultado = $base->prepare($sql);

			$resultado->execute(array());

			while ($rs = $resultado->fetch(PDO::FETCH_ASSOC)) {
				
				echo "Nombre: " . $rs['nombre_cliente'] . " con ";
				echo "DNI : " . $rs['dni'] . "<br>";
			}

			$resultado->closeCursor();

		} catch (Exception $e) {

			echo "Error: " . $e->getLine();
			
		}

	?>	


</body>
</html>