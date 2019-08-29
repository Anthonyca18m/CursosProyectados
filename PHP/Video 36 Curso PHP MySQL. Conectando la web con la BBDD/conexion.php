<?php 
	
	$nombre_host =  "localhost";//el nombre de tu host por defecto XAMPP es localhost
	$nombre_user = "root";// el nombre de tu usuario de mysql
	$password = ""; //si es que tienes contraseña lo pones sino no 
	$database = "cursophpone";//el nombre de la tabla que tu deseas conectar 

	/*La función de PHP mysqli hace más fácil conectarse a tu DB para todo
	  los parámetros que te piden son los siguientes:

	  	$nombre_variable = new mysqli($nombre_host, $nombre_user, $password, $database);
		
		la sintáxis es tal cual como lo ven no cambia así esta en su documentación de PHP 
	*/
	$Conexion = new mysqli($nombre_host, $nombre_user, $password, $database);

	if ($Conexion->connect_errno) {
    
    	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;//te muestra el error
	
	}else{
		//echo "Bienvenido"; //si esta todo bien entonces te saldrá Bienvenido
	}
	mysqli_set_charset($Conexion, "utf8");//Esto es para que pueda aceptar los caracteres latinos ejemplo, tildes

	/*SI VAS USAR ESTE ARCHIVO PUES SOLO CAMBIAS EL LAS PROPIEDADES DE CONEXION MÁS DE AHI NO
		Y COMENTAS EL 

			else{
		echo "Bienvenido"; //si esta todo bien entonces te saldrá Bienvenido
				}

				y puedes usar satisfactoriamente.
	*/
?>