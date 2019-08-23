<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	include("POO_III.php");

	$lamborgini = new Coche();

	$pegaso = new Camion();

	echo "El lamborgini tiene : " . $lamborgini->ruedas . " ruedas<br>";

	echo "El Pegaso tiene : " . $pegaso->ruedas . " ruedas<br>";

?>
</body>
</html>