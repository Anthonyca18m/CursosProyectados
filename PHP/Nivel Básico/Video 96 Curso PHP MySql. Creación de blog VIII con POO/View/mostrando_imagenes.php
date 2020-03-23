<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	
	include_once("../Model/ManipulacionObjBlog.php");
	

	try {
		$miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');

		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$manejoObjetos = new ManipulacionObjBlog($miconexion);

		$tablaBlog = $manejoObjetos->getContenidoPorFecha();

		if (empty($tablaBlog)) {
			echo "No hay registro Alguno";
		}else{
			foreach ($tablaBlog as $rs) {

				echo "<h3> " . $rs->getTitulo() . " </h3>";
				echo "<h3> " . $rs->getFecha() . " </h3>";
				echo "<div style='width:400px;'><h4> " . $rs->getComentario() . " </h4></div>";
				if ($rs->getImagen() != "") {
					
					echo  "<img src='../imagenes/" . $rs->getImagen() . "' heigth='300px' width='300px' />";
				}
				echo "<hr/>";
			}
		}
	} catch (Exception $e) {
		die("Error: " . $e->getMessage());
	}


	 ?>

	 <br/>
	<a href="Formulario.php">Volver a Formulario</a>

</body>
</html>