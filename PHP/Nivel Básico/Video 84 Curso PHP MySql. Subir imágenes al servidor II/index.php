<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="datosimagen.php" method="POST" enctype="multipart/form-data" id="formsito">
		<table>
			<thead>
				<tr>
					<th>
						<label for="imagen">Imagen: </label>
						<!-- 	//el tipo que quieres o en un input puedes poner accept="image/*" y listo pero aqui esphp 
 -->
						<input type="file" name="imagen"  accept="image/*" size="20"><br><br>
						<input type="submit" name="btnguardar" value="Enviar">
					</th>
				</tr>
			</thead>
		</table>
	</form>
</body>
</html>