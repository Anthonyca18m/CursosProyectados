<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 

	$id="";
	$contenido = "";
	$tipo = "";


$nombre_host =  "localhost";//el nombre de tu host por defecto XAMPP es localhost
	$nombre_user = "root";// el nombre de tu usuario de mysql
	$password = ""; //si es que tienes contraseña lo pones sino no 
	$database = "cursophpone";//el nombre de la tabla que tu deseas conectar 
	
	$Conexion = new mysqli($nombre_host, $nombre_user, $password, $database);

	$sql = "SELECT * FROM archivos WHERE idArchivo = 4";

	$resultado = mysqli_query($Conexion, $sql);

	while ($rs = mysqli_fetch_array($resultado)) {
		
		$id = $rs['idArchivo'];
		$nombre = $rs['NombreArchivo'];
		$tipo = $rs['TipoArchivo'];
		$contenido = $rs['Contenido'];
	}

	echo $id . "<br>" ;
	echo $nombre . "<br>" ;
	echo $tipo . "<br>" ;

	echo "<img src='data:image/jpeg; base64, " . base64_encode($contenido) . "'>";

?>

	<div>



	</div>
	
 </body>
</html>