<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="pag_buscqueda_PDO.php" method="POST">
		<input type="text" name="palabra" id="palabra"><BR>
		
		IMPORTADO:<select id="importado" name="importado">
			<option value="1">SI</option>
			<option value="2">NO</option>
		</select><BR>
		<input type="submit" name="buscar" id="buscar">
	</form>
</body>
</html>