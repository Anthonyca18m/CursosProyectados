<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<p>Buscar por carácteres principales o primeros (DNI)</p>
	<form action="resultados.php" method="GET">
		<input type="text" name="nombre" id="">
		<input type="submit" name="search" id="search" value="Buscar">
	</form>
</center>
</body>
</html>

<!-- 

	CONSULTAS COMODINES

		SELECT * FROM CLIENTE LIKE 'ANT_ON_';


		LO QUE HACE ESTA SENTENCIA ES QUE TE LISTA CUALQUIER PARECIDO CON EL NOMBRE ANTHONY O ANTONY

		Y EL _ ES PO SI ESTA ESCRITO CON UNA LETRA O CON OTRO EJEMPLO	EXPLOSION(SI NO ESTAS SEGURO O LO HAN ESCRITO MAL EN LA DB CON ESPLOCION O EXPLOCION PUEDES PONER ASI EN LA CONSULTA 'E_PLOCION') Y ESO TE AHORRA TODO LA CHAMBA
-->