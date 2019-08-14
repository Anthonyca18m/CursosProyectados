<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$nombre = "Anthony";
	
	include("ejemploAmbitoExt.php");
	
	dameDatoExt();
	
	function dameDato(){
		
		global $nombre;/*con esto lo declaras variable global 
		siempre debes ponerlo dentro de la funcion donde
		quieres que funcione*/
		$nombre = "Mia";
	}
	dameDato();
	
	echo($nombre);

?>
</body>
</html>