<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>COOKIE CREADA</h1>
<?php  
	
	//asi se crea cookie nombre, valor									desde el momento que abre +30 seg durará la cookie y de ahi se elimina
	// setcookie("prueba", "Esta es la información de nuestra primera cookie", time()+30);
	
	// para espeficicar el directorio donde se almacenara la cookie
	// 
	setcookie("prueba2", "Esta es la información de nuestra primera cookie", time()+300,"/CursosProyectados/PHP/Video%2064%20Curso%20PHP%20MySql.%20Cookies%20II.%20Par%c3%a1metros%20de%20cookies/Cookie/"); 
	
?>
</body>
</html>