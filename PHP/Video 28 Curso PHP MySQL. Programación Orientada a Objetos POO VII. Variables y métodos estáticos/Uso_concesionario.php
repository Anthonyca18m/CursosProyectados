<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	Compra_vehiculo::$ayuda=10000;//hacemos referencia desde fuera de la clase a una variable estatica	con el nombre
								//de la misma clase donde se encuntra la variable
	
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>