<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 
	Para que sirven las funciones? 
		SIRVEN PARA AUTOMATIZAR TAREAS. ESTO PERMITE ELIMINAR CODIGO REPETITIVO EN LOS PROGRAMAS.

	2 TIPOS: 
		PREDEFINIDAS:
			VIENEN PREDEFINIDAS EN EL LENGUAJE DE PHP.
				LINK: https://www.php.net/manual/es/indexes.functions.php
		PROPIAS:
			SON LAS QUE TÚ MISMO CREAS PARA REUTILIZAR TU CÓDIGO.
-->


<?php 
	
	$cambiaraminusculas = "<p>ANTHONY</p>";
	$cambiarmayusculas = "<p>anthony</p>";


	echo strtolower($cambiaraminusculas);// esta funcion es predefinida por PHP, lo que hace es cambiar a minusculas 

	echo "<p><b>". suma(1,2) . "</b></p>";

	function suma($n1, $n2){
		$suma = $n1 + $n2;

		return $suma;
	}


	function frase_mayus($frase, $conversion = true){
		$frase = strtolower($frase);

		if($conversion == true){
			$resultado = ucwords($frase);
		}else{
			$resultado = strtoupper($frase);
		}
		return 	$resultado;
	}

	echo frase_mayus("esto esta escrito en MAYUSCULAS  LAS PRIMERAS LETRAS CONVERTIDO EN minusculas");

?>
</body>
</html>