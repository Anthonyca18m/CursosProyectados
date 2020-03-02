<?php 

	$nombre_host =  "localhost";//el nombre de tu host por defecto XAMPP es localhost
	$nombre_user = "root";// el nombre de tu usuario de mysql
	$password = ""; //si es que tienes contraseña lo pones sino no 
	$database = "bbddblog";//el nombre de la tabla que tu deseas conectar 
	
	$miconexion = new mysqli($nombre_host, $nombre_user, $password, $database);

	/*COMPROBAR CONEXION*/

	if (!$miconexion) {
		echo "Ha fallado la conexion" . mysqli_error();
	
		exit();
	}

	if ($_FILES['imagen']['error']) {
		
		switch ($_FILES['imagen']['error']) {

			case 1: //error exceso de tamaño en php.ini
				
				echo "El tamaño del archivo no es permitido en el servidor";
				break;
			
			case 2: // errror tamaño archivo marcado desde formulario 2MB
				
				echo "El tamaño del archivo excede los 2MB";
				break;

			case 3: //error de corrupcion de archivo o sin internet

				echo "El envio de archivo se interrumpió";
			break;

			case 4: // error de archivo vacio

				echo "No se ha enviado archivo alguno";
			break;
		}
	}else{
		echo "Entrada subida correctamente. <br>";

		if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']== UPLOAD_ERR_OK))) {
			
			$destino_de_ruta = "Imagenes/";

			move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);

			echo "El archivo" . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
		}else{
			echo "Intentelo de nuevo.";
		}
	}

	$eltitulo = $_POST['campo_titulo'];
	$lafecha = date("Y-m-d H:i:s");
	$comentarios = $_POST['area_comentarios'];
	$laimagen = $_FILES['imagen']['name'];

	$miconsulta = "INSERT INTO contenido (titulo, fecha, Comentario, Imagenes) 
	VALUES ('" . $eltitulo . "','" . $lafecha . "','" . $comentarios ."','" . $laimagen . "')";

	$resultado = mysqli_query($miconexion, $miconsulta);

	if (mysqli_affected_rows($miconexion) > 0 ) {
		echo "<br> Se ha agregado el comentario satisfactoriamente.<br><br>";
	}else{
		echo "Intentelo nuevamente<br><br>";
	}

	mysqli_close($miconexion);

 ?>