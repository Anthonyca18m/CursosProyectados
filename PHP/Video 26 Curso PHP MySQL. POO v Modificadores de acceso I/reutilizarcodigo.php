<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
		<!--
    	Modularización:
        	Dividir en código en partes para poder encontrar errores más fácil por así decirlo.
           
           Modificadores de acceso son:
           		PUBLIC   		-> ACCESIBLE DESDE CUALQUIER PARTE
                PRIVATE 		-> ACCESIBLE DESDE LA PROPIA CLASE
                PROTECTED 		-> ACCESIBLE DESDE LA PROPIA CLASE Y CLASES HEREDADAS
           
        Encapsulación:
        	Significa que para poder acceder a una función de una clase debemos crear un objeto, así tenemos
            un código más ordenado.
    -->
<body>
<?php 

	include("POO_III.php");
	$lamborgini = new Coche();

	$lamborgini->ruedas;
	
	$pegaso = new Camion();
	
	echo $lamborgini->ruedas . "<br>";

	echo $pegaso->establecerColoryNombre("rojo","Prime");
	
	
	
	

?>
</body>
</html>