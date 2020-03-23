<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<!-- 
Vemos en este vídeo cómo crear variables e introducir comentarios en el código. También vemos las expresiones print y echo.
-->
<body>
<?php
	print("Bienvenidos al curso de PHP <br />");
    
    //imprime y un salto de linea
    /*imprime y un salto de linea*/
    
	$nombre = "Anthony";
	$edad = 20;
	/*
	IMPORTANTE print es una función y echo es una expresión
	print devuelve un valor 1 , echo no
	print demora más en imprimir que echo, por eso en sistemas 
	complejos se usa más echo
	*/
	print($nombre);
	echo($nombre);
	
	print("Mi nombre es: " . $nombre);
	echo("Mi nombre es: " . $nombre);
	//es lo mismo que hacer esto
	print("Mi nombre es: $nombre");
	echo("Mi nombre es: $nombre");
	// el . sirve para concatenar oraciones, un espacio detrás y delante
?>
</body>
</html>