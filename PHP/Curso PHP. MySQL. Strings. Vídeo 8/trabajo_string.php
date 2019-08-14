<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<!--
Vemos en este vídeo cómo declarar String en php y cómo comparar si dos string son iguales o no lo son con las funciones strcmp y strcasecmp.
-->
<style>
	.resaltar{
		color: #F00;
		font-weight:bold;
	}
</style>
<body>
<?php
	
	$nombre = "Anthony";
	
	echo("Hola $nombre");
	
	echo("<p class='resaltar'>Esto es un ejemplo de frase</p>");
	//estas dos expresiones es lo mismo pero con diferente forma de escribir
	echo("<p class=\"resaltar\">Esto es un ejemplo de frase</p>");
	
	/*
		strcmp 			=>compara si no coinciden con mayusculas y minusculas devuelve true= 1, false = 0 
		strcasecmp		=>compara si no es igual ignorando Aa devuelve true= 1, false = 0 
	*/
	
	$varaible1 = "comparar";
	$variable2 = "COMPARAR";
	
	$resultado = strcmp($varaible1,$variable2);
	
	echo ("Es resultado es $resultado <br>");
	
	if($resultado){
		echo("No coinciden <br>");
	}else{
		echo("Coinciden <br>");
	}
	
	$varaible1 = "comparar";
	$variable2 = "COMPARAR";

	$resultado = strcasecmp($varaible1,$variable2);
	
	echo ("Es resultado es $resultado <br>");
	
	if(!$resultado){
		echo("Coinciden");
	}else{
		echo("No Coinciden");
	}
?>

</body>
</html>