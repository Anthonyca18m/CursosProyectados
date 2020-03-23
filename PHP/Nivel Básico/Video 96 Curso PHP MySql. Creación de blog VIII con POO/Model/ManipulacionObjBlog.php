<?php 

 /**
  * 
  */
 	include_once("BlogModel.php");

 class ManipulacionObjBlog{
 	
	 private $conexion;

	function __construct($conexion){
		
		$this->setConexion($conexion);
	}

 	public function setConexion(PDO $conexion){

 		$this->conexion = $conexion;
 	}

 	public function getContenidoPorFecha(){

 		$matriz = array();

 		$contador = 0;

 		$resultado = $this->conexion->query("SELECT * FROM contenido ORDER BY fecha DESC");

 		while ($rs = $resultado->fetch(PDO::FETCH_ASSOC)) {
 			
 			$blog = new BlogModel();

 			$blog->setId($rs['id']);
 			$blog->setTitulo($rs['titulo']);
 			$blog->setFecha($rs['fecha']);
 			$blog->setComentario($rs['Comentario']);
 			$blog->setImagen($rs['Imagenes']);

 			$matriz[$contador] = $blog;//desde 0 
 		}
 		return $matriz;
 	}


 	public function insertarContenido(BlogModel $blog){

 		$sql = "INSERT INTO contenido (titulo, fecha, Comentario, Imagenes) VALUES 
 		('" . $blog->getTitulo() . "', '" . $blog->getFecha() . "', '" . $blog->getComentario() . "', '" . $blog->getImagen() . "')";

 		$this->conexion->exec($sql);
 	}

 	

 }
 ?>