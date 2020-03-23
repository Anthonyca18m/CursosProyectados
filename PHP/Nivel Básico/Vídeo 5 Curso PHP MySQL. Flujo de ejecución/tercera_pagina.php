<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<!--
En este vídeo vemos el flujo de ejecución e un programa PHP. También introducimos el tema de las funciones.
-->
<body>

<?php
	
	echo("Este es el primer mensaje <br>");
	
	dameDatos();
	
	function dameDatos(){
	
		echo ("Este es el mensaje del interior de la funcion <br>");	
	
	}
	
	echo("Este es el segundo mensaje <br>");
	/*
	IMPORTANTE
	include => añade una función o lo que quieras llamar de otro archivo y deja fluir el código si esta mal.
	require => requiere el archivo que pongas sino no funcionará a partir de donde hallas puesto el require
	*/
	include("tercera_pagina_ext.php");
	
	dameDatosExt();
?>

</body>
</html>