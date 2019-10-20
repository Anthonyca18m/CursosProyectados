<?php 

	include("../Model/BlogModel.php");
	include("../Model/ManipulacionObjBlog.php");

	try {
		$miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');

		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
			
			$destino_de_ruta = "../Imagenes/";

			move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);

			echo "El archivo" . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
		}else{
			echo "Intentelo de nuevo.";
		}
	}

	$manejoObjetos = new ManipulacionObjBlog($miconexion);

	$blog = new BlogModel();

	$blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo'])), ENT_QUOTES);
	$blog->setFecha(Date("Y-m-d H:i:s"));
	$blog->setComentario(htmlentities(addslashes($_POST['area_comentarios'])), ENT_QUOTES);
	$blog->setImagen($_FILES['imagen']['name']);


	$manejoObjetos->insertarContenido($blog);

	echo "<br/>Exito!<br/>";

	} catch (Exception $e) {
		die("Error: " . $e->getMessage());
	}

	



 ?>