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
	
	$pegaso = new Camion();
	
	$lamborgini->setRuedas(8);//ESTAMOS ESTABLECIENDO UN NUEVO VALOR A LAS RUEDAS
	
	echo "El lamborgini tiene " . $lamborgini->getRuedas() . " ruedas<br>";//AQUI OBTENEMOS EL VALOR Y LO MOSTRAMOS.
	
	
		
	
	
?>
</body>
</html>