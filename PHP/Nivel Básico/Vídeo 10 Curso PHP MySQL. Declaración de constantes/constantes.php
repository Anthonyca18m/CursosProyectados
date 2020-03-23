<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	
	//		NOMBRE_CONSTANTE, VALOR_DE_CONSTANTE, TRUE = Sensible a las Aa, FALSE, No sensible a las Aa
	define("PrimeraConstante", "Hola mundo",true);
	
	echo(primeraconstante);
	echo("<br>");
	
	define("Segundoconstante", "Hola mundo x2");
	
	echo(Segundoconstante);
	echo("<br>");

	echo("La línea de esta instrucción es : " . __LINE__);
	echo("<br>");
	echo("Estamos trabajando en este fichero: " . __DIR__);
?>
</body>
</html>