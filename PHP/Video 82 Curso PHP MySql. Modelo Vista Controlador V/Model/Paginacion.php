<?php  
	
	require_once("Conexion.php");

	$conexion = Conectar::Conexion();

	$datos_por_pagina = 3;

	

	if(isset($_GET["pag"])){

		if($_GET["pag"]){
			header("Location:index.php");
		}else{
			$pagina = $_GET["pag"];
		}
	}else{
		$pagina = 1;
	}

	$inicio = ($pagina-1) * $datos_por_pagina;

	$sql_total = "SELECT * FROM producto";

	$resultado = $conexion->prepare($sql_total);

	$resultado->execute(array());

	$num_filas = $resultado->rowCount();

	$total_paginas = ceil($num_filas / $datos_por_pagina);

?>