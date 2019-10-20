<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>




<?php 
$nombre_host =  "localhost";//el nombre de tu host por defecto XAMPP es localhost
	$nombre_user = "root";// el nombre de tu usuario de mysql
	$password = ""; //si es que tienes contraseña lo pones sino no 
	$database = "cursophpone";//el nombre de la tabla que tu deseas conectar 
	
	$Conexion = new mysqli($nombre_host, $nombre_user, $password, $database);

	$sql = "SELECT * FROM producto";

	$resultado = mysqli_query($Conexion, $sql);

	while ($rs = mysqli_fetch_array($resultado)) {
		
		echo $ruta_imagen = $rs['foto'] . "<br>";
		echo $id_producto = $rs['id_producto'];
	}

 ?>

	<div>
		<img src="/imagenes/<?php echo $ruta_imagen;?>" width="100px;"></img>

	</div>
	
 </body>
</html>