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

			$datos_por_pagina = 5;
			$paginas = 1;
				
				if(isset($_GET['pag'])){

					if($_GET["pag"] == 1){
						header("Locaton:index.php");
					}else{
						$paginas = $_GET['pag'];
					}
				}
			
			$sql = "SELECT * FROM cliente ";

			$resultado = $base->prepare($sql);

			$resultado->execute(array());

			$num_filas = $resultado->rowCount();//cuenta cuantas filas devuelve el sql

			$total_paginas = ceil($num_filas/$datos_por_pagina);//devuelve cuantas paginas necesitaras y con la funcion ceil redondiamos la division para evitar decimales

			$empezar_desde = ($paginas) * $datos_por_pagina;

			echo "Número de registros de la consulta " . $num_filas . "<br>";

			echo "Mostramos " . $datos_por_pagina . " registros por página <br>";

			echo "Mostrando la página " . $paginas . " de " . $total_paginas . "<br>";

			// while ($rs = $resultado->fetch(PDO::FETCH_ASSOC)) {
				
			// 	echo "Nombre: " . $rs['nombre_cliente'] . " con ";
			// 	echo "DNI : " . $rs['dni'] . "<br>";
			// }

			$resultado->closeCursor();


			echo "<br><br><br><br><br>";

			$sql_limite = "SELECT * FROM cliente  LIMIT $empezar_desde,$datos_por_pagina";

			$resultado = $base->prepare($sql_limite);

			$resultado->execute(array());

			while ($rs = $resultado->fetch(PDO::FETCH_ASSOC)) {
				
				echo "Nombre: " . $rs['nombre_cliente'] . " con ";
				echo "DNI : " . $rs['dni'] . "<br>";
			}

		} catch (Exception $e) {

			echo "Error: " . $e->getLine();
			
		}

		//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<PAGINACION>>>>>>>>>>>>>>>>>>>>>>>>>
		
		for ($i=1; $i <= $total_paginas ; $i++) { 
			
			echo  " <a href='index.php?pag=" . $i . "'>". $i ."</a> ";
		}

	?>	


</body>
</html>