<?php  

	$nombre_imagen = $_FILES['imagen']['name'];
	$tipo_imagen = $_FILES['imagen']['type'];
	$tamano_imagen = $_FILES['imagen']['size'];



	//la el tamaño
	if($tamano_imagen <=1000000){		

				//RUTA DE LA CARPETA DESTINO EN SERVIDOR
			$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/imagenes/';

			// movemos la imagen del directorio temporal al directorio escogido

			move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

		
	}else{
		echo "Este archivo pesa más de lo permitido 1MB ";
	}
	
	
	$nombre_host =  "localhost";//el nombre de tu host por defecto XAMPP es localhost
	$nombre_user = "root";// el nombre de tu usuario de mysql
	$password = ""; //si es que tienes contraseña lo pones sino no 
	$database = "cursophpone";//el nombre de la tabla que tu deseas conectar 
	
	$Conexion = new mysqli($nombre_host, $nombre_user, $password, $database);

	$sql = "UPDATE producto SET foto =  '$nombre_imagen' WHERE id_producto = '1' ";

	$resultado = mysqli_query($Conexion, $sql);

	if($resultado === true){
		echo "OK";
	}

?>