<?php  
	
	$nombre_host =  "localhost";//el nombre de tu host por defecto XAMPP es localhost
	$nombre_user = "root";// el nombre de tu usuario de mysql
	$password = ""; //si es que tienes contraseña lo pones sino no 
	$database = "cursophpone";//el nombre de la tabla que tu deseas conectar 
		
	$Conexion = new mysqli($nombre_host, $nombre_user, $password, $database);

	$nombreArchivo = $_FILES['archivo']['name'];
	$tipoArchivo = $_FILES['archivo']['type'];
	$tamanoArchivo = $_FILES['archivo']['size'];



	//la el tamaño
	if($tamanoArchivo <=5000000){		

		//RUTA DE LA CARPETA DESTINO EN SERVIDOR
		$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/imagenes/';

		// movemos la imagen del directorio temporal al directorio escogido

		move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino.$nombreArchivo);

	}else{
		echo "Este archivo pesa más de lo permitido 5MB ";
	}

	// agarralo y convertirlo a byte 
		//con la r decimos que solo queremos leer ( READ )
		$archivoObjetivo = fopen($carpeta_destino . $nombreArchivo, "r");

		//aqui tenemos el archivo en formato byte
		$contenido = fread($archivoObjetivo, $tamanoArchivo);
		$contenido = addslashes($contenido);//quitamos los espacios

		//cerrando el fopen
		fclose($archivoObjetivo);

		$sql = "INSERT INTO archivos (idArchivo, NombreArchivo, TipoArchivo, Contenido) VALUES(NULL, '$nombreArchivo', '$tipoArchivo', '$contenido')";

		$resultado = mysqli_query($Conexion, $sql);

		if(mysqli_affected_rows($Conexion) > 0){
			echo "Exito!";
		}else{
			echo "Intentelo nuevamente";
		}
?>