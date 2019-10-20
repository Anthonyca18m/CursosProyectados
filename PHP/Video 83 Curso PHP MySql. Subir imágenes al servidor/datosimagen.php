<?php  

	$nombre_imagen = $_FILES['imagen']['name'];
	$tipo_imagen = $_FILES['imagen']['type'];
	$tamano_imagen = $_FILES['imagen']['size'];


	if($tamano_imagen<= 1000000){
		
			$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/imagenes/';//RUTA DE LA CARPETA DESTINO EN SERVIDOR

			// movemos la imagen del directorio temporal al directorio escogido
			move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
		
	}else{
		echo "El tamaño excede lo establecido de 1MB";
	}
?>