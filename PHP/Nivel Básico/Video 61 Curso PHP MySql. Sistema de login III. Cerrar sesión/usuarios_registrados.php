<?php  
	session_start();//reanudamos la sesion

	if(!isset($_SESSION['usuario'])){
		header("Location:login.php");//redirigimos si no esta logeado
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Bienvenido</h1>
	<?php echo $_SESSION['usuario']; ?>
	<P><h2>SOLO PUEDEN LEER ESTO LOS QUE ESTAN LOGUEADOS</h2></P>

	<a href="cierre.php">
		<h3>Cerrar Sesión</h3>
	</a>
	
</body>
</html>