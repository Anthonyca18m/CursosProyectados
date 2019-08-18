<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	p{
		background:#000;
		color:#0FF;
		text-align:center;
		font-size: bold;
		}
</style>
</head>

<body>

<?php
		if(isset($_POST["button"])){
		$numero1 = $_POST["num1"];
		$numero2 = $_POST["num2"];
		$operacion = $_POST["operacion"];
		
		operaciones($operacion);
		}
		
		function operaciones($operacion){
			global $numero1;
			global $numero2;
			if($operacion == "Suma"){
				
				$resultado = $numero1 + $numero2;
				echo("<p>La Suma total es: $resultado</p>");
				}
			if($operacion == "Resta"){
				$resultado = $numero1 - $numero2;
				echo("<p>La Resta total es: $resultado</p>");
				}
			if($operacion == "Multiplicación"){
				$resultado = $numero1 * $numero2;
				echo("<p>La Multiplicación total es: $resultado</p>");
				}
			if($operacion == "División"){
				$resultado = $numero1 / $numero2;
				echo("<p>La División total es: $resultado</p>");
				}
			if($operacion == "Módulo"){
				$resultado = $numero1 % $numero2;
				echo("<p>El Módulo total es: $resultado</p>");
				}
			if($operacion == "Incremento"){
				$numero1++;
				echo("<p>Incrementando: $numero1</p>");
				}
			if($operacion == "Decremento"){
				$numero1--;
				echo("<p>Decrementando: $numero1</p>");
				}	
		}
		

?>
</body>
</html>